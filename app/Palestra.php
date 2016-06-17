<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Palestra extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $table = 'palestras';
    
    protected $fillable = [
        'horario', 'slug', 'palestra', 'mediador', 'dia'
    ];
	
	protected $sluggable = [
        'build_from' => 'horario',
        'save_to'    => 'slug',
    ];

}