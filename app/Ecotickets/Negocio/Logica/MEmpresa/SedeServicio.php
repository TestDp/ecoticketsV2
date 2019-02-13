<?php
/**
 * Created by PhpStorm.
 * User: DPS-C
 * Date: 5/09/2018
 * Time: 9:09 AM
 */

namespace Ecotickets\Negocio\Logica\MEmpresa;


use Ecotickets\Datos\Repositorio\MEmpresa\SedeRepositorio;

class SedeServicio
{
    protected  $sedeRepositorio;
    public function __construct(SedeRepositorio $sedeRepositorio){
        $this->sedeServicio = $sedeRepositorio;
    }

    public  function GuardarSede($Sede){
        return $this->sedeServicio->GuardarSede($Sede);
    }
    public  function  ObtenerListaSedes($idEmpreesa){
        return $this->sedeServicio->ObtenerListaSedes($idEmpreesa);
    }
}