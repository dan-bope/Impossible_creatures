<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create_user', [\App\Http\Controllers\UserController::class, 'create']);
Route::get('/print_user', [\App\Http\Controllers\UserController::class, 'print_users']);
Route::post('/login_user', [\App\Http\Controllers\UserController::class, 'login_user']);
Route::get('/print_x_users/{point}/users',[\App\Http\Controllers\UserController::class, 'print_x_users']);
//Route::get('/print_user_vendeur', [\App\Http\Controllers\UserController::class, 'print_user_vendeur']);
//Route::get('/print/{animal}/users', [\App\Http\Controllers\UserController::class, 'print_bis']);
Route::get('/print_user_vendeur/{id}/vendeurs', [\App\Http\Controllers\UserController::class, 'print_user_vendeur']);

//Especes

Route::get('/print_espece', [\App\Http\Controllers\EspeceController::class, 'print_especes']);
Route::post('/create_espece', [\App\Http\Controllers\EspeceController::class, 'create_espece']);
Route::put('/update_espece/{id}', [\App\Http\Controllers\EspeceController::class, 'mise_a_jour_espece']);
Route::delete('/supprime_espece/{id}', [\App\Http\Controllers\EspeceController::class, 'supprime_espece']);
Route::get('/print_especes_users/{id}/users', [\App\Http\Controllers\EspeceController::class, 'print_especes_users']);



//Animals
Route::get('/print_animal', [\App\Http\Controllers\AnimalController::class, 'print_animal']);
Route::post('/create_animal', [\App\Http\Controllers\AnimalController::class, 'create_animal']);
Route::put('/update_animal/{id}', [\App\Http\Controllers\AnimalController::class, 'mise_a_jour_animal']);
Route::delete('/supprime_animal/{id}', [\App\Http\Controllers\AnimalController::class, 'supprime_animal']);
Route::get('/print_animaux_users/{id}/users', [\App\Http\Controllers\AnimalController::class, 'print_animaux_users']);
Route::get('/print_users_animaux_possedes/{animal}/users', [\App\Http\Controllers\AnimalController::class, 'print_users_animaux_possedes']);

//Transactions
Route::get('/print_Alltransactions', [\App\Http\Controllers\TransactionController::class, 'print_Alltrabsactions']);
Route::get('/print_TransactionByUser/{id}', [\App\Http\Controllers\TransactionController::class, 'print_TransactionByUser']);
Route::post('/create_Transaction', [\App\Http\Controllers\TransactionController::class, 'create_Transaction']);
Route::delete('/annuler_transaction/{id}', [\App\Http\Controllers\TransactionController::class, 'annuler_transaction']);
Route::put('/mise_a_jour_transaction/{id}', [\App\Http\Controllers\TransactionController::class, 'mise_a_jour_transaction']);
