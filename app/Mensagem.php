<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
	protected $table = 'mensagens';
    protected $fillable = [
        'nome', 'email', 'assunto', 'mensagem'
    ];
}
