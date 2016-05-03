<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    
    protected $fillable = [
        'nome'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
