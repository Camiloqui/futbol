<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('partidos')->insert([
            'GrupoEquipos' => 1,
            'Equipo' => 1,
        ]);
        DB::table('partidos')->insert([
            'GrupoEquipos' => 1,
            'Equipo' => 2,
        ]);
        DB::table('partidos')->insert([
            'GrupoEquipos' => 1,
            'Equipo' => 3,
        ]);
        DB::table('partidos')->insert([
            'GrupoEquipos' => 1,
            'Equipo' => 4,
        ]);
        DB::table('Puntos')->insert([
            'GrupoEquipos' => 1,
            'Equipos' => 1,
        ]);
        DB::table('Puntos')->insert([
            'GrupoEquipos' => 1,
            'Equipos' => 2,
        ]);
        DB::table('Puntos')->insert([
            'GrupoEquipos' => 1,
            'Equipos' => 3,
        ]);
        DB::table('Puntos')->insert([
            'GrupoEquipos' => 1,
            'Equipos' => 4,
        ]);
    }
}
