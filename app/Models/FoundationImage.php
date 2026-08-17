<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundationImage extends Model
{
    use HasFactory;
    protected $table = 'foundation_images';
    protected $fillable = [
        'id',
        'foundation_categories_id',
        'media_type',
        'image_path',
        'sort_order'
    ];

    public function foundationCategory()
    {
        return $this->belongsTo(FoundationCategory::class, 'foundation_categories_id');
    }
}
