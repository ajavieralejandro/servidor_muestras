<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();

            // 1. Nombre del proyecto
            $table->string('nombre_proyecto', 200);

            // 2. Especialidad / Trayecto formativo (JSON)
            // Ejemplo: ["Ciclo básico", "2do 6ta"]
            $table->json('especialidad_trayecto')->nullable();

            // 4. Participantes (alumnos) como lista JSON
            $table->json('participantes')->nullable();

            // 5. Descripción breve
            $table->text('descripcion_breve')->nullable();

            $table->timestamps();

            $table->index('nombre_proyecto');
        });
    }

    public function down(): void {
        Schema::dropIfExists('proyectos');
    }
};
