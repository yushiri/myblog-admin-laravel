<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'preview_image',
        'user_id',
    ];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
