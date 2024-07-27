<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'image',
        'is_active'
    ];
    protected $table = "teams";

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
