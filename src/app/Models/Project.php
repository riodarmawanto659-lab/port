<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'tech_stack',
        'github_url',
        'demo_url',
        'status',
        'start_date',
        'end_date',
    ];

    public function progresses()
    {
        return $this->hasMany(ProjectProgress::class); // Untuk mendapatkan semua progress terkait dengan proyek ini
    }
}