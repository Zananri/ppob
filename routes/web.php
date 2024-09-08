<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\FfController;
use App\Http\Controllers\MlController;
use App\Http\Controllers\PbController;
use App\Http\Controllers\AovController;
use App\Http\Controllers\CocController;
use App\Http\Controllers\CodController;
use App\Http\Controllers\LolController;
use App\Http\Controllers\DepoController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\OpbrController;
use App\Http\Controllers\PubgController;
use App\Http\Controllers\ValoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\DragonController;
use App\Http\Controllers\HaydayController;
use App\Http\Controllers\HonkaiController;
use App\Http\Controllers\GenshinController;
use App\Http\Controllers\ListrikController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\InternetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/edit', [DashboardController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/update/{id}', [DashboardController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('/depo', [DepoController::class, 'index'])->middleware('auth');
Route::post('/depo/store', [DepoController::class, 'store'])->name('depo')->middleware('auth');

Route::get('cs', [CsController::class, 'index']);

Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware('auth');

Route::get('/pulsa', [PulsaController::class, 'index']);
Route::post('/pulsa/store', [PulsaController::class, 'store'])->name('pulsa');

Route::get('/internet', [InternetController::class, 'index']);
Route::post('/internet/store', [InternetController::class, 'store'])->name('internet');


Route::get('/listrik', [ListrikController::class, 'index']);
Route::post('/listrik/store', [ListrikController::class, 'store'])->name('listrik');


Route::get('/game', [GameController::class, 'index']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/ml', [MlController::class, 'index']);
Route::post('/ml/store', [MlController::class, 'store'])->name('ml');

Route::get('/coc', [CocController::class, 'index']);
Route::post('/coc/store', [CocController::class, 'store'])->name('coc');

Route::get('/ff', [FfController::class, 'index']);
Route::post('/ff/store', [FfController::class, 'store'])->name('ff');

Route::get('/genshin', [GenshinController::class, 'index']);
Route::post('/genshin/store', [GenshinController::class, 'store'])->name('genshin');

Route::get('/pubg', [PubgController::class, 'index']);
Route::post('/pubg/store', [PubgController::class, 'store'])->name('pubg');

Route::get('/lol', [LolController::class, 'index']);
Route::post('/lol/store', [LolController::class, 'store'])->name('lol');

Route::get('/dragon', [DragonController::class, 'index']);
Route::post('/dragon/store', [DragonController::class, 'store'])->name('dragon');

Route::get('/pb', [PbController::class, 'index']);
Route::post('/pb/store', [PbController::class, 'store'])->name('pb');

Route::get('/honkai', [HonkaiController::class, 'index']);
Route::post('/honkai/store', [HonkaiController::class, 'store'])->name('honkai');

Route::get('/valo', [ValoController::class, 'index']);
Route::post('/valo/store', [ValoController::class, 'store'])->name('valo');

Route::get('/cod', [CodController::class, 'index']);
Route::post('/cod/store', [CodController::class, 'store'])->name('cod');

Route::get('/cr', [CrController::class, 'index']);
Route::post('/cr/store', [CrController::class, 'store'])->name('cr');

Route::get('/aov', [AovController::class, 'index']);
Route::post('/aov/store', [AovController::class, 'store'])->name('aov');

Route::get('/hayday', [HaydayController::class, 'index']);
Route::post('/hayday/store', [HaydayController::class, 'store'])->name('hayday');

Route::get('/opbr', [OpbrController::class, 'index']);
Route::post('/opbr/store', [OpbrController::class, 'store'])->name('opbr');
