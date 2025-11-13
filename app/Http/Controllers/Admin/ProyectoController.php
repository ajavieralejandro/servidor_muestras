<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarProyectoRequest;
use App\Http\Requests\ActualizarProyectoRequest;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(Request $request)
    {
        $proyectos = Proyecto::query()
            ->when($request->filled('buscar'), function ($q) use ($request) {
                $s = $request->string('buscar')->toString();

                $q->where(function ($w) use ($s) {
                    $w->where('nombre_proyecto', 'like', "%{$s}%")
                      ->orWhere('descripcion_breve', 'like', "%{$s}%");
                });
            })
            ->orderByDesc('id')
            ->paginate(20)
            ->withQueryString();

        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('admin.proyectos.create');
    }

    public function store(GuardarProyectoRequest $request)
    {
        Proyecto::create($request->validated());

        return redirect()
            ->route('admin.proyectos.index')
            ->with('success', 'Proyecto creado correctamente.');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('admin.proyectos.edit', compact('proyecto'));
    }

    public function update(ActualizarProyectoRequest $request, Proyecto $proyecto)
    {
        $proyecto->update($request->validated());

        return redirect()
            ->route('admin.proyectos.index')
            ->with('success', 'Proyecto actualizado.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return back()->with('success', 'Proyecto eliminado.');
    }
}
