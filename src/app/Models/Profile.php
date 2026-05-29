<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'photo',
        'fullname',
        'title',
        'bio',
        'email',
        'phone',
        'github',
        'linkedin',
        'website',
    ];
}