<?php
use App\Http\Controllers\ttadatabasecontroller;
use App\Http\Controllers\ttaMonHocController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//khoa
Route::get('/khoa',[ttadatabasecontroller::class,'ttagetallkhoa'])->name('Khoa.index');
//chi tiết
Route::get('/khoa/detail/{makh}',[ttadatabasecontroller::class,'ttagetkhoa'])->name('Khoa.detail');
//sửa
Route::get('/khoa/edit/{makh}',[ttadatabasecontroller::class,'ttaEdit'])->name('Khoa.edit');
Route::post('/khoa/edit',[ttadatabasecontroller::class,'ttaEditSubmit'])->name('Khoa.editsubmit');
//thêm mới
Route::get('khoa/insert',[ttadatabasecontroller::class,'insert'])->name('Khoa.getinsert');
Route::post('khoa/insert',[ttadatabasecontroller::class,'createSubmit'])->name('Khoa.submitinsert');
//xóa
Route::delete('/khoa/delete/{makh}', [ttadatabasecontroller::class, 'delete'])->name('Khoa.delete');

#lab8
# Môn Học
Route::get('/monhoc',[ttaMonHocController::class,'getMonHocs'])->name('monhoc.list');
#chi tiet
Route::get('/monhoc/detail/{mamh}',[ttaMonHocController::class,'ttagetmonhoc'])->name('monhoc.detail');
# sửa
Route::get('/monhoc/edit/{mamh}',[ttaMonHocController::class,'ttainsert'])->name('monhoc.edit');
#sửa->submit
Route::post('/monhoc/edit',[ttaMonHocController::class,'ttainsertsubmit'])->name('monhoc.edittsubmit');
#delete
Route::get('/monhoc/delete/{mamh}',[ttaMonHocController::class,'ttadelete'])->name('monhoc.delete'); 
#insert
Route::get('/monhoc/insert',[ttaMonHocController::class,'insert'])->name('monhoc.insert');
#insertSubmit
Route::post('/monhoc/insert',[ttaMonHocController::class,'insertSubmit'])->name('monhoc.insertsubmit');

