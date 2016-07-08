<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Autoridade extends Model implements SluggableInterface
{
	use SluggableTrait;

    protected $table = 'autoridades';
    
    protected $fillable = [
        'name', 'tipo', 'slug', 'cargo', 'ordem'
    ];
	
	protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

}