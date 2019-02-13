<?php

use Ecotickets\Datos\Modelos\MSistema\Departamento;
use Illuminate\Database\Seeder;


class DepartamentoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'Codigo_Departamento' => '001',
            'Nombre_Departamento' => 'Antioquia'
        ]);
    }
}
