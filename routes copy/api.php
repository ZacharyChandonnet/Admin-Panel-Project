<?php

use App\Http\Controllers\Api\EntrepriseController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\HebergementController;
use App\Http\Controllers\Api\EvenementController;
use App\Http\Controllers\Api\ActiviteController;
use App\Http\Controllers\Api\SecteurController;
use App\Http\Controllers\Api\ForfaitController;
use App\Http\Controllers\Api\CommentaiteController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\FavoriController;
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

Route::group([
    'as' => 'api.',
], function () {
    Route::group(
        [
            'prefix' => 'entreprise',
            'controller' => EntrepriseController::class,
            'where' => ['entreprise' => '[0-9]+'],
            'as' => 'entreprise.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{entreprise}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{entreprise}', 'update')->name('update');
            Route::delete('{entreprise}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'region',
            'controller' => RegionController::class,
            'where' => ['region' => '[0-9]+'],
            'as' => 'region.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{region}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{region}', 'update')->name('update');
            Route::delete('{region}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'evenement',
            'controller' => EvenementController::class,
            'where' => ['evenement' => '[0-9]+'],
            'as' => 'evenement.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{evenement}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{evenement}', 'update')->name('update');
            Route::delete('{evenement}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'hebergement',
            'controller' => HebergementController::class,
            'where' => ['hebergement' => '[0-9]+'],
            'as' => 'hebergement.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{hebergement}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{hebergement}', 'update')->name('update');
            Route::delete('{hebergement}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'activite',
            'controller' => ActiviteController::class,
            'where' => ['activite' => '[0-9]+'],
            'as' => 'activite.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{activite}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{activite}', 'update')->name('update');
            Route::delete('{activite}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'secteur',
            'controller' => SecteurController::class,
            'where' => ['secteur' => '[0-9]+'],
            'as' => 'secteur.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{secteur}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{secteur}', 'update')->name('update');
            Route::delete('{secteur}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'forfait',
            'controller' => ForfaitController::class,
            'where' => ['forfait' => '[0-9]+'],
            'as' => 'forfait.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{forfait}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{forfait}', 'update')->name('update');
            Route::delete('{forfait}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'commentaite',
            'controller' => CommentaiteController::class,
            'where' => ['commentaite' => '[0-9]+'],
            'as' => 'commentaite.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{commentaite}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{commentaite}', 'update')->name('update');
            Route::delete('{commentaite}', 'destroy')->name('destroy');
        }
    );

    Route::group(
        [
            'prefix' => 'user',
            'controller' => UserController::class,
            'where' => ['user' => '[0-9]+'],
            'as' => 'user.',
        ],
        function () {
            Route::get('', 'index')->name('index');
            Route::get('{user}', 'show')->name('show');
            Route::post('', 'store')->name('store');
            Route::post('{user}', 'update')->name('update');
            Route::delete('{user}', 'destroy')->name('destroy');
        }
    );
    
    Route::group([
        "prefix" => "entreprise",
        "controller" => EntrepriseController::class,
        "where" => ["entreprise" => "[0-9]+"],
        "as" => "entreprise.",
    ], function () {
        Route::get("", "index")->name("index");
        Route::post("", "store")->name("store");
        Route::get("{entreprise}", "show")->name("show");
        Route::put("{entreprise}", "update")->name("update");
        Route::delete("{entreprise}", "destroy")->name("destroy");
        Route::get("{entreprise}/aimer", "aimer")->name("aimer");
    });
    

    Route::group([
        "prefix" => "activite",
        "controller" => ActiviteController::class,
        "where" => ["activite" => "[0-9]+"],
        "as" => "activite.",
    ], function () {
        Route::get("", "index")->name("index");
        Route::post("", "store")->name("store");
        Route::get("{activite}", "show")->name("show");
        Route::put("{activite}", "update")->name("update");
        Route::delete("{activite}", "destroy")->name("destroy");
        Route::get("{activite}/aimer", "aimer")->name("aimer");
    });

    Route::group([
        "prefix" => "hebergement",
        "controller" => HebergementController::class,
        "where" => ["hebergement" => "[0-9]+"],
        "as" => "hebergement.",
    ], function () {
        Route::get("", "index")->name("index");
        Route::post("", "store")->name("store");
        Route::get("{hebergement}", "show")->name("show");
        Route::put("{hebergement}", "update")->name("update");
        Route::delete("{hebergement}", "destroy")->name("destroy");
        Route::get("{hebergement}/aimer", "aimer")->name("aimer");
    });

    Route::group([
        "prefix" => "evenement",
        "controller" => EvenementController::class,
        "where" => ["evenement" => "[0-9]+"],
        "as" => "evenement.",
    ], function () {
        Route::get("", "index")->name("index");
        Route::post("", "store")->name("store");
        Route::get("{evenement}", "show")->name("show");
        Route::put("{evenement}", "update")->name("update");
        Route::delete("{evenement}", "destroy")->name("destroy");
        Route::get("{evenement}/aimer", "aimer")->name("aimer");
    });

    Route::group([
        "prefix" => "forfait",
        "controller" => ForfaitController::class,
        "where" => ["forfait" => "[0-9]+"],
        "as" => "forfait.",
    ], function () {
        Route::get("", "index")->name("index");
        Route::post("", "store")->name("store");
        Route::get("{forfait}", "show")->name("show");
        Route::put("{forfait}", "update")->name("update");
        Route::delete("{forfait}", "destroy")->name("destroy");
        Route::get("{forfait}/aimer", "aimer")->name("aimer");
    });

    Route::group([
        "prefix" => "region",
        "controller" => RegionController::class,
        "where" => ["region" => "[0-9]+"],
        "as" => "region.",
    ], function () {
        Route::get("", "index")->name("index");
        Route::post("", "store")->name("store");
        Route::get("{region}", "show")->name("show");
        Route::put("{region}", "update")->name("update");
        Route::delete("{region}", "destroy")->name("destroy");
        Route::get("{region}/aimer", "aimer")->name("aimer");
    });

    // Route::group([
    //     'prefix' => '{type}/{id}',
    //     'controller' => FavoriController::class,
    //     'where' => [
    //         'type' => 'entreprise|activite|hebergement|evenement|forfait|region',
    //         'id' => '[0-9]+',
    //     ],
    // ], function () {
    //     Route::get('aimer', 'aimer')->name('favori.aimer');
    // });
});