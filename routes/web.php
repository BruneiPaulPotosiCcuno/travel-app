<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Rutas para publicaciones
Route::get('/', [PostController::class, 'index'])->name('posts.index'); 
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show'); 
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

// Rutas protegidas por middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');

    // Cargar rutas para el prefijo 'admin'
    Route::prefix('admin')
        ->middleware('auth:web') // Asegúrate de que 'auth:web' es el middleware correcto
        ->group(base_path('routes/admin.php')); // Cargar archivo de rutas admin.php
});
