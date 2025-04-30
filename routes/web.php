<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;

Route::get('/', function () {
    return view('modules.crm.website.homepage');
})->name('home');

Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['isAdmin'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::get('/hrm', [\App\Http\Controllers\HrmController::class, 'index'])->middleware(['isHrm'])->name('hrm');
Route::get('/frm', [\App\Http\Controllers\FrmController::class, 'index'])->middleware(['isFrm'])->name('frm');
Route::get('/scm', [\App\Http\Controllers\ScmController::class, 'index'])->middleware(['isScm'])->name('scm');
Route::get('/mfr', [\App\Http\Controllers\MfrController::class, 'index'])->middleware(['isMfr'])->name('mfr');
Route::get('/crm', [\App\Http\Controllers\CrmController::class, 'index'])->middleware(['isCrm'])->name('crm');
Route::get('/employee', [\App\Http\Controllers\EmployeeController::class, 'employee'])->middleware(['isEmployee'])->name('employee');
Route::get('/user', [\App\Http\Controllers\CrmController::class, 'homepage'])->middleware(['isUser'])->name('user');



require __DIR__.'/auth.php';
require __DIR__.'/role-permission.php';
require __DIR__.'/hrm-route.php';
require __DIR__.'/frm-route.php';
require __DIR__.'/scm-route.php';
require __DIR__.'/mfr-route.php';
require __DIR__.'/crm-route.php';
require __DIR__.'/user-route.php';