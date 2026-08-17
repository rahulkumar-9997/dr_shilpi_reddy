<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundationCategory extends Model
{
    use HasFactory;
    protected $table = 'foundation_categories';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'work_id',
        'description',
        'meta_title',
        'meta_description',
        'status'
    ];

    public function foundationImages()
    {
        return $this->hasMany(FoundationImage::class, 'foundation_categories_id');
    }

    public function latestFoundationImage()
    {
        return $this->hasOne(FoundationImage::class, 'foundation_categories_id')
            ->ofMany([
                'sort_order' => 'max',
                'created_at' => 'max',
            ]);
    }
}
