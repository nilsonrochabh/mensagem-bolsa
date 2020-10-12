<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBolsaAluno extends Model
{
    protected $table='bolsa_alunos';

    public function relMensagens()
    {
        return $this->hasMany('App\Models\ModelBolsaMensagem','id_bolsa');
    }
    public function relUser()
    {
        return $this->hasOne('App\User','id','id_user');
    }
}
