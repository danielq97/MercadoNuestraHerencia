<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    //Scope
    public function scopeNombre($query,$nombre){
        return $query->where('nombre','LIKE',"$nombre%");
     }

}
