<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return response()->json('Cleared');
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return response()->json('Migrated');
});
// Route::get('/migrate:fresh', function () {
//     Artisan::call('migrate:fresh');
//     return response()->json('Migrated');
// });
// storage:link
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return response()->json('Storage Linked');
});
