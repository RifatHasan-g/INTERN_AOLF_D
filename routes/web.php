<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Redirect to product listing after login
Route::get('/', function (){
    return redirect()->route('products.index');
})->middleware(['auth']);

// Product routes protected by auth middleware
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    
});

require __DIR__.'/auth.php';
