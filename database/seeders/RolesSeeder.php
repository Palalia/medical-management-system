<?php

namespace Database\Seeders;
use App\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('roles')->delete();
        Rol::create([
            'name' => 'Root',
        ]);
        Rol::create([
            'name' => 'Doctor',
        ]);
        Rol::create([
            'name' => "Visitante",
        ]);
        Rol::create([
            'name' => "Paciente",
        ]);

    }
}
