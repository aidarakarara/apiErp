<?php

use Carbon\Carbon;

use App\Models\User;
use App\Models\Caisse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = User::find(1);
    return $user;
    /* return $total; */
    return "Ca marche ! ";


    //  return view('welcome');
})->name('voire');



Route::get('facture/{id}', [FactureController::class, 'facture']);
