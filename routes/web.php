<?php

use App\Http\Controllers\admin\director\ManageDirectorController;
use App\Http\Controllers\admin\Event\ManageEventController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\player\PlayerController;
use App\Http\Controllers\admin\team\AdminTeamController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\player\HomeController as PlayerHomeController;
use App\Http\Controllers\team\HomeController as TeamHomeController;
use App\Http\Controllers\director\HomeController as DirectorHomeController;
use App\Http\Controllers\director\Event\EventController;
use App\Http\Controllers\director\player\ManagePlayerStatisticsController;
use App\Http\Controllers\director\Team\ManageTeamController;
use App\Http\Controllers\frontend\FrontendEventController;
use App\Http\Controllers\team\team\ManageTeamController as TeamController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\player\team\TeamController as FrontendTeamController;
use App\Http\Controllers\team\event\EventController as TeamEventController;
use App\Http\Controllers\admin\payment\ManagePayoutController;
use App\Http\Controllers\admin\service\ServiceFeeController;
use App\Http\Controllers\admin\subscription\SubscriptionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\admin\generalsetting\GeneralSettingController;
use App\Http\Controllers\admin\frontend\HomeSliderController;
use App\Http\Controllers\admin\frontend\HomeNewsSectionController;
use App\Http\Controllers\admin\frontend\RecentContentController;
use App\Http\Controllers\admin\frontend\OfficialPartnerSectionController;
use App\Http\Controllers\admin\frontend\BlogController;
use App\Http\Controllers\admin\schedule\TimeScheduleController;
use App\Http\Controllers\admin\frontend\SiteRulesController;
use App\Http\Controllers\admin\frontend\AboutUsController;


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

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'clear done';
});
Route::get('/cache', function () {
    Artisan::call('config:cache');
});

Route::get('/migrate',function(){
    Artisan::call('migrate');
    return 'migrated successfully';
});

Route::get('phpinfo',function(){
return phpinfo();
});
Route::get('phpdebug', [TestController::class, 'phpdebug']);



/**
 * Frontend Routes
 */
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/events', [HomeController::class, 'allEvents'])->name('events');
route::get('view/events', [HomeController::class, 'allEvents'])->name('view.events');
route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactus');
route::get('rules-and-policy', [HomeController::class, 'rulesPolicy'])->name('rules');
route::get('about-us', [HomeController::class, 'aboutUs'])->name('aboutus');
Route::get('4baggerer-recent-content-detail/{id}', [HomeController::class, 'recentContentDetail'])->name('recentcontentdetail');
Route::any('blog/{blog}', [HomeController::class, 'showBlog'])->name('blog');

Route::view('/profile', 'frontend.pages.player.profile');
route::get('view/event/{id}', [FrontendEventController::class, 'viewEvent'])->name('view.event');
route::get('liveevents', [FrontendEventController::class, 'liveEvents'])->name('liveevents');

/**
 * Admin Routes
 */
Route::group(['prefix' => 'admin',  'middleware' => ['auth', 'checkrole']], function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('admin_dashboard');
   
    Route::get('unapproved/directors', [ManageDirectorController::class, 'unApprovedDirectors'])->name('unapproved.directors');
    Route::post('approve/directors', [ManageDirectorController::class, 'approveDirectors']);
    Route::get('events/showAdminTeams/{id}', [ManageEventController::class, 'showAdminTeams'])->name('showAdminTeams');
    Route::get('events/showTeamDetails/{id}', [ManageEventController::class, 'showTeamDetails'])->name('showTeamDetails');
    Route::get('manageprofile', [GeneralSettingController::class, 'index'])->name('manageprofile');
    Route::post('updateadminprofile', [GeneralSettingController::class, 'updateadminprofile'])->name('updateadminprofile');
    Route::get('generalsetting', [GeneralSettingController::class, 'generalSetting'])->name('generalsetting');
    Route::post('updategeneralsetting', [GeneralSettingController::class, 'updateGeneralSetting'])->name('updategeneralsetting');

    Route::get('servicefee',[ServiceFeeController::class,'index'])->name('servicefee');
    Route::post('updateservicefee',[ServiceFeeController::class,'updateServiceFee'])->name('updateservicefee');
    Route::get('adminallteams',[AdminTeamController::class, 'getallTeams'])->name('adminallteams');
    Route::post('searchplayer', [PlayerController::class, 'searchPlayer'])->name('search.player');
    Route::post('adminagegroupteams',[ManageDirectorController::class,'ageGroupDetails'])->name('adminagegroupteams');
    Route::post('adminplayersinteam', [ManageDirectorController::class,'playersInEventTeam'])->name('adminplayersinteam');
    Route::post('admineventhistory',[ManageDirectorController::class, 'eventHistory'])->name('admineventhistory');
    Route::post('changeagegroupstaus',[ManageDirectorController::class, 'changeagegroupstaus'])->name('changeagegroupstaus');

    Route::resource('events', ManageEventController::class);
    Route::resource('adminslider', HomeSliderController::class);
    Route::resource('newssection', HomeNewsSectionController::class);
    Route::resource('recentcontent', RecentContentController::class);
    Route::resource('siterule', SiteRulesController::class);
    Route::resource('aboutus', AboutUsController::class);
    Route::resource('officialpartner', OfficialPartnerSectionController::class);
    Route::resource('manageblog', BlogController::class);
    Route::resource('director', ManageDirectorController::class);    
    Route::resource('adminteams', AdminTeamController::class);
    Route::resource('player', PlayerController::class);
    Route::resource('adminpayout', ManagePayoutController::class);
    Route::resource('subscription', SubscriptionController::class);
    //Manage Time Schedule
    Route::resource('managetimeschedule', TimeScheduleController::class);


    
    // Subscription Resource
    

});

/**
 * Player Routes
 */
Route::group(['prefix' => 'player',  'middleware' => ['auth', 'playerrole']], function () {
    Route::get('profile', [PlayerHomeController::class, 'index'])->name('player_dashboard');
    Route::get('myteam', [FrontendTeamController::class, 'myTeam'])->name('myteams');
    Route::get('allteams', [FrontendTeamController::class, 'allTeams'])->name('allteams');
    Route::get('view-team/{id}', [FrontendTeamController::class, 'viewTeam'])->name('viewteam');
    Route::post('requestteam', [FrontendTeamController::class, 'playerRequest'])->name('playerrequest');
    Route::get('playerprofile/{id}', [FrontendTeamController::class, 'viewPlayer'])->name('view.player.profile');
    Route::get('playerprofile', [FrontendTeamController::class, 'playerProfile'])->name('playerprofile');
    Route::post('updateplayerprofile', [FrontendTeamController::class, 'updatePlayerProfile'])->name('updateplayerprofile');
   
});

/**
 * Team Routes
 */
Route::group(['prefix' => 'team',  'middleware' => ['auth', 'teamrole']], function () {
    Route::get('dashboard', [TeamHomeController::class, 'index'])->name('team_dashboard');
    Route::resource('teams', TeamController::class);
    Route::get('addplayer/{id}', [TeamController::class, 'addPlayer'])->name('add.player');
    Route::get('viewplayer/{id}', [TeamController::class, 'viewPlayer'])->name('view.player');
    Route::post('addplayer', [TeamController::class, 'addPlayerToTeam'])->name('add.teamplayer');
    Route::get('requested/players/{id}', [TeamController::class, 'viewRequestedPlayers'])->name('requested.player');
    Route::post('searchplayer', [TeamController::class, 'searchPlayer'])->name('searchplayer');
    Route::get('allevents', [TeamEventController::class, 'index'])->name('allevents');
    Route::post('add-team-to-event', [TeamEventController::class, 'addTeamToEvent'])->name('addTeamToEvent');
    Route::get('add-to-event/{id}', [TeamEventController::class, 'addToEvent'])->name('addToEvent');
    Route::get('event/{id}', [TeamEventController::class, 'viewEvent'])->name('view.event.coach');
    Route::post('payevents', [TeamEventController::class, 'payTeamForEvent'])->name('payevents');
    Route::get('showTotalTeams/{id}', [TeamEventController::class, 'showTotalTeams'])->name('showTotalTeams');
});

/**
 * Director Routes
 */
Route::group(['prefix' => 'director',  'middleware' => ['auth', 'directorrole']], function () {
    Route::get('dashboard', [DirectorHomeController::class, 'index'])->name('director_dashboard');
    Route::get('pay', [DirectorHomeController::class, 'pay'])->name('pay');
    Route::resource('team', ManageTeamController::class);
    Route::resource('event', EventController::class);
    Route::get('showteamsinevent/{id}', [EventController::class, 'showTeamsInEvent'])->name('showteamsinevent');
    Route::get('showteamdetails/{id}', [EventController::class, 'showTeamDetails'])->name('show.teamdetails');
    Route::get('ShowPlayer/{id}', [EventController::class, 'showPlayer'])->name('show.player');
    Route::get('CreatePlayerStatistics/{id}', [ManagePlayerStatisticsController::class, 'index'])->name('add.player.stats');
    Route::post('PlayerFieldStatistics', [ManagePlayerStatisticsController::class, 'storeFieldStats'])->name('fieldstats.store');
    Route::post('PlayerBatStatistics', [ManagePlayerStatisticsController::class, 'storeBatStats'])->name('batstats.store');
    Route::post('PlayerRanking', [ManagePlayerStatisticsController::class, 'storeRanking'])->name('ranking.store');
    Route::post('PlayerPitchStatistics', [ManagePlayerStatisticsController::class, 'storePitchStats'])->name('pitchstats.store');
    Route::get('directorpayout',[DirectorHomeController::class, 'directorPayout'])->name('directorpayout');
    Route::get('paymentrefundform/{id}', [DirectorHomeController::class, 'showPaymentRefundForm'])->name('paymentrefundform');
    Route::post('paymentrefund', [DirectorHomeController::class, 'refundTransaction'])->name('paymentrefund');
    Route::post('agegroupteams', [EventController::class,'ageGroupDetails'])->name('agegroupteams');
    Route::post('playersinteam', [EventController::class,'playersInEventTeam'])->name('playersinteam');
    Route::get('eventhistory/{eventid}',[EventController::class, 'eventHistory'])->name('eventhistory');
});
Route::get('email_view',function(){
    return view('email.adminNotifyDirectorRegister');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
