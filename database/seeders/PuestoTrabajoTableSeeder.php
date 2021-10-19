<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuestoTrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puesto_trabajos')->insert([
            'id'=>'1',
            'nombre'=>'contador',
            'descripcion'=>'contador de la empresa',
            'salario'=>'200.00',
            'seccion_departamento_id'=>'1'
        ]);
    }
}
