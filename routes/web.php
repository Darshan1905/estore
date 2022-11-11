<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\show;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
 

Auth::routes();
// Route::get('/',[show::class,'display']);


Route::get('/', [HomeController::class, 'index']);

Route::get('/detail/{id}', [Show::class, 'detail']);
Route::post('/add_to_cart', [Show::class, 'addtocart']);
Route::get('/cart', [Show::class, 'cartList']);
Route::get('/removeitem/{id}', [Show::class, 'removeItem']);
Route::get('/ordernow', [Show::class, 'orderNow']);
Route::post('/placeorder', [Show::class,'placeOrder']);
Route::get('/myorder', [Show::class,'myOrder']);