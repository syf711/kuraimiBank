<?php

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\front\AboutBankController;
use App\Http\Controllers\front\BankAboutUsController;
use App\Http\Controllers\front\AboutUsController;
use App\Http\Controllers\front\SuccessStoriesController;
use App\Http\Controllers\front\OurPartnersController;
use App\Http\Controllers\front\FinancialReportsController;
use App\Http\Controllers\front\ServicePointsMapsController;
use App\Http\Controllers\admin\CategoriesAdminController;
use App\Http\Controllers\admin\UsersAdminController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\API\ApiCities;
use App\Http\Controllers\API\ApiAuthenticate;
use App\Http\Controllers\API\ApiCategory;
use App\Http\Controllers\API\ApiServices;
use App\Http\Controllers\API\ApiWebsiteInfo;
use App\Http\Controllers\API\ApiFinancialReports;
use App\Http\Controllers\API\ApiOurPartners;
use App\Http\Controllers\API\ApiSocialMedia;
use App\Http\Controllers\API\ApNewsAdmin;
use App\Http\Controllers\API\ApiJobsAdmin;
use App\Http\Controllers\API\ApiExchangeRates;
use App\Http\Controllers\API\ApiServicePoints;
use App\Http\Controllers\API\ApiCountries;
use App\Http\Controllers\API\ApiUsers;
use App\Http\Controllers\API\ApiPermissions;

use App\Http\Controllers\API\ApiServiceAdvantages;
use App\Http\Controllers\API\ApiSuccessStories;
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

Route::get('change-language/{locale}', [LocaleController::class, 'switch'])->name('change-language');

// Route::get('/', function () {
//     return view('front.index');
// });
Route::middleware(['localized'])->prefix(app()->getLocale())->group(function () {
    Route::get('/', [HomeController::class, 'frontIndex'])->name('frontIndex');
    Route::get('/service', [ServiceController::class, 'show'])->name('service');
    Route::get('/services/{name}', [ServiceController::class, 'showName'])->name('services.showName');
    Route::get('/store', [ServiceController::class, 'store'])->name('store');
    Route::get('/about-bank', [AboutBankController::class, 'show'])->name('about-bank');
    Route::get('/bank-about-us', [BankAboutUsController::class, 'show'])->name('bank-about-us');
    Route::get('/about-us', [AboutUsController::class, 'show'])->name('about-us');
    Route::get('/success-story', [SuccessStoriesController::class, 'show']);
    Route::get('/success-stories/{title}', [SuccessStoriesController::class, 'showTitle'])->name('success-stories.showTitle');
    Route::get('/our-parteners', [OurPartnersController::class, 'show'])->name('our-parteners');
    Route::get('/financial-reports-front', [FinancialReportsController::class, 'show'])->name('financial-reports-front');
    Route::get('/service-points-maps', [ServicePointsMapsController::class, 'show'])->name('service-points-maps');
});
Route::get('/errors-admin', [CategoriesAdminController::class, 'errors'])->name('errors-admin');

// Route::get('/login', [ApiAuthenticate::class, 'show'])->name('login');
// Route::get('sign_in', [ApiAuthenticate::class, 'sign_in']);
// Route::post('login-save', [ApiAuthenticate::class, 'login_save'])->name('login-save');
Route::get('logout', [ApiAuthenticate::class, 'logout'])->name('logout');
