<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre_proyecto',
        'especialidad_trayecto',
        'participantes',
        'descripcion_breve',
    ];

    protected $casts = [
        'especialidad_trayecto' => 'array',   // JSON ⇄ array
        'participantes'         => 'array',   // JSON ⇄ array
    ];

    /** Especialidad / trayecto en una sola línea legible */
    public function especialidadTrayectoLinea(string $sep = ' · '): string
    {
        return collect($this->especialidad_trayecto)->filter()->implode($sep);
    }

    /** Participantes en una sola línea */
    public function participantesLinea(string $sep = ' · '): string
    {
        return collect($this->participantes)->filter()->implode($sep);
    }
}
