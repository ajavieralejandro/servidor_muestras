<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {

        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();

            // Relaciones
            $table->foreignId('proyecto_id')->constrained('proyectos')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            // ====== PAUTA GENERAL ======
            $table->unsignedTinyInteger('rigor_tecnico')->nullable();
            $table->unsignedTinyInteger('creatividad_viabilidad')->nullable();
            $table->unsignedTinyInteger('metodologia')->nullable();
            $table->unsignedTinyInteger('comunicacion')->nullable();
            $table->unsignedTinyInteger('trabajo_equipo')->nullable();

            // ====== ESPECÍFICO: FORMACIÓN GENERAL ======
            $table->unsignedTinyInteger('fg_profundidad_coherencia')->nullable();
            $table->unsignedTinyInteger('fg_originalidad_pertinencia')->nullable();
            $table->unsignedTinyInteger('fg_estructura_analisis')->nullable();
            $table->unsignedTinyInteger('fg_exposicion_recursos')->nullable();
            $table->unsignedTinyInteger('fg_organizacion_roles')->nullable();

            // ====== ESPECÍFICO: INFORMÁTICA ======
            $table->unsignedTinyInteger('info_funcionalidad_arquitectura')->nullable();
            $table->unsignedTinyInteger('info_innovacion_usabilidad')->nullable();
            $table->unsignedTinyInteger('info_analisis_codigo')->nullable();
            $table->unsignedTinyInteger('info_exposicion_demostracion')->nullable();
            $table->unsignedTinyInteger('info_gestion_adaptabilidad')->nullable();

            // Total calculado (lo calculamos en el controlador)
            $table->float('total_general')->nullable();
            $table->float('total_fg')->nullable();
            $table->float('total_informatica')->nullable();

            $table->timestamps();

            // Un docente NO puede evaluar el mismo proyecto dos veces
            $table->unique(['proyecto_id', 'user_id']);
        });

    }

    public function down(): void {
        Schema::dropIfExists('calificaciones');
    }
};
