<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Palestrante extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $table = 'palestrantes';
    
    protected $fillable = [
        'name', 'slug', 'resume'
    ];
	
	protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

}