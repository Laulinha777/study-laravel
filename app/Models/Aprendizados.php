<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendizados extends Model
{
    protected $table = 'aprendizado';
    protected $fillable = ['nome_aprendizado', 'data_inicio', 'data_fim_previsao', 'status_aprendizado', 'id_areas_fk', 'id_fontes_fk'];

    public function area(){
        return $this->belongsTo(Area::class, 'id_area_fk');
    }

    public function fonte(){
        return $this->belongsTo(Fontes::class, 'id_fonte_fk');
    }
}
