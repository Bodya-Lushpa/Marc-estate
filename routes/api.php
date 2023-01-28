<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\TypeRealController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\PlanRoomController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\StatusProjectController;
use App\Models\Country;
use App\Models\StatusProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::apiResources([
	'news' => NewsController::class,
	'projects' => ProjectController::class,
	'partner' => PartnerController::class,
	'type-real' => TypeRealController::class,
	'counties' => CountryController::class,
	'regions' => RegionController::class,
	'cities' => CityController::class,
	'plan-room' => PlanRoomController::class,
	'status-projects' => StatusProjectController::class,
	'plans' => PlanController::class,
]);
