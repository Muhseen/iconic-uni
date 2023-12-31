<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'quantity',
        'price',
        'cost_price',
        'description',
        'colors',
        'keywords'
    ];
    protected $casts = ['colors' => 'array', 'keywords' => 'array'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
