<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'bio',
        'email',
        'phone',
        'address',
        'github',
        'linkedin',
        'cv_file',
    ];
}