<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Tes;
use App\Http\Livewire\Admin\AdminSlipGaji;
use App\Http\Livewire\Admin\AdminSlipGajiCreate;
use App\Http\Livewire\Admin\AdminSlipGajiEdit;
use App\Http\Livewire\Admin\AdminSlipGajiShow;

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
    return view('pages.login');
});

Route::post('/', [AuthController::class, 'login'])->name('login');

Route::get('/pdf/{id}', [Tes::class, 'tes'])->name('tes');


Route::get('/admin/slip-gaji', AdminSlipGaji::class)->name('admin.slip-gaji');
Route::get('/admin/slip-gaji/create', AdminSlipGajiCreate::class)->name('admin.slip-gaji.create');
Route::get('/admin/slip-gaji/{slipSalary}', AdminSlipGajiShow::class)->name('admin.slip-gaji.show');
Route::get('/admin/slip-gaji/edit/{slipSalary}', AdminSlipGajiEdit::class)->name('admin.slip-gaji.edit');

