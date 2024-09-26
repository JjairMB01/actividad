<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'crear cursos']);
        Permission::create(['name'=> 'editar cursos']);
        Permission::create(['name'=> 'borrar cursos']);
        Permission::create(['name'=> 'ver cursos']);
        Permission::create(['name'=> 'matricular estudiantes']);
        Permission::create(['name'=> 'ver estudiantes']);
    }
}
