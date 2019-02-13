<?php

namespace Ecotickets\Datos\Modelos\MSistema;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'Tbl_Ciudades';
    protected $fillable =['id','Codigo_Ciudad','Nombre_Ciudad'];
    public function eventos(){
        return $this->hasMany('Evento','Ciudad_id','id');
    }

    public function departamento(){
        return $this->belongsTo('Eco\Datos\Modelos\Departamento');
    }

    public function asistentes(){
        return $this->hasMany('Asistente','Ciudad_id','id');
    }
}
