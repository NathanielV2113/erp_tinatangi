<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::middleware(['isAdmin'])->group(function () {
    Route::redirect('admin/permissions', 'admin/role-permission/permission/index');
    Route::get('admin/permissions', [PermissionController::class, 'index'])->name('permissions');
    Route::get('admin/permissions/create', [PermissionController::class, 'create'])->name('create.permissions');
    Route::post('admin/permissions/store', [PermissionController::class, 'store'])->name('store.permissions');
    Route::get('admin/permissions/edit/{permission?}', [PermissionController::class, 'edit'])->name('edit.permissions');
    Route::put('admin/permissions/update/{permission?}', [PermissionController::class, 'update'])->name('update.permissions');
    Route::get('admin/permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);

    Route::get('admin/roles', [RoleController::class, 'index'])->middleware('isAdmin')->name('roles');
    Route::get('admin/roles/create', [RoleController::class, 'create'])->name('create.roles');
    Route::post('admin/roles/store', [RoleController::class, 'store'])->name('store.roles');
    Route::get('admin/roles/edit/{role?}', [RoleController::class, 'edit'])->name('edit.roles');
    Route::put('admin/roles/update/{role?}', [RoleController::class, 'update'])->name('update.roles');
    Route::get('admin/roles/{roleId}/delete', [RoleController::class, 'destroy']);
    Route::get('admin/roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('admin/roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::resource('admin/users', \App\Http\Controllers\UserController::class);
    Route::get('admin/users/{userId}/delete', [\App\Http\Controllers\UserController::class, 'destroy']);
    Route::get('admin/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users');
});