<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionDepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccion_departamentos')->insert([
            'id'=>'1',
            'descripcion'=>'Contabilidad',
            'departamento_empresa_id'=>'1'
        ]);
    }
}
