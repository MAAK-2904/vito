<?php

// git hook
use App\Http\Controllers\API\GitHookController;
use App\Http\Controllers\API\HealthController;
use Illuminate\Support\Facades\Route;

Route::get('health', HealthController::class)->name('api.health');
Route::any('git-hooks', GitHookController::class)->name('api.git-hooks');
