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
        'status'
    ];

    public function foundationImages()
    {
        return $this->hasMany(FoundationImage::class, 'foundation_categories_id');
    }
}
