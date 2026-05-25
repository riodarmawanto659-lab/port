<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'fullname',
        'title',
        'bio',
        'email',
        'phone',
        'github',
        'linkedin',
        'website',
        'photo',
    ];
}