<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
        protected $table = 'calificaciones';

    protected $fillable = [
        'proyecto_id',
        'user_id',

        'rigor_tecnico',
        'creatividad_viabilidad',
        'metodologia',
        'comunicacion',
        'trabajo_equipo',

        'fg_profundidad_coherencia',
        'fg_originalidad_pertinencia',
        'fg_estructura_analisis',
        'fg_exposicion_recursos',
        'fg_organizacion_roles',

        'info_funcionalidad_arquitectura',
        'info_innovacion_usabilidad',
        'info_analisis_codigo',
        'info_exposicion_demostracion',
        'info_gestion_adaptabilidad',

        'total_general',
        'total_fg',
        'total_informatica',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function docente()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
