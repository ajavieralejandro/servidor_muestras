<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DocentesSeeder extends Seeder
{
    public function run(): void
    {
        $password = 'Docente2025!'; // contraseña común (después pueden cambiarla)

        $docentes = [
            ['name' => 'Evangelina Martinez',     'email' => 'evangelina.martinez@tu-dominio.com'],
            ['name' => 'Antonela Canosa',         'email' => 'antonela.canosa@tu-dominio.com'],
            ['name' => 'Jose Dorvato',            'email' => 'jose.dorvato@tu-dominio.com'],
            ['name' => 'Juan Carlos Rapetti',     'email' => 'juan.rapetti@tu-dominio.com'],
            ['name' => 'Yanina Dacal',            'email' => 'yanina.dacal@tu-dominio.com'],
            ['name' => 'Lisandro Sabino',         'email' => 'lisandro.sabino@tu-dominio.com'],
            ['name' => 'Pablo Landoni',           'email' => 'pablo.landoni@tu-dominio.com'],
        ];

        foreach ($docentes as $d) {
            User::updateOrCreate(
                ['email' => $d['email']],
                [
                    'name'     => $d['name'],
                    'password' => Hash::make($password),
                ]
            );
        }
    }
}
