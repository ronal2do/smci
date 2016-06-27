<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
	protected $table = 'inscritos';
    protected $fillable = [
        'nome', 'email', 'telefone', 'profissao', 'cidade', 'como'
    ];
    //'nome', 'email', 'telefone', 'profissao', 'cidade', 'como'
}
