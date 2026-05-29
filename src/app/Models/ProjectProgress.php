<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
    protected $table = 'project_progresses';

    protected $fillable = [
        'project_id',
        'title',
        'description',
        'progress_percent',
        'date',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class); // Untuk mendapatkan proyek terkait dengan progress ini
    }
}