<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController; 

use App\Http\Controllers\Super\AboutAppController;
use App\Http\Controllers\Super\AboutThemeController;
use App\Http\Controllers\Super\AboutLifecycleController; 

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


    //-----------------------------------------------------------    
        Route::get('/', function () {
            return redirect()->route('login');
        });
    //-----------------------------------------------------------   
        Route::post('/login', [LoginController::class, 'store'])->name('login');
    //-----------------------------------------------------------  
        Route::group(['middleware' => ['auth']], function() { 
            //--------------------------------------------------- 
                Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
            //--------------------------------------------------- 
                Route::resource('Dashboard', DashboardController::class);  
            //--------------------------------------------------- 
                Route::get('UserProfiles/editdata', 'UserProfilesController@editdata')
                    ->name('UserProfiles.editdata');
                Route::post('UserProfiles/updatedata', 'UserProfilesController@updatedata')
                    ->name('UserProfiles.updatedata');  
                Route::resource('UserProfiles', UserProfilesController::class);  
            //---------------------------------------------------    
                Route::namespace('Super')->group(function () {
                    Route::resource('AboutApp', 'AboutAppController');
                    Route::resource('AboutTheme', 'AboutThemeController');
                        Route::get('AboutLifecycle/setcycle/{status}', 'AboutLifecycleController@setcycle')
                            ->name('AboutLifecycle.setcycle');
                    Route::resource('AboutLifecycle', 'AboutLifecycleController'); 
                        Route::get('AboutAuth/setgoogle/{status}', 'AboutAuthController@setgoogle')
                            ->name('AboutAuth.setgoogle');
                        Route::get('AboutAuth/setgithub/{status}', 'AboutAuthController@setgithub')
                            ->name('AboutAuth.setgithub');
                    Route::resource('AboutAuth', 'AboutAuthController'); 
                        Route::get('AboutUiux/setmobile/{status}', 'AboutUiuxController@setmobile')
                            ->name('AboutUiux.setmobile');
                        Route::get('AboutUiux/settablet/{status}', 'AboutUiuxController@settablet')
                            ->name('AboutUiux.settablet');
                    Route::resource('AboutUiux', 'AboutUiuxController'); 
                }); 
            //--------------------------------------------------- 
                // Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
            //--------------------------------------------------- 
             
                    Route::get('Rapidapi/on/{id}', 'RapidapiController@on')
                        ->name('Rapidapi.on');
                    Route::get('Rapidapi/reset/{id}', 'RapidapiController@reset')
                        ->name('Rapidapi.reset');
                Route::resource('Rapidapi', RapidapiController::class);  
 
                    Route::get('Reports/undone', 'ReportsController@undone')
                        ->name('Reports.undone');
                Route::resource('Reports', ReportsController::class);

                    Route::get('Countries/leagues/{country}', 'CountriesController@leagues')
                        ->name('Countries.leagues');
                Route::resource('Countries', CountriesController::class);

                    Route::get('Leagues/notstarted/{leagueapi_id}/{season}', 'LeaguesController@notstarted')
                        ->name('Leagues.notstarted'); 
                Route::resource('Leagues', LeaguesController::class);   

                
                Route::resource('Notstarted', NotstartedController::class);   
        });
    //-----------------------------------------------------------  

     

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
