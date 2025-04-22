<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'type', 'category', 'author_name', 'author_image',
        'rating', 'enrollment_count', 'price', 'stock', 'image_path',
    ];

    public static $allowedTypes = ['smartphone', 'vr', 'sd_card', 'software'];

    public function setTypeAttribute($value)
    {
        if (!in_array($value, static::$allowedTypes)) {
            throw new \InvalidArgumentException("Invalid type value: {$value}. Allowed values: " . implode(', ', static::$allowedTypes));
        }
        $this->attributes['type'] = $value;
    }

    public function getImagePathAttribute($value)
    {
        return $value ? (Str::startsWith($value, 'products/') ? asset('storage/' . $value) : asset('frontend/assets/images/' . $value)) : asset('frontend/assets/images/product-placeholder.jpg');
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
