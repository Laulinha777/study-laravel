<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
 protected $table = 'categorias';   
 protected $fillable = ['nome'];
 public $timestamps = false;

  public function areas(){
        return $this->hasMany(Areas::class,'id_categoria_fk');
    }
}
