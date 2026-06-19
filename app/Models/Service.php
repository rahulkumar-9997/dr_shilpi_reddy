<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'services_category_id',
        'title',
        'subtitle',
        'slug',
        'short_content',
        'content',
        'main_image',
        'icon_image',
        'details_image',
        'breadcrumb_image',
        'sort_order'
    ];
    public function category()
    {
        return $this->belongsTo(ServicesCategory::class, 'services_category_id');
    }
}
