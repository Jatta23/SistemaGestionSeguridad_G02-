<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DepartamentoEmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento_empresas')->insert([
            'id'=>'1',
            'nombre'=>'Financiero',
            'numero_empleados'=>'10',
            'empresa_id'=>'1'
        ]);

        DB::table('departamento_empresas')->insert([
            'id'=>'2',
            'nombre' => 'Administracion',
            'numero_empleados' => '20',
            'empresa_id' => '1'
        ]);
    }
}
