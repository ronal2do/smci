<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Categoria extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $table = 'categorias';
    
    protected $fillable = [
        'nome', 'slug'
    ];
	
	protected $sluggable = [
        'build_from' => 'nome',
        'save_to'    => 'slug',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}