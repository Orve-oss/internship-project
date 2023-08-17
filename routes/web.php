<?php

use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\KiosqueController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeCompteController;
use App\Http\Controllers\TypeTransactionController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/accueil', [TransactionController::class, 'accueil']);
Route::get('/chart', [ChartJSController::class, 'chart']);

Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/dashboard', [TransactionController::class, 'index']);
Route::get('/dash', [TransactionController::class, 'dashboard']);
Route::get('/profil', [UserController::class, 'show'])->name('show');
Route::post('/profilUtil', [UserController::class, 'profilPage'])->name('update');

Route::get('/transfert', [TransactionController::class, 'transfert']);
Route::get('/retrait', [TransactionController::class, 'retrait']);

Route::get('/depot', [TransactionController::class, 'depot']);
Route::post('/depot', [TransactionController::class, 'depotPage'])->name('depot');
Route::get('/delete/{id}', [TransactionController::class, 'delete_trans']);
Route::get('/tables', [TransactionController::class, 'tables']);

Route::get('/transaction/{id}/valider', [TransactionController::class, 'validationDepot'])->name('valide');
Route::get('/valDepot', [TransactionController::class, 'valide']);

Route::post('/transaction/{id}/valider-refuser', [TransactionController::class, 'validerRefuserTransaction'])->name('validation');



/* Route::get('/update/{id}',[TransactionController::class, 'update']); */


Route::get('/create', [UserController::class, 'registerPage']);
Route::post('/create', [UserController::class, 'register'])->name('register');
Route::get('/forgot', [TransactionController::class, 'forgot']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/liste', [UserController::class, 'liste']);
Route::get('/creation', [UserController::class, 'creation']);
Route::post('/creation', [UserController::class, 'creationPage']);
Route::get('/update/{id}', [UserController::class, 'editer']);
Route::post('/update/traitement', [UserController::class, 'edit'])->name('editer');
Route::get('/delete/{id}',[UserController::class, 'delete_user']);

Route::get('/listekiosque', [KiosqueController::class, 'listekiosque']);
Route::get('/creationkiosque', [KiosqueController::class, 'creationkiosque'])->name('kiosque');
Route::post('/creationkiosque', [KiosqueController::class, 'creationkiosquePage'])->name('creerKiosque');

Route::get('/listeRole', [RoleController::class, 'listeRole']);
Route::get('/creationRole', [RoleController::class, 'creationRole'])->name('role');
Route::post('/creationRole', [RoleController::class, 'creationRolePage'])->name('creerRole');
Route::get('/delete/{id}',[RoleController::class, 'delete_role']);

Route::get('/listetype', [TypeTransactionController::class, 'listeType']);
Route::get('/creationType', [TypeTransactionController::class, 'creationType'])->name('type');
Route::post('/creationType', [TypeTransactionController::class, 'creationTypePage'])->name('creerType');
Route::get('/delete/{id}',[TypeTransactionController::class, 'delete_type']);

Route::get('/typecompte', [TypeCompteController::class, 'typeCompte']);
Route::get('/createType', [TypeCompteController::class, 'createType'])->name('typeCompte');
Route::post('/createType', [TypeCompteController::class, 'createTypePage'])->name('Type');
Route::get('/delete/{id}',[TypeCompteController::class, 'delete']);


