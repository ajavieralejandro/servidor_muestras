<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function __construct()
    {
        // Todas estas rutas se usan con auth:sanctum
        //$this->middleware('auth:sanctum');
    }

    /**
     * GET /api/proyectos/{proyecto}/calificaciones
     * Lista TODAS las calificaciones de un proyecto.
     */
    public function index(Proyecto $proyecto)
    {
        $calificaciones = Calificacion::query()
            ->where('proyecto_id', $proyecto->id)
            ->with(['docente:id,name,email']) // relación docente() en el modelo Calificacion
            ->get();

        return response()->json([
            'data' => $calificaciones,
        ]);
    }

    /**
     * GET /api/proyectos/{proyecto}/mi-calificacion
     * Devuelve la calificación del docente autenticado para ese proyecto.
     */
    public function showMine(Request $request, Proyecto $proyecto)
    {
        $user = $request->user();

        $calificacion = Calificacion::where('proyecto_id', $proyecto->id)
            ->where('user_id', $user->id)
            ->first();

        if (!$calificacion) {
            return response()->json([
                'message' => 'Todavía no cargaste calificación para este proyecto.',
            ], 404);
        }

        return response()->json([
            'data' => $calificacion,
        ]);
    }

    /**
     * POST /api/proyectos/{proyecto}/calificaciones
     * Crea la calificación del docente autenticado para un proyecto.
     */
    public function store(Request $request, Proyecto $proyecto)
    {
        $user = $request->user();

        // Ver si ya calificó
        $yaCalifico = Calificacion::where('proyecto_id', $proyecto->id)
            ->where('user_id', $user->id)
            ->exists();

        if ($yaCalifico) {
            return response()->json([
                'message' => 'Ya cargaste una calificación para este proyecto.',
            ], 409); // Conflict
        }

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

        $totalFg          = $this->promedioDe($data, $fg);
        $totalInformatica = $this->promedioDe($data, $info);
        $totalGeneral     = $this->promedioDe($data, array_merge($general, $fg, $info));

        $calificacion = Calificacion::create(array_merge($data, [
            'proyecto_id'       => $proyecto->id,
            'user_id'           => $user->id,
            'total_general'     => $totalGeneral,
            'total_fg'          => $totalFg,
            'total_informatica' => $totalInformatica,
        ]));

        return response()->json([
            'message' => 'Calificación creada correctamente.',
            'data'    => $calificacion,
        ], 201);
    }

    /**
     * PATCH /api/proyectos/{proyecto}/mi-calificacion
     * Permite que el docente edite su propia calificación.
     */
    public function updateMine(Request $request, Proyecto $proyecto)
    {
        $user = $request->user();

        $calificacion = Calificacion::where('proyecto_id', $proyecto->id)
            ->where('user_id', $user->id)
            ->first();

        if (!$calificacion) {
            return response()->json([
                'message' => 'No existe una calificación tuya para este proyecto.',
            ], 404);
        }

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

        // Combino valores nuevos con los que ya estaban en BD para recalcular promedios
        $base   = $calificacion->toArray();
        $merged = array_merge($base, $data);

        $totalFg          = $this->promedioDe($merged, $fg);
        $totalInformatica = $this->promedioDe($merged, $info);
        $totalGeneral     = $this->promedioDe($merged, array_merge($general, $fg, $info));

        $calificacion->update(array_merge($data, [
            'total_general'     => $totalGeneral,
            'total_fg'          => $totalFg,
            'total_informatica' => $totalInformatica,
        ]));

        return response()->json([
            'message' => 'Calificación actualizada.',
            'data'    => $calificacion->fresh(),
        ]);
    }

    /**
     * Helper: calcula el promedio de las claves dadas que tengan valor.
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
