<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable=['matricula','modelo','color','tipo','pvp','foto','marca_id'];

    //Un coche tendra una unica marca en la relacion 1:n marcas coches

    public function marca(){
        return $this-> belongTo(Marca::class);
    }
}
