<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start', function (){
    return view('start', array(
        'vorname' => '<strong>Melissa</strong>'
    ));
});

Route::get('/notes', [NoteController::class, 'index']);

Route::get('/test', function () {
    $numbers = collect([
        ['value' => 1],
        ['value' => 2],
        ['value' => 3],
        ['value' => 4],
        ['value' => 5]
    ])->where('value', '>', 3);

    dump($numbers);

    return view('test', [
        'values' => $numbers
    ]);
});

Route::get('/users/{user}', [UserController::class, 'show']);
