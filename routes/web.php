<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::controller(CourseController::class)->group(function () {
    Route::get('/', 'createCourse')->name('course.create');
    Route::get('/course', 'index')->name('course.index');
    Route::post('/course', 'store')->name('course.store');
    Route::get('/course/{course}', 'show')->name('course.show');
    Route::get('/course/{course}/edit', 'edit')->name('course.edit');
    Route::put('/course/{course}', 'update')->name('course.update');
    Route::delete('/course/{course}', 'destroy')->name('course.destroy');
});
