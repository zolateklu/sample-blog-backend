<?php

namespace App\Models;

use App\Http\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use UsesUuid;
    use Sluggable;

    protected $table = 'posts';
    protected $uuidFieldName = 'id';
    protected $fillable = [
        'title',
        'body',
        'slug',
        'imagePath',
        'user_id'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
