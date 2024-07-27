<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'is_active'
    ];

    protected $table = 'services';

    protected $casts = [
        'is_active'=>'boolean',
    ];

    public function detail()
    {
        return $this->hasMany(ServiceDetail::class);
    }

    public function project(){
        return $this->hasMany(Project::class);
    }
}
