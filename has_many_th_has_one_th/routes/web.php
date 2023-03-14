<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\Item;
use App\Models\Type;

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
    $Category = Category::find(1);
    $item = $Category->items;

    dd($item);
});
