<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'dni' => '44223355',
            'title' => 'Una tarea muy simple',
            'description' => 'Esta es una tarea muy simple.',
            'expiration' => '2025-06-06',
            'status' => 'pendiente',
        ]);

    }
}
