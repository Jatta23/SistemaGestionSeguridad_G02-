<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombres'=>'Diego Armando',
            'apellidos'=>'Perez Lopez',
            'genero_id'=>'1',
            'estado_civil_id'=>'1',
            'puesto_trabajo_id'=>'1',
            'dui'=>'05817375-5',
            'nit'=>'0614-070199-122-0',
            'isss'=>'123456789',
            'nup'=>'361651670003',
            'direccion'=>'Urbanizacion Jardines de la Sabana 1, Avenida B',
            'municipio_id'=>'1',
            'telefono_celular'=>'7777-7777',
            'telefono_casa'=>'2222-2222'
        ]);
    }
}
