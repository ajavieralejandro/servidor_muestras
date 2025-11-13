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
        'especialidad_trayecto' => 'array',
        'participantes'         => 'array',
    ];

    public function especialidadTrayectoLinea(string $sep = ' · '): string
    {
        return collect($this->especialidad_trayecto)->filter()->implode($sep);
    }

    public function participantesLinea(string $sep = ' · '): string
    {
        return collect($this->participantes)->filter()->implode($sep);
    }

    /** 👇 relación con calificaciones */
    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }
}
