<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBolsaMensagem extends Model
{
    
    protected $table='mensagem_alunos';
    
    public function relBolsa()
    {
        return $this->hasOne('App\Models\ModelBolsaAluno','id','id_bolsa');
    }
}
