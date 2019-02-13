<?php

use Ecotickets\Datos\Modelos\MSistema\Ciudad;
use Illuminate\Database\Seeder;

class CiudadTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Ciudad::create([
            'Codigo_Ciudad' => '001',
            'Nombre_Ciudad' => 'Rionegro',
            'Departamento_id'=>1
        ]);
    }
}
