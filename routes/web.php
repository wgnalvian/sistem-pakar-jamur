<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DeseaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsHarvestController;
use App\Http\Controllers\SymtomController;
use App\Models\IsHarvest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Part\Multipart\AlternativePart;

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

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::prefix('/auth')->controller(AuthController::class)->group(function(){
    Route::post('sign-up',[AuthController::class,'signUp']);
    Route::post('/sign-in',[AuthController::class,'signIn']);
});



Route::middleware('isloggin')->group(function(){

    Route::get('/care-mushroom', function () {
        return view('care-mushroom');
    });

    Route::get('/about', function (){
        return view('about');
    });
    Route::get('/hint', function (){
        return view('hint');
    });

    Route::get('/developer', function (){
        return view('developer');
    });
    Route::controller(HomeController::class)->group(function(){
        Route::get('/','index');
    });

    Route::prefix('/symtom')->controller(SymtomController::class)->group(function(){
        Route::get('/','index');
        Route::post('/','add');
        Route::delete('/','delete');
        Route::patch('/','update');
    });

    Route::prefix('/condition')->controller(ConditionController::class)->group(function(){
        Route::get('/','index');
        Route::post('/','add');
        Route::delete('/','delete');
        Route::patch('/','update');
     
    
    });
    Route::prefix('/isharvest')->controller(IsHarvestController::class)->group(function(){
        Route::get('/','index');
        Route::post('/','add');
        Route::delete('/','delete');
        Route::patch('/','update');

        Route::prefix('/detail')->group(function(){
            Route::get('/{id}','detail');
            Route::post('/','addDetail');
            Route::delete('/','deleteDetail');
            Route::patch('/','updateDetail');
        });
    });

    Route::prefix('/desease')->controller(DeseaseController::class)->group(function(){
        Route::get('/','index');
        Route::post('/','add');
        Route::delete('/','delete');
        Route::patch('/','update');
    
        Route::prefix('/detail')->group(function(){
            Route::get('/{id}','detail');
            Route::post('/','addDetail');
            Route::delete('/','deleteDetail');
            Route::patch('/','updateDetail');
        });
    
    });
    
    Route::prefix('/alternative')->controller(AlternativeController::class)->group(function(){
        
        Route::get('/add','addView');
        Route::post('/','add');
        Route::get('/','index');
        

        Route::prefix('/isharvest')->group(function(){
            Route::get('/add','addViewIsharvest');
            Route::post('/','addIsHarvest');
            Route::get('/','indexIsharvest');
        });
    
    });
    
    
});
