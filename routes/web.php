<?php

use App\Livewire\Calendar;
use App\Livewire\Chat;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\HomePage;
use App\Livewire\Navigation;
use App\Livewire\Parcours;
use App\Livewire\Signin;
use App\Livewire\Signup;
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

Route::get('/', HomePage::class);
Route::get('/signup', Signup::class);
Route::get('/signin', Signin::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/chat', Chat::class);
Route::get('/calendar', Calendar::class);
Route::get('/contact', Contact::class);
Route::get('/parcours', Parcours::class);

