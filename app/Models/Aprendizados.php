<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Fontes;

class Aprendizados extends Model
{
    protected $table = 'aprendizado';
    protected $fillable = ['nome_aprendizado', 'data_inicio', 'data_fim_previsao', 'status_aprendizado', 'id_areas_fk', 'id_fontes_fk'];
    protected $primaryKey = 'id_aprendizado'; 
    public $timestamps = true;


    public function area(){
        return $this->belongsTo(Area::class, 'id_areas_fk', 'id_area');
    }

    public function fonte(){
        return $this->belongsTo(Fontes::class, 'id_fontes_fk',  'id_fonte');
    }
}
