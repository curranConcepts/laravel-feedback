<?php

use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Get Index page
Route::get('/', [FeedbackController::class, 'index']);

// Get about page
Route::get('/about', [FeedbackController::class, 'about']);

// Store feedback data
Route::post('/', [FeedbackController::class, 'store']);
