<?php
/**
 * Created by PhpStorm.
 * User: DPS-C
 * Date: 5/09/2018
 * Time: 1:34 PM
 */

namespace Ecotickets\Negocio\Logica\MSistema;


use Ecotickets\Datos\Repositorio\MSistema\RolRepositorio;

class RolServicio
{
    protected  $rolRepositorio;
    public function __construct(RolRepositorio $rolRepositorio){
        $this->rolRepositorio = $rolRepositorio;
    }

    public  function GuardarRol($rol){
        return $this->rolRepositorio->GuardarRol($rol);
    }

    public  function  ObtenerListaRoles($idEmpreesa){
        return $this->rolRepositorio->ObtenerListaRoles($idEmpreesa);
    }
}