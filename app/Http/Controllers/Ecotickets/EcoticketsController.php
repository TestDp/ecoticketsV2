<?php

namespace Ecotickets\Http\Controllers\Ecotickets;

use Eco\Datos\Modelos\Asistente;
use Eco\Datos\Modelos\Ciudad;
use Eco\Datos\Modelos\Departamento;
use Eco\Datos\Modelos\Evento;
use Eco\Negocio\Logica\DepartamentoServicio;
use Eco\Negocio\Logica\EventosServicio;
use Eco\Negocio\Logica\ProductosServicio;
use Ecotickets\Http\Controllers\Controller;
use Eco\Negocio\Logica\AsistenteServicio;



class EcoticketsController extends Controller
{

    protected $eventoServicio;
    protected $departamentoServicio;
    protected $asistenteServicio;
    protected $productosServicio;

    public function __construct(EventosServicio $eventoServicio,
                                DepartamentoServicio $departamentoServicio,
                                AsistenteServicio $asistenteServicio,
                                ProductosServicio $productosServicio)
    {
        $this->departamentoServicio=$departamentoServicio;
        $this->eventoServicio = $eventoServicio;
        $this->asistenteServicio = $asistenteServicio;
        $this->productosServicio = $productosServicio;
    }

    public  function  welcome()
    {
        return view('welcome');
    }
    public  function  ObtenerEventos()
    {
        $eventos = $this->eventoServicio->obtenerEventos();
        $ListaEventos= array('eventos' => $eventos);
        return view('Evento/ListaEventos',['ListaEventos' => $ListaEventos]);
    }


}
