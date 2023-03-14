<?php

use Illuminate\Support\Facades\Route;

use App\Models\Ledger;
use App\Models\Role;
use App\Models\UserRole;
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

//     // $ledger = Ledger::find(1);
//     // $roles  = $ledger->roles;
//     $ledger = Ledger::with('roles')->whereId(1)->first();
//     dd($ledger);

// });



// Route::get('/', function () {

//     $ledger = Ledger::with('roles')->whereId(1)->first();
//     return response()->json($ledger);

// });


Route::get('/', function () {

    $roles = role::find(1);

    $users = $roles->ledger;

    dd($users);

});
