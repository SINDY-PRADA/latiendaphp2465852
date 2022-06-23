<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
       //extender modelo para relacionarlo con producto
       public function producto(){
        //1 marca - M productos
        return $this->hasMany(Producto::class);
    }
  
}
