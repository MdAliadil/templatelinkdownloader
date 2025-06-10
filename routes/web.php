<?php

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/check-user', function () {
    dd(auth()->user());
});

Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/template/{template}', [TemplateController::class, 'show'])->name('template.show');
    Route::post('/template/{template}/preview', [TemplateController::class, 'livePreview'])->name('template.livePreview');
});


Route::middleware(['auth', 'role:admin|super-admin'])->group(function () {
    Route::resource('/manage-templates', TemplateController::class)->except(['show']);
});



Route::middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
});



Route::middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/admin-panel', function () {
        return 'super-admin Panel'; 
    });
});


Route::get('/', function () {
    return view('welcome');
})->name('welcomedashboard');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->hasRole('super-admin')) {
        return redirect()->route('superadmin.dashboard');
    } elseif ($user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif ($user->hasRole('user')) {
        return redirect()->route('user.dashboard');
    } else {
        abort(403, 'No valid role assigned.');
    }
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware(['auth', 'role:admin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::middleware(['auth', 'role:user'])->get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');











Route::post('/downloadpdf', [TemplateController::class, 'downloadPdf'])->name('pdf');

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

Route::post('/card/share', [UserController::class, 'shareCard'])->name('card.share');
Route::get('/card/preview/{token}', [UserController::class, 'previewCard'])->name('card.preview');












require __DIR__.'/auth.php';
