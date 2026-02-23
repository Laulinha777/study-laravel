<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = ['nome_area'];
    public $timestamps = false;


    public function aprendizados(){
        return $this->hasMany(Aprendizados::class, 'id_area_fk');
    }
}
