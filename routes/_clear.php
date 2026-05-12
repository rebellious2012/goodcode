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
// migrate with seed
Route::get('/migrate-seed', function () {
    Artisan::call('migrate', ['--seed' => true]);
    return response()->json('Migrated and Seeded');
});
//composer update
Route::get('/composer-update', function () {
    exec('composer update', $output, $return_var);
    if ($return_var === 0) {
        return response()->json('Composer Updated');
    } else {
        return response()->json('Composer Update Failed', 500);
    }
});
