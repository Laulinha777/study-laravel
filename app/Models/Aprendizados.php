<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendizados extends Model
{
    protected $table = 'aprendizados';
    protected $fillable = ['nome_aprendizado', 'data_inicio', 'data_fim_previsao', 'status', 'motivacao', 'id_area_fk', 'id_fonte_fk'];

    public function area(){
        return $this->belongsTo(Area::class, 'id_area_fk');
    }

    public function fonte(){
        return $this->belongsTo(Fontes::class, 'id_fonte_fk');
    }
}
