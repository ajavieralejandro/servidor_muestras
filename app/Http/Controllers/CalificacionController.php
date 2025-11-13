<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Formulario para que un docente califique un proyecto.
     */
    public function create(Proyecto $proyecto)
    {
        // Si usás policies, podrías poner:
        // $this->authorize('calificar', $proyecto);

        return view('calificaciones.form', [
            'proyecto' => $proyecto,
        ]);
    }

    /**
     * Guarda la calificación de un docente para un proyecto.
     * Respeta la restricción: un docente = una sola calificación por proyecto.
     */
    public function store(Request $request, Proyecto $proyecto)
    {
        $user = $request->user();

        // Chequear si ya calificó este proyecto
        $yaCalifico = Calificacion::where('proyecto_id', $proyecto->id)
            ->where('user_id', $user->id)
            ->exists();

        if ($yaCalifico) {
            return redirect()
                ->route('proyectos.show', $proyecto)
                ->withErrors('Ya cargaste una calificación para este proyecto.');
        }

        // Validación: escala 1–10 (ajustá min/max según tu pauta)
        $rulesBase = 'nullable|integer|min:1|max:10';

        $data = $request->validate([
            // PAUTA GENERAL
            'rigor_tecnico'           => $rulesBase,
            'creatividad_viabilidad'  => $rulesBase,
            'metodologia'             => $rulesBase,
            'comunicacion'            => $rulesBase,
            'trabajo_equipo'          => $rulesBase,

            // FORMACIÓN GENERAL
            'fg_profundidad_coherencia'    => $rulesBase,
            'fg_originalidad_pertinencia'  => $rulesBase,
            'fg_estructura_analisis'       => $rulesBase,
            'fg_exposicion_recursos'       => $rulesBase,
            'fg_organizacion_roles'        => $rulesBase,

            // INFORMÁTICA
            'info_funcionalidad_arquitectura' => $rulesBase,
            'info_innovacion_usabilidad'      => $rulesBase,
            'info_analisis_codigo'            => $rulesBase,
            'info_exposicion_demostracion'    => $rulesBase,
            'info_gestion_adaptabilidad'      => $rulesBase,
        ]);

        // Claves por grupo
        $general = [
            'rigor_tecnico',
            'creatividad_viabilidad',
            'metodologia',
            'comunicacion',
            'trabajo_equipo',
        ];

        $fg = [
            'fg_profundidad_coherencia',
            'fg_originalidad_pertinencia',
            'fg_estructura_analisis',
            'fg_exposicion_recursos',
            'fg_organizacion_roles',
        ];

        $info = [
            'info_funcionalidad_arquitectura',
            'info_innovacion_usabilidad',
            'info_analisis_codigo',
            'info_exposicion_demostracion',
            'info_gestion_adaptabilidad',
        ];

        // Cálculos de totales (promedio de cada grupo)
        $totalFg          = $this->promedioDe($data, $fg);
        $totalInformatica = $this->promedioDe($data, $info);

        // Total general: promedio de todos los ítems cargados
        $totalGeneral = $this->promedioDe($data, array_merge($general, $fg, $info));

        // Crear la calificación
        Calificacion::create(array_merge($data, [
            'proyecto_id'      => $proyecto->id,
            'user_id'          => $user->id,
            'total_general'    => $totalGeneral,
            'total_fg'         => $totalFg,
            'total_informatica'=> $totalInformatica,
        ]));

        return redirect()
            ->route('proyectos.show', $proyecto)
            ->with('status', 'Calificación guardada correctamente.');
    }

    /**
     * Calcula el promedio de un subconjunto de claves del array $data.
     */
    private function promedioDe(array $data, array $keys): ?float
    {
        $valores = collect($keys)
            ->map(fn ($k) => $data[$k] ?? null)
            ->filter(fn ($v) => !is_null($v));

        if ($valores->count() === 0) {
            return null;
        }

        return round($valores->avg(), 2);
    }
}
