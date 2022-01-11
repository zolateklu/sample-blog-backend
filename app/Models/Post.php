<?php

namespace App\Models;

use App\Http\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use UsesUuid;
    protected $table = 'posts';
    protected $uuidFieldName = 'id';
    protected $fillable = [
        'title',
        'body',
        'slug',
        'imagePath',
        'user_id'
    ];
}
