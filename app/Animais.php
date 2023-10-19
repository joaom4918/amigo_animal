<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animais extends Model
{

    protected $primaryKey="idani";
    protected $fillable = [
        'nome', 'especie', 'data_chegada','imagem','descricao'
    ];
}
