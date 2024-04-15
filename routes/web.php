<?php

use App\Models\Tour;
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
    $tours=Tour::all();
    return view('home',[
        "tours"=>$tours
    ]);
});
Route::get('/tour/add', function () {
    return view('tours.add');
});
Route::post('/tour/create', function () {
    $title=request("title");
    $description=request("description");
    Tour::create([
        "title"=>$title,
        "description"=>$description
    ]);
    return redirect("/");
});

Route::get('/tour/{id}/edit', function ($id) {
    $tour=Tour::find($id);
    return view('tours.edit',[
        "tour"=>$tour
    ]);
});

Route::put('/tour/update', function () {
    $id=request("id");
    $title=request("title");
    $description=request("description");

    $tour=Tour::find($id);
    $tour->update([
        "title"=>$title,
        "description"=>$description
    ]);
    return redirect("/");
});
