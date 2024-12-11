<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    class ttaMonHocController extends Controller
    {
        public function getMonHocs()
        {
            // Lấy tất cả dữ liệu từ bảng 'ttamonhoc'
            $monHocs = DB::table('ttamonhoc')->get();
        
            // Truyền dữ liệu vào view với tên biến 'monHocs'
            return view('ttaMonHoc.ttalist', ['monHocs' => $monHocs]);
        }
        public function ttagetmonhoc($mamh)
        {
        //lấy dữ liệu từ bảng
          $monHocs = DB::table('ttamonhoc')->where('ttaMaMH',$mamh)->first();
          return view('ttaMonHoc.ttadetail',['monHocs' => $monHocs]);
        }
        // insert
        public function ttainsert($mamh){
            $monHocs = DB::table('ttamonhoc')->where('ttaMaMH',$mamh)->first();
            return view('ttaMonHoc.ttaedit',['monHocs' => $monHocs]);
            
        }
        public function ttainsertsubmit(Request $request)
        {
            DB::table('ttamonhoc')->where('ttaMaMH',$request->ttaMaMH)->update
            ([
                'ttaMaMH' => $request->ttaMaMH,
                'ttaTenMH' => $request->ttaTenMH,
                'ttaSoTiet' => $request->ttaSoTiet,
            ]);
        
            return redirect('/monhoc');
        }
        // delete
        public function ttadelete($mamh)
        {
            DB::table('ttamonhoc')->where('ttaMaMH', '=', $mamh)->delete();
            return redirect('/monhoc');
            
        }
        # insert
        public function insert()
        {
            return view('ttaMonHoc.ttainsert');
        }
        # insert submit
        public function insertSubmit(Request $request)
        {
            DB::table('ttamonhoc')->insert
            ([
                'ttaMaMH' => $request->ttaMaMH,
                'ttaTenMH' => $request->ttaTenMH,
                'ttaSoTiet' => $request->ttaSoTiet,
            ]);
            return redirect('/monhoc');
        }

    }
