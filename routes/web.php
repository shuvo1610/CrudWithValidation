<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard',[TeacherController::class,'home'])->Name('dashboard');

Route::get('teacher-create',[TeacherController::class,'create'])->Name('teacher.create');
Route::post('teacher-store',[TeacherController::class,'store'])->Name('teacher.store');

Route::get('teacher-index',[TeacherController::class,'show'])->Name('teacher.index');

Route::get('teacher-edit/{id}',[TeacherController::class,'edit'])->Name('teacher.edit');
Route::post('teacher-update/{id}',[TeacherController::class,'update'])->Name('teacher.update');

Route::get('teacher-profile/{id}',[TeacherController::class,'profile'])->Name('teacher.profile');

Route::get('teacher-delete/{id}',[TeacherController::class,'destroy'])->Name('teacher.delete');

