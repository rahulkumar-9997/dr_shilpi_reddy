<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schlorship extends Model
{
    use HasFactory;
    protected $table = 'schlorships';
    protected $fillable = [
        'title',
        'main_image',
        'description',
        'status',
    ];
    public function images()
    {
        return $this->hasMany(SchlorshipImages::class, 'schlorship_id');
    }
}