<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $fillable = [
        'titulo', 'texto', 'user_id', 'category_id', 'slug'
    ];

        protected $sluggable = [
        'build_from' => 'titulo',
        'save_to'    => 'slug',
    ];

    public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLike($query, $field, $value)
    {
        return $query->where($field,'LIKE',"%{$value}%");
    }
}
