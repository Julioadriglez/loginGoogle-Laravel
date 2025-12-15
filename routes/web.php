<?php

// Context: Path: routes/web.php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\StudentsController;

// Student Routes

Route::get('/deshboard', [StudentsController::class, 'index'])->name('students.index');
Route::get('/student', [StudentsController::class, 'create'])->name('students.create');
Route::post('/student', [StudentsController::class, 'store'])->name('students.store');
Route::get('/student/delete/{id}', [StudentsController::class,'destroy'])->name('students.delete');
Route::get('/student/{id}', [StudentsController::class,'view'])->name('students.view');
Route::post('/student/update', [StudentsController::class,'update'])->name('student.update');

// Admin Routes

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

// Google OAuth Routes

Route::get("/google-auth/redirect", function () {
    return Socialite::driver("google")->redirect();
});

Route::get("/google-auth/callback", function () {
    $user_google = Socialite::driver("google")->user();
    $user = User::updateOrCreate(
        [
           'google_id' => $user_google->id, 
        ],
        [
            'name' => $user_google->name,
            'email' => $user_google->email,
        ]
    );
    Auth::login($user);
    return redirect('/dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
