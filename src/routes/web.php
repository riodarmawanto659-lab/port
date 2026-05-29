<?php

use App\Models\Skill;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\ContactController;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

Route::get('/', function () {

    $profile = Profile::first();

    $projects = Project::latest()->get();

    $skills = Skill::latest()->get();

    return view('welcome', compact(
        'profile',
        'projects',
        'skills',
    ));
});

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');