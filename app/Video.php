<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Video extends Model implements SluggableInterface
{
    use SluggableTrait;
	
	protected $fillable = ['url', 'titulo', 'isfeatured', 'slug'];
    
    protected $sluggable = [
        'build_from' => 'titulo',
        'save_to'    => 'slug',
    ];

}