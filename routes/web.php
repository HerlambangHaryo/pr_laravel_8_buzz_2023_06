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
                    Route::get('Rapidapi/teams/{id}', 'RapidapiController@teams')
                        ->name('Rapidapi.teams');
                    Route::get('Rapidapi/venues/{id}', 'RapidapiController@venues')
                        ->name('Rapidapi.venues');
                Route::resource('Rapidapi', RapidapiController::class);

                    Route::get('Reports/undone', 'ReportsController@undone')
                        ->name('Reports.undone');
                Route::resource('Reports', ReportsController::class);

                    Route::get('Countries/leagues/{country}', 'CountriesController@leagues')
                        ->name('Countries.leagues');
                Route::resource('Countries', CountriesController::class);

                    Route::get('Leagues/today/{leagueapi_id}/{season}', 'LeaguesController@today')
                        ->name('Leagues.today');
                    Route::get('Leagues/notstarted/{leagueapi_id}/{season}', 'LeaguesController@notstarted')
                        ->name('Leagues.notstarted');
                    Route::get('Leagues/matchfinished/{leagueapi_id}/{season}', 'LeaguesController@matchfinished')
                        ->name('Leagues.matchfinished');
                    Route::get('Leagues/standings/{leagueapi_id}/{season}', 'LeaguesController@standings')
                        ->name('Leagues.standings');
                    Route::get('Leagues/standing_corners/{leagueapi_id}/{season}', 'LeaguesController@standing_corners')
                        ->name('Leagues.standing_corners');
                    Route::get('Leagues/standing_cards/{leagueapi_id}/{season}', 'LeaguesController@standing_cards')
                        ->name('Leagues.standing_cards');
                    Route::get('Leagues/pecheck/{leagueapi_id}/{season}', 'LeaguesController@pecheck')
                        ->name('Leagues.pecheck');
                    Route::get('Leagues/patternfixtures/{leagueapi_id}/{season}/{pre_ah_pattern}/{pre_gou_pattern}/{end_ah_pattern}/{end_gou_pattern}', 'LeaguesController@patternfixtures')
                        ->name('Leagues.patternfixtures');
                    Route::get('Leagues/detailround/{leagueapi_id}/{season}/{round}', 'LeaguesController@detailround')
                        ->name('Leagues.detailround');

                    Route::get('Leagues/pattern_odd/{leagueapi_id}/{season}', 'LeaguesController@pattern_odd')
                        ->name('Leagues.pattern_odd');
                    Route::get('Leagues/pattern_preend/{leagueapi_id}/{season}', 'LeaguesController@pattern_preend')
                        ->name('Leagues.pattern_preend');


                    Route::get('Leagues/setdetail/{leagueapi_id}', 'LeaguesController@setdetail')
                        ->name('Leagues.setdetail');
                    Route::get('Leagues/setbookmakers_league/{bookmakersapi_id}/{leagueapi_id}', 'LeaguesController@setbookmakers_league')
                        ->name('Leagues.setbookmakers_league');
                    Route::get('Leagues/setfav/{leagueapi_id}', 'LeaguesController@setfav')
                        ->name('Leagues.setfav');
                Route::resource('Leagues', LeaguesController::class);

                    Route::get('Today/leagues/{leagueapi_id}/{season}', 'TodayController@leagues')
                        ->name('Today.leagues');

                    Route::get('Today/timegroup', 'TodayController@timegroup')
                        ->name('Today.timegroup');
                    Route::get('Today/time/{year}/{month}/{day}/{hour}/{minute}', 'TodayController@time')
                        ->name('Today.time');

                Route::resource('Today', TodayController::class);

                    Route::get('Notstarted/leagues/{leagueapi_id}/{season}', 'NotstartedController@leagues')
                        ->name('Notstarted.leagues');

                    Route::get('Notstarted/timegroup', 'NotstartedController@timegroup')
                        ->name('Notstarted.timegroup');
                    Route::get('Notstarted/time/{year}/{month}/{day}/{hour}/{minute}', 'NotstartedController@time')
                        ->name('Notstarted.time');

                Route::resource('Notstarted', NotstartedController::class);


                    Route::get('Matchdone/leagues/{leagueapi_id}/{season}', 'MatchdoneController@leagues')
                        ->name('Matchdone.leagues');

                    Route::get('Matchdone/timegroup', 'MatchdoneController@timegroup')
                        ->name('Matchdone.timegroup');
                    Route::get('Matchdone/time/{year}/{month}/{day}/{hour}/{minute}', 'MatchdoneController@time')
                        ->name('Matchdone.time');

                Route::resource('Matchdone', MatchdoneController::class);


                    Route::get('Matchfinished/leagues/{leagueapi_id}/{season}', 'MatchfinishedController@leagues')
                        ->name('Matchfinished.leagues');

                    Route::get('Matchfinished/timegroup', 'MatchfinishedController@timegroup')
                        ->name('Matchfinished.timegroup');
                    Route::get('Matchfinished/time/{year}/{month}/{day}/{hour}/{minute}', 'MatchfinishedController@time')
                        ->name('Matchfinished.time');

                Route::resource('Matchfinished', MatchfinishedController::class);


                    Route::get('Favorites/leagues/{leagueapi_id}/{season}', 'FavoritesController@leagues')
                        ->name('Favorites.leagues');

                    Route::get('Favorites/timegroup', 'FavoritesController@timegroup')
                        ->name('Favorites.timegroup');
                    Route::get('Favorites/time/{year}/{month}/{day}/{hour}/{minute}', 'FavoritesController@time')
                        ->name('Favorites.time');

                Route::resource('Favorites', FavoritesController::class);


                    Route::get('One/leagues/{leagueapi_id}/{season}', 'OneController@leagues')
                        ->name('One.leagues');

                    Route::get('One/timegroup', 'OneController@timegroup')
                        ->name('One.timegroup');
                    Route::get('One/time/{year}/{month}/{day}/{hour}/{minute}', 'OneController@time')
                        ->name('One.time');
                    Route::get('One/clear', 'OneController@clear')
                        ->name('One.clear');

                Route::resource('One', OneController::class);


                    Route::get('Fixtures/information/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@information')
                        ->name('Fixtures.information');
                    Route::get('Fixtures/setone/{id}', 'FixturesController@setone')
                        ->name('Fixtures.setone');
                    Route::get('Fixtures/setoneye/{id}', 'FixturesController@setoneye')
                        ->name('Fixtures.setoneye');
                    Route::get('Fixtures/statistics/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@statistics')
                        ->name('Fixtures.statistics');
                    Route::get('Fixtures/headtohead/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@headtohead')
                        ->name('Fixtures.headtohead');
                    Route::get('Fixtures/players/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@players')
                        ->name('Fixtures.players');
                    Route::get('Fixtures/prepre/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@prepre')
                        ->name('Fixtures.prepre');
                    Route::get('Fixtures/preend/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@preend')
                        ->name('Fixtures.preend');
                    Route::get('Fixtures/endend/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@endend')
                        ->name('Fixtures.endend');
                    Route::get('Fixtures/otherpattern/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@otherpattern')
                        ->name('Fixtures.otherpattern');
                    Route::get('Fixtures/datapreend/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@datapreend')
                        ->name('Fixtures.datapreend');
                    Route::get('Fixtures/datapreendcountry/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@datapreendcountry')
                        ->name('Fixtures.datapreendcountry');
                    Route::get('Fixtures/datapreendworld/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@datapreendworld')
                        ->name('Fixtures.datapreendworld');
                    Route::get('Fixtures/dataonlypre/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@dataonlypre')
                        ->name('Fixtures.dataonlypre');
                    Route::get('Fixtures/dataonlyprecountry/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@dataonlyprecountry')
                        ->name('Fixtures.dataonlyprecountry');
                    Route::get('Fixtures/dataonlypreworld/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@dataonlypreworld')
                        ->name('Fixtures.dataonlypreworld');
                    Route::get('Fixtures/dataonlyend/{leagueapi_id}/{season}/{fixtureapi_id}', 'FixturesController@dataonlyend')
                        ->name('Fixtures.dataonlyend');
                Route::resource('Fixtures', FixturesController::class);


                    Route::get('Patterns/pre_only/{leagueapi_id}/{season}/{fixtureapi_id}', 'PatternsController@pre_only')
                        ->name('Patterns.pre_only');
                    Route::get('Patterns/end_only/{leagueapi_id}/{season}/{fixtureapi_id}', 'PatternsController@end_only')
                        ->name('Patterns.end_only');
                    Route::get('Patterns/pre_end/{leagueapi_id}/{season}/{fixtureapi_id}', 'PatternsController@pre_end')
                        ->name('Patterns.pre_end');
                    Route::get('Patterns/odd/{leagueapi_id}/{season}/{fixtureapi_id}/{odd}', 'PatternsController@odd')
                        ->name('Patterns.odd');
                Route::resource('Patterns', PatternsController::class);

                    Route::get('Mybets/datacreate/{leagueapi_id}/{season}/{fixtureapi_id}/{betsapi_id}/{value}/{odd}', 'MybetsController@datacreate')
                        ->name('Mybets.datacreate');
                    Route::get('Mybets/datacreateanalysis/{leagueapi_id}/{season}/{fixtureapi_id}/{betsapi_id}/{value}/{odd}', 'MybetsController@datacreateanalysis')
                        ->name('Mybets.datacreateanalysis');
                Route::resource('Mybets', MybetsController::class);

                    Route::get('Tomorrow/leagues/{leagueapi_id}/{season}', 'TomorrowController@leagues')
                        ->name('Tomorrow.leagues');

                    Route::get('Tomorrow/timegroup', 'TomorrowController@timegroup')
                        ->name('Tomorrow.timegroup');
                    Route::get('Tomorrow/time/{year}/{month}/{day}/{hour}/{minute}', 'TomorrowController@time')
                        ->name('Tomorrow.time');

                Route::resource('Tomorrow', TomorrowController::class);

                Route::resource('Teams', TeamsController::class);

                Route::resource('Venues', VenuesController::class);
                Route::resource('Oneye', OneyeController::class);


                    Route::get('Forecasts/leagues/{leagueapi_id}/{season}', 'ForecastsController@leagues')
                        ->name('Forecasts.leagues');

                    Route::get('Forecasts/timegroup', 'ForecastsController@timegroup')
                        ->name('Forecasts.timegroup');
                    Route::get('Forecasts/time/{year}/{month}/{day}/{hour}/{minute}', 'ForecastsController@time')
                        ->name('Forecasts.time');

                Route::resource('Forecasts', ForecastsController::class);

                // Route::get('/data', [AjaxController::class, 'getData'])->name('data');

                    Route::get('Ajax/data', 'AjaxController@data')
                        ->name('Ajax.data');
                    Route::get('Ajax/pattern_from', 'AjaxController@pattern_from')
                        ->name('Ajax.pattern_from');
                    Route::get('Ajax/pattern_only', 'AjaxController@pattern_only')
                        ->name('Ajax.pattern_only');
                    Route::get('Ajax/undone', 'AjaxController@undone')
                        ->name('Ajax.undone');
                Route::resource('Ajax', AjaxController::class);



                    Route::get('Ultimate/leagues/{leagueapi_id}/{season}', 'UltimateController@leagues')
                        ->name('Ultimate.leagues');

                    Route::get('Ultimate/timegroup', 'UltimateController@timegroup')
                        ->name('Ultimate.timegroup');
                    Route::get('Ultimate/time/{year}/{month}/{day}/{hour}/{minute}', 'UltimateController@time')
                        ->name('Ultimate.time');

                Route::resource('Ultimate', UltimateController::class);
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
