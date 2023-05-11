<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HebergementController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\CommentaiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoriController;
use App\Http\Controllers\EntrepriseForfaitController;
use Database\Factories\EntrepriseFactory;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group([
    'prefix' => 'entreprise',
    'controller' => EntrepriseController::class,
    'where' => ['entreprise' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('entreprise.index');
    Route::get('create', 'create')->name('entreprise.create');
    Route::get('{entreprise}', 'edit')->name('entreprise.edit');


    Route::post('', 'store')->name('entreprise.store');
    Route::post('{entreprise}', 'update')->name('entreprise.update');
});

Route::group([
    'prefix' => 'region',
    'controller' => RegionController::class,
    'where' => ['region' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('region.index');
    Route::get('create', 'create')->name('region.create');
    Route::get('{region}', 'edit')->name('region.edit');


    Route::post('', 'store')->name('region.store');
    Route::post('{region}', 'update')->name('region.update');
});

Route::group([
    'prefix' => 'hebergement',
    'controller' => HebergementController::class,
    'where' => ['hebergement' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('hebergement.index');
    Route::get('create', 'create')->name('hebergement.create');
    Route::get('{hebergement}', 'edit')->name('hebergement.edit');


    Route::post('', 'store')->name('hebergement.store');
    Route::post('{hebergement}', 'update')->name('hebergement.update');
});

Route::group([
    'prefix' => 'evenement',
    'controller' => EvenementController::class,
    'where' => ['evenement' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('evenement.index');
    Route::get('create', 'create')->name('evenement.create');
    Route::get('{evenement}', 'edit')->name('evenement.edit');


    Route::post('', 'store')->name('evenement.store');
    Route::post('{evenement}', 'update')->name('evenement.update');
});

Route::group([
    'prefix' => 'activite',
    'controller' => ActiviteController::class,
    'where' => ['activite' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('activite.index');
    Route::get('create', 'create')->name('activite.create');
    Route::get('{activite}', 'edit')->name('activite.edit');


    Route::post('', 'store')->name('activite.store');
    Route::post('{activite}', 'update')->name('activite.update');
});

Route::group([
    'prefix' => 'secteur',
    'controller' => SecteurController::class,
    'where' => ['secteur' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('secteur.index');
    Route::get('create', 'create')->name('secteur.create');
    Route::get('{secteur}', 'edit')->name('secteur.edit');


    Route::post('', 'store')->name('secteur.store');
    Route::post('{secteur}', 'update')->name('secteur.update');
});

Route::group([
    'prefix' => 'forfait',
    'controller' => ForfaitController::class,
    'where' => ['forfait' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('forfait.index');
    Route::get('create', 'create')->name('forfait.create');
    Route::get('{forfait}', 'edit')->name('forfait.edit');


    Route::post('', 'store')->name('forfait.store');
    Route::post('{forfait}', 'update')->name('forfait.update');
});

Route::group([
    'prefix' => 'commentaite',
    'controller' => CommentaiteController::class,
    'where' => ['commentaite' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('commentaite.index');
    Route::get('create', 'create')->name('commentaite.create');
    Route::get('{commentaite}', 'edit')->name('commentaite.edit');


    Route::post('', 'store')->name('commentaite.store');
    Route::post('{commentaite}', 'update')->name('commentaite.update');
});

Route::group([
    'prefix' => 'user',
    'controller' => UserController::class,
    'where' => ['user' => '[0-9]+'],
], function () {
    Route::get('', 'index')->name('user.index');
    Route::get('create', 'create')->name('user.create');
    Route::get('{user}', 'edit')->name('user.edit');


    Route::post('', 'store')->name('user.store');
    Route::post('{user}', 'update')->name('user.update');
});


require __DIR__.'/auth.php';
