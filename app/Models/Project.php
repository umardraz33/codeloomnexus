<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'project_logo',
        'description',
        'is_active',
        'service_id',
        'servicedetail_id'
    ];

    protected $table = "projects";

    protected $casts = [
        'is_active'=>'boolean',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function serviceDetail()
    {
        return $this->belongsTo(Servicedetail::class, 'servicedetail_id');
    }


}
