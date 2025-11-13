<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
 

    /**
     * GET /api/proyectos
     * Lista paginada de proyectos con promedio y cantidad de calificaciones.
     */
    public function index(Request $request)
    {
        $proyectos = Proyecto::query()
            ->withAvg('calificaciones as promedio_total', 'total_general')
            ->withCount('calificaciones')
            ->orderBy('id')
            ->paginate(50);

        return response()->json($proyectos);
    }

    /**
     * POST /api/proyectos
     * Crea un nuevo proyecto.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_proyecto'       => 'required|string|max:255',
            'descripcion_breve'     => 'nullable|string',

            'especialidad_trayecto'   => 'nullable|array',
            'especialidad_trayecto.*' => 'nullable|string|max:255',

            'participantes'           => 'nullable|array',
            'participantes.*'         => 'nullable|string|max:255',
        ]);

        $proyecto = Proyecto::create($data);

        return response()->json([
            'message' => 'Proyecto creado correctamente.',
            'data'    => $proyecto,
        ], 201);
    }

    /**
     * GET /api/proyectos/{proyecto}
     * Devuelve un proyecto con sus calificaciones.
     */
    public function show(Proyecto $proyecto)
    {
        $proyecto->load('calificaciones');

        return response()->json($proyecto);
    }

    /**
     * PUT/PATCH /api/proyectos/{proyecto}
     * Actualiza un proyecto existente.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $data = $request->validate([
            'nombre_proyecto'       => 'sometimes|required|string|max:255',
            'descripcion_breve'     => 'sometimes|nullable|string',

            'especialidad_trayecto'   => 'sometimes|nullable|array',
            'especialidad_trayecto.*' => 'nullable|string|max:255',

            'participantes'           => 'sometimes|nullable|array',
            'participantes.*'         => 'nullable|string|max:255',
        ]);

        $proyecto->update($data);

        return response()->json([
            'message' => 'Proyecto actualizado correctamente.',
            'data'    => $proyecto->fresh(),
        ]);
    }

    /**
     * DELETE /api/proyectos/{proyecto}
     * Elimina un proyecto.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return response()->json([
            'message' => 'Proyecto eliminado correctamente.',
        ], 200);
        // si preferís 204:
        // return response()->noContent();
    }

    /**
     * GET /api/proyectos/mejores
     * Devuelve proyectos ordenados por promedio de total_general.
     */
    public function mejores()
    {
        $proyectos = Proyecto::query()
            ->withAvg('calificaciones as promedio_total', 'total_general')
            ->withCount('calificaciones')
            ->having('promedio_total', '>', 0)
            ->orderByDesc('promedio_total')
            ->orderByDesc('calificaciones_count')
            ->take(20)
            ->get();

        return response()->json([
            'data' => $proyectos,
        ]);
    }
}
