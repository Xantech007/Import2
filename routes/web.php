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

/* User Routes @s */
Route::prefix('/account')->name('customer.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/myplans')->name('myplan.')->group(function () {
        Route::get('/', [MyplanController::class, 'index'])->name('index');
        Route::get('/details', [MyplanController::class, 'detail'])->name('detail');
    });
    Route::prefix('/miningplans')->name('mining-plans.')->group(function () {
        Route::get('/', [MiningPlanController::class, 'index'])->name('index');
        Route::get('/crypto-plan', [MiningPlanController::class, 'invest_form'])->name('invest-form');
        Route::get('/crypto-plan/success', [MiningPlanController::class, 'success'])->name('success');
    });
    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
    });
    Route::prefix('/deposit')->name('deposit.')->group(function () {
        Route::get('/', [DepositController::class, 'index'])->name('index');
        Route::get('/success', [DepositController::class, 'success'])->name('success');
    });
    Route::prefix('/withdraw')->name('withdraw.')->group(function () {
        Route::get('/', [WithdrawController::class, 'index'])->name('index');
        Route::get('/error', [WithdrawController::class, 'error'])->name('error');
    });
    Route::get('/market-analysis', [MarketAnalysisController::class, 'index'])->name('market-analysis');
});
/* User Routes @e */

/* Admin Routes @s */
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('/detail', [UsersController::class, 'detail'])->name('detail');
    });
    Route::prefix('/cryptos-and-mining-plans')->name('cmp.')->group(function () {
        Route::get('/', [CryptosMiningPlansController::class, 'index'])->name('index');
        Route::get('/add', [CryptosMiningPlansController::class, 'add'])->name('add');
        Route::get('/edit', [CryptosMiningPlansController::class, 'edit'])->name('edit');
    });
    Route::prefix('/active-plans')->name('active-plan.')->group(function () {
        Route::get('/', [ActiveplanController::class, 'index'])->name('index');
        Route::get('/detail', [ActiveplanController::class, 'detail'])->name('detail');
    });
    Route::prefix('/transactions')->name('tranx.')->group(function () {
        Route::get('/', [TranxController::class, 'index'])->name('index');
    });
    Route::get('/market-analysis', [AdminMarketanalysisController::class, 'index'])->name('market-analysis');
    Route::prefix('/lang')->name('lang.')->group(function () {
        Route::get('/', [LangController::class, 'index'])->name('index');
        Route::get('/edit', [LangController::class, 'edit'])->name('edit');
    });
});
