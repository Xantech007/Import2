<?php

use App\Http\Controllers\Admin\ActiveplanController;
use App\Http\Controllers\Admin\CryptosMiningPlansController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\LangController;
use App\Http\Controllers\Admin\MarketanalysisController as AdminMarketanalysisController;
use App\Http\Controllers\Admin\TranxController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\DepositController;
use App\Http\Controllers\Customer\KycController;
use App\Http\Controllers\Customer\MarketAnalysisController;
use App\Http\Controllers\Customer\MiningPlanController;
use App\Http\Controllers\Customer\MyplanController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Customer\WithdrawController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

/* User Routes @s */
Route::prefix('/account')->name('customer.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/myplans')->name('myplan.')->group(function () {
        Route::get('/', [MyplanController::class, 'index'])->name('index');
        Route::get('/{id}', [MyplanController::class, 'detail'])->name('detail');
    });
    Route::prefix('/invest')->name('mining-plans.')->group(function () {
        Route::get('/', [MiningPlanController::class, 'index'])->name('index');
        Route::get('/{plan}', [MiningPlanController::class, 'invest_form'])->name('invest-form');
        Route::get('/{plan}/success', [MiningPlanController::class, 'success'])->name('success');
        Route::post('/', [MiningPlanController::class, 'invest_process'])->name('invest_plan');
        Route::post('/invest_form/{plan}', [MiningPlanController::class, 'invest_form_process'])->name('invest_form_process');
        Route::get('/{plan}/confirm', [MiningPlanController::class, 'confirm'])->name('confirm');
        Route::post('/confirm', [MiningPlanController::class, 'confirm_process'])->name('confirm-process');
    });
    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/data-update', [ProfileController::class, 'update'])->name('update');
    });
    Route::prefix('/deposit')->name('deposit.')->group(function () {
        Route::get('/', [DepositController::class, 'index'])->name('index');
        Route::get('/success', [DepositController::class, 'success'])->name('success');
    });
    Route::prefix('/withdraw')->name('withdraw.')->group(function () {
        Route::get('/', [WithdrawController::class, 'index'])->name('index');
        Route::post('/withdraw', [WithdrawController::class, 'withdraw'])->name('process');
        Route::get('/success', [WithdrawController::class, 'success'])->name('success');
        Route::get('/error', [WithdrawController::class, 'error'])->name('error');
    });
    Route::get('/market-analysis', [MarketAnalysisController::class, 'index'])->name('market-analysis');
});
/* User Routes @e */

/* Admin Routes @s */
Route::prefix('/admin')->name('admin.')->middleware(['auth', 'verified', 'restrict'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('/{id}', [UsersController::class, 'detail'])->name('detail');
    });
    Route::prefix('/cryptos-and-mining-plans')->name('cmp.')->group(function () {
        Route::get('/', [CryptosMiningPlansController::class, 'index'])->name('index');
        Route::get('/add/{name}', [CryptosMiningPlansController::class, 'add'])->name('add');
        Route::get('/edit/{id}/{name}', [CryptosMiningPlansController::class, 'edit'])->name('edit');
        Route::post('/add', [CryptosMiningPlansController::class, 'add_process'])->name('add.process');
        Route::post('/edit/{id}', [CryptosMiningPlansController::class, 'edit_process'])->name('edit.process');
        Route::post('/add/crypto', [CryptosMiningPlansController::class, 'add_crypto'])->name('add.crypto');
        Route::post('/edit/crypto/{id}', [CryptosMiningPlansController::class, 'edit_crypto'])->name('edit.crypto');
    });
    Route::prefix('/active-plans')->name('active-plan.')->group(function () {
        Route::get('/', [ActiveplanController::class, 'index'])->name('index');
        Route::get('/{id}', [ActiveplanController::class, 'detail'])->name('detail');
    });
    Route::prefix('/transactions')->name('tranx.')->group(function () {
        Route::get('/', [TranxController::class, 'index'])->name('index');
        Route::get('/approve/{id}', [TranxController::class, 'approve'])->name('approve');
        Route::get('/decline/{id}', [TranxController::class, 'decline'])->name('decline');
        Route::get('/{id}', [TranxController::class, 'detail'])->name('detail');
    });
    Route::get('/market-analysis', [AdminMarketanalysisController::class, 'index'])->name('market-analysis');
    Route::prefix('/lang')->name('lang.')->group(function () {
        Route::get('/', [LangController::class, 'index'])->name('index');
        Route::get('/add', [LangController::class, 'add'])->name('add');
        Route::post('/add', [LangController::class, 'add_process'])->name('add_process');
        Route::get('/{id}', [LangController::class, 'edit'])->name('edit');
        Route::post('/{id}', [LangController::class, 'edit_process'])->name('edit_process');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
