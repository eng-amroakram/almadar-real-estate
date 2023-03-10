<?php

use App\Http\Controllers\HomeController;
use App\Models\Offer;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

require __DIR__ . '/public/public.php';
require __DIR__ . '/panel/panel.php';



Route::get('/remove-data', function () {
    $offer = Offer::find(28);
    $offer->delete();
    dd($offer);
});
