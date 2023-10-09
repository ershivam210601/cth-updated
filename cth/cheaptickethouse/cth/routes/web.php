<?php

use App\Mail\Enquiry;
use App\Http\Controllers\AirportController;

use App\Models\Airport;
use App\Mail\BookingRequest;
use Illuminate\Support\Facades\Mail;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//home
Route::get('/', function () {
    // return view('welcome');

    return view('home', [
        'subtitle' => "Cheap Tickets House, Ranked #1 in cheapest flight bookings",
        'title' => "World's Cheapest Flight Search Engine",
        'subject' => 'Search tours, flights, hotels, rental cars and many more and all for the cheapest fares available',
        'airports' => Airport::all(),
    ]);
});

Route::get('/search', [AirportController::class, 'search'])->name('search');
// Route::get('/', [AirportController::class, 'search'])->name('home');

Route::get('/about', function () {
    return view('about', [
        'airports' => Airport::all(),
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        //'airports' => Airport::all(),
    ]);
});

Route::get('/enquiry', function () {
    return view('enquiry', [
        'subtitle' => "Cheap Tickets House, Ranked #1 in cheapest flight bookings",
    ]);
});

Route::post('/booknow', function () {
    Mail::to("cth.sender@gmail.com")
        ->send(new BookingRequest(request("name"),
                request("phone"), request("email")));
    
    return response('Awesome ! We are processing your request', 200)
                ->header('Content-Type', 'text/plain');
});

Route::post('/enquirenow', function () {
    
    Mail::to("cth.sender@gmail.com")
        ->send(new Enquiry(request("name"),
                request("phone"), request("email")));
    
    return response('Awesome ! We are processing your request', 200)
                ->header('Content-Type', 'text/plain');
    //return(new Enquiry(request("name"),
        //request("phone"), request("email")));
    //return(new Enquiry("Vikas Sood", "934823", "some email"));
    //return response('Awesome ! We are processing your request', 200)
    //              ->header('Content-Type', 'text/plain');
});
