<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fontes extends Model
{
    protected $table = 'fonte';
    protected $filable = ['nome_fonte'];
    public $timestamps = 'false';

    public function aprendizados(){
        return $this->hasMany(Aprendizados::class, 'id_fonte_fk');
    }
}
