<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ttadatabasecontroller extends Controller
{
    # Đoc dữ liệu từ bảng khoa
    public function ttagetallkhoa()
    {
        //truy cập vào dữ liệu từ bảng khoa 
        $ttakhoa = DB::select("Select * from ttakhoa");
        return view('ttakhoa.ttalist',['ttakhoa'=>$ttakhoa]);
    }
    #lây chi tiêt
    public function ttagetkhoa($makh)
    {
        $khoa = DB::select("SELECT * FROM ttakhoa WHERE ttaMaKhoa = ?", [$makh]);
    
        // Lấy phần tử đầu tiên nếu có dữ liệu
        $khoa = !empty($khoa) ? $khoa[0] : null;
    
        return view('ttakhoa.ttaDetail', ['khoa' => $khoa]);
    }
    # Edit-get
    public function ttaEdit($makh)
    {
        $khoa = DB::select("Select * from ttakhoa where ttaMaKhoa = ?",[$makh])[0];
        // $khoa = !empty($khoa) ? $khoa[0] : null;
        return view('ttakhoa.ttaedit',['khoa' => $khoa]);
    }
    # edit submit
    public function ttaEditSubmit(Request $request)
    {
        // Lấy dữ liệu mới từ form
        $makh = $request->input('ttaMaKhoa');
        $tenkh = $request->input('ttaTenKhoa');

        // Thực hiện cập nhật dữ liệu
        DB::update("UPDATE ttakhoa SET ttaTenKhoa = ? WHERE ttaMaKhoa = ?", [$tenkh, $makh]);//không đc đặt nhầm vị trí

        // Chuyển hướng về trang danh sách
        return redirect('/khoa');
    }

    public function insert(){
        return view('ttakhoa.ttainsert');
    }

    public function createSubmit(Request $request) {
        DB::insert('INSERT INTO ttakhoa(ttaMaKhoa, ttaTenKhoa) VALUES(?, ?)', [
            $request->ttaMaKhoa,
            $request->ttaTenKhoa
        ]);
        return redirect('/khoa');
    }
    # xóa dữ liệu
  
    public function delete($makh)
    {
        DB::delete('delete from ttakhoa where ttaMaKhoa = ?', [$makh]);
        return redirect('/khoa')->with('success', 'Xóa khoa thành công!');
    }
}
