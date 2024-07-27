<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'slug',
        'comment',
        'image',
        'is_active'
    ];

    protected $table = "testimonials";

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
