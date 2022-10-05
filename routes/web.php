<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\studentClassController;
use App\Http\Controllers\productController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\teacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', [StudentController::class, 'index']); //student di depan merupakan penaan yang dipanggil di view / penamaan url
Route::get('add', [StudentController::class, 'add']); //student di depan merupakan penaan yang dipanggil di view / penamaan url
Route::post('save', [StudentController::class, 'save']); //student di depan merupakan penaan yang dipanggil di view / penamaan url
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('update/{id}', [StudentController::class, 'update']);
Route::delete('delete/{id}', [StudentController::class, 'delete']);

Route::get('studentclass', [studentClassController::class, 'index']);
Route::get('addclass', [studentClassController::class, 'add']);
Route::post('saveclass', [studentClassController::class, 'save']);
Route::get('editclass/{id}', [studentClassController::class, 'edit']);
Route::put('updateclass/{id}', [studentClassController::class, 'update']);
Route::delete('deleteclass/{id}', [studentClassController::class, 'delete']);

Route::get('product', [productController::class, 'index']);
Route::get('addproduct', [productController::class, 'create']);
Route::post('saveproduct', [productController::class, 'store']);
Route::get('editproduct/{id}', [productController::class, 'edit']);
Route::put('updateproduct/{id}', [productController::class, 'update']);
Route::delete('delproduct/{id}', [productController::class, 'delete']);

Route::get('transaction', [transactionController::class, 'index']);
Route::get('addtrans', [transactionController::class, 'create']);
Route::post('savetrans', [transactionController::class, 'store']);
Route::get('edittrans/{id}', [transactionController::class, 'edit']);
Route::put('updatetrans/{id}', [transactionController::class, 'update']);
Route::delete('deltrans/{id}', [transactionController::class, 'delete']);

Route::post('detail-transaction', [transactionController::class, 'get_details']);

Route::get('teacher', [teacherController::class, 'index']);
Route::get('getdata-teacher', [teacherController::class, 'get_data_teacher']);
Route::post('store-teacher', [teacherController::class, 'store']);
Route::post('update-teacher', [teacherController::class, 'update']);
Route::delete('delete-teacher/{id}', [teacherController::class, 'destroy']);
Route::get('detail-teacher/{id}', [teacherController::Class, 'detail']);


