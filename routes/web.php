<?php
use App\Http\Controllers\ttadatabasecontroller;
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
//chi tiết
Route::get('/khoa',[ttadatabasecontroller::class,'ttagetallkhoa'])->name('Khoa.index');
Route::get('/khoa/detail/{makh}',[ttadatabasecontroller::class,'ttagetkhoa'])->name('Khoa.detail');
//sửa
Route::get('/khoa/edit/{makh}',[ttadatabasecontroller::class,'ttaEdit'])->name('Khoa.edit');
Route::post('/khoa/edit',[ttadatabasecontroller::class,'ttaEditSubmit'])->name('Khoa.editsubmit');
//thêm mới
Route::get('khoa/insert',[ttadatabasecontroller::class,'insert'])->name('Khoa.getinsert');
Route::post('khoa/insert',[ttadatabasecontroller::class,'createSubmit'])->name('Khoa.submitinsert');
//xóa
Route::delete('/khoa/delete/{makh}', [ttadatabasecontroller::class, 'delete'])->name('Khoa.delete');