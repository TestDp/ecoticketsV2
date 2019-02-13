<?php

namespace Ecotickets\Datos\Modelos\MPago;
use Illuminate\Database\Eloquent\Model;

class PrecioBoleta extends Model
{
    protected $table = 'Tbl_PreciosBoletas';
    protected $fillable =['localidad','Evento_id','precio','cantidad'];

    public function evento(){
        return $this->belongsTo('Evento');
    }

}
