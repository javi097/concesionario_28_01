<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable=['nombre','logo','pais'];

    //Vamos con las relaciones es 1:N es decir de una marca
    //tendremos muchos coches, en marcas pondremos:

    public function coches(){
        return $this->hasMany(Coche::class);
    }
}
