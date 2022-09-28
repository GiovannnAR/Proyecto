<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/userTI', App\Http\Controllers\Auth\UserTIController::class)->names('userTI');//  manda (CRUD)

//AVATAR
Route::get('profile', 'App\Http\Controllers\Auth\UserTIController@profile');
Route::post('profile', 'App\Http\Controllers\Auth\UserTIController@update_avatar');


Route::resource('/networkDiagram', App\Http\Controllers\NetworkDiagram\NetworkDiagramController::class)->names('networkDiagram');//  manda (CRUD)
Route::resource('/layoutPA', App\Http\Controllers\LayoutPA\LayoutPAController::class)->names('layoutPA');// manda (CRUD)
Route::resource('/layoutPB', App\Http\Controllers\LayoutPB\LayoutPBController::class)->names('layoutPB');//  manda (CRUD)

Route::resource('/inventoryTI', App\Http\Controllers\InventoryTI\InventoryTIController::class)->names('inventoryTI');//  manda (CRUD)





Route::resource('/carruselCMS', App\Http\Controllers\CarruselCMS\CarruselCMSController::class)->names('CarruselCMS');//  manda (CRUD)


/*
Route::get('/', function () {
    $patch_panel = PatchPanel::all();
    return View::make('index')->whith('patch_panel', $patch_panel);
    
});*/

Route::get('/ajax-subport', function () {

    $patch_id =Input::get('patch_id');

    $patch_port = PatchPanelPort::where('patch_panel_id', '=', $patch_id)->get();
    return Response::json($patch_port);
    
});