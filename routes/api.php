<?php
// routes/api.php 
Route::apiResource('books', BookController::class); 
  
// manual: 
Route::get('books', [BookController::class, 'index']); 
Route::post('books', [BookController::class, 'store']); 
Route::get('books/{book}', [BookController::class, 'show']); 
Route::put('books/{book}', [BookController::class, 'update']); 
Route::delete('books/{book}', [BookController::class, 'destroy']);