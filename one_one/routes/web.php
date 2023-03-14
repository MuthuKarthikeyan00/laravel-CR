<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Models\Ledger;
use App\Models\Phone;
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

// Route::get('/', function () {
//     $Ledger = Ledger::with('phone')->whereId(1)->first();
//     return Response::json($Ledger);
// });

Route::get('/', function () {
    $Phone = Phone::with('ledger')->whereId(1)->first();

    dd($Phone);

    return Response::json($Phone);
});


// Route::get('/', function () {
//     // $Ledger = Ledger::find(1);
//     // $phone = new Phone();
//     // $phone->phone = "987654321";

//     // // dd( $Ledger->phone());

//     // // $Ledger->phone()->update($phone->toArray());

//     // echo "save";

//     //     $Ledger = Ledger::find(1);
//     //     $Phone = Phone::find(1);

//     //     $Phone->ledger()->associate($Ledger)->save();

//     // echo "save";

// });
