<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicedetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'svg',
        'description',
        'service_id',
        // 'project_overview_image',
        // 'project_title',
        // 'project_description',
        'is_active'
    ];

    protected $table = 'servicedetails';

    protected $casts = [
        'is_active'=>'boolean',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class , 'servicedetail_id');
    }
}
