<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aprendizados;

class Area extends Model
{
    protected $table = 'areas';
    protected $fillable = ['nome_area'];
    protected $primaryKey = 'id_area';
    public $timestamps = false; 



    public function aprendizados(){
        return $this->hasMany(Aprendizados::class, 'id_areas_fk', 'id_area');
    }
}
