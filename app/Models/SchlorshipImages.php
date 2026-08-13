<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchlorshipImages extends Model
{
    use HasFactory;
    protected $table = 'schlorship_images';
    protected $fillable = [
        'schlorship_id',
        'title',
        'image',
        'sort_order',
        'status'
    ];
}
