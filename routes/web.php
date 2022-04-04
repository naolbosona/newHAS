<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route ::get("/",[HomeController::class,"index"]);
Route ::get("/users",[AdminController::class,"users"]);
Route ::get("/sellhousehome",[HomeController::class,"sellhousehome"]);
Route ::get("/tobeouragent",[HomeController::class,"tobeouragent"]);
Route ::get("/renthousehome",[HomeController::class,"renthousehome"]);
Route ::get("/search",[HomeController::class,"search"]);
Route ::get("/rentlandhome",[HomeController::class,"rentlandhome"]);
Route ::get("/userrenthouse",[HomeController::class,"userrenthouse"]);
Route ::get("/userhousesell",[HomeController::class,"userhousesell"]);
Route ::get("/userrenthouse",[HomeController::class,"userrenthouse"]);
Route ::get("/userviewcomment",[HomeController::class,"userviewcomment"]);
Route ::get("/userhome",[HomeController::class,"userhome"]);
Route ::get("/home",[HomeController::class,"home"]);
Route ::get("/deletehousesell/{id}",[AdminController::class,"deletehousesell"]);
Route ::get("/housesell",[AdminController::class,"housesell"]);
Route ::get("/renthouse",[AdminController::class,"renthouse"]);
Route ::get("/landlorddata",[AdminController::class,"landlorddata"]);
Route ::get("/agentrenthouse",[AdminController::class,"agentrenthouse"]);
Route ::get("/agentsellhouse",[AdminController::class,"agentsellhouse"]);
Route ::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);


Route ::get("/landdetail/{home}",[HomeController::class,"landdetail"]);
Route ::get("/sellhousedetail/{home}",[HomeController::class,"sellhousedetail"]);
Route ::get("/renthousedetail/{home}",[HomeController::class,"renthousedetail"]);
Route ::get("/deleterenthouse/{id}",[AdminController::class,"deleterenthouse"]);
Route ::get("/updatehousesell/{id}",[AdminController::class,"updatehousesell"]);
Route ::post("/uphousesell/{id}",[AdminController::class,"uphousesell"]);
Route ::get("/updaterenthouse/{id}",[AdminController::class,"updaterenthouse"]);
Route ::post("/uprenthouse/{id}",[AdminController::class,"uprenthouse"]);
Route ::get("/housesell",[AdminController::class,"housesell"]);
Route ::get("/redirects",[HomeController::class,"redirects"]);
Route ::post("/uploadsellhouse",[AdminController::class,"uploadsellhouse"]);
Route ::post("/uploadrenthouse",[AdminController::class,"uploadrenthouse"]);
Route ::post("/uploadland",[AdminController::class,"uploadland"]);
Route ::post("/uploadregister",[AdminController::class,"uploadregister"]);
Route ::post("/comment",[AdminController::class,"comment"]);
Route ::post("/adminchat",[AdminController::class,"adminchat"]);
Route ::get("/viewcomment",[AdminController::class,"viewcomment"]);
Route ::get("/viewagentregister",[AdminController::class,"viewagentregister"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
