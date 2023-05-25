<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Symfony\Component\HttpFoundation\Request;

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


Route::get('/',[HomeController::class,"index"]);
Route::get('/users',[AdminController::class,"user"]);
Route::get('/foodmenu',[AdminController::class,"foodmenu"]);
Route::post('/uploadfood',[AdminController::class,"upload"]);
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);


Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);


Route::get('/updatemenu/{id}',[AdminController::class,"updatemenu"]);
Route::post('/update/{id}',[AdminController::class,"update"]);
Route::post('/reservation',[AdminController::class,"reservation"]);
Route::get('/viewreservation',[AdminController::class,"viewreservation"]);
Route::get('/orders',[AdminController::class,"orders"]);
Route::get('/deleteorder/{id}', [AdminController::class,"deleteorder"])->name('deleteorder');

Route::get('/search',[AdminController::class,"search"]);



Route::post('/addcart/{id}',[HomeController::class,"addcart"]);
Route::get('/showcart/{id}',[HomeController::class,"showcart"]);
Route::get('/remove/{id}',[HomeController::class,"remove"]);


Route::post('/update-quantity/{id}', [HomeController::class, 'updateQuantity']);




//
Route::post('/orderconfirm',[HomeController::class,"orderconfirm"]);





//



Route::get('/panel',[HomeController::class,"panel"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





Route::post('/update-location', function(Request $request) {
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');

    // Use a geocoding API to get the user's address from their latitude and longitude
    $geocode_url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$latitude.','.$longitude.'&key='.env('GOOGLE_MAPS_API_KEY');
    $geocode_response = file_get_contents($geocode_url);
    $geocode_data = json_decode($geocode_response, true);

    // Extract the address from the geocoding response
    $address = '';
    if (!empty($geocode_data['results'][0]['formatted_address'])) {
        $address = $geocode_data['results'][0]['formatted_address'];
    }

    // Update the user's address in the database
    $user = Auth::user();
    $user->address = $address;
    $user->save();

    // Return the address to the client
    return response()->json(['address' => $address]);
});





