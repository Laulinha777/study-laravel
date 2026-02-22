<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = ['nome_area', 'id_categoria_fk'];
    public $timestamps = false;

    public function categorias(){
        return $this->belongsTo(Categoria::class, 'id_categoria_fk');
    }

    public function aprendizados(){
        return $this->hasMany(Aprendizados::class, 'id_area_fk');
    }
}
