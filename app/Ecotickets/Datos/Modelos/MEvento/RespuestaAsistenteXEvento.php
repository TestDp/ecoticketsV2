<?php

namespace Ecotickets\Datos\Modelos\MEvento;

use Illuminate\Database\Eloquent\Model;

class RespuestaAsistenteXEvento extends Model
{
    protected $table = 'tbl_respuestas_asistentesXeventos';
    protected $fillable =['AsistenteXEvento_id','Respuesta_id'];

    public function respuesta(){
        return $this->belongsTo('Respuesta');
    }

    public function asistenteXevento(){
        return $this->belongsTo('AsistenteXEvento');
    }
}
