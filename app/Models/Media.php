<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = [
        'id',
        'title',
        'media_image',
        'sort_order',
        'user_id',
		'media_link_url'
    ];
}
