<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BangChuyenMuc;
use App\Model\BangBaiViet;

class Khach_Controller extends Controller
{
    //
    public function trangchu()
    {
        $data=BangChuyenMuc::all();
        $baiviet1=BangBaiViet::with('chuyenmuc')->orderBy('id', 'desc')->first();
        $baiviet=BangBaiViet::with('chuyenmuc')->take(4)->get();
        $chuyenmuctren=BangChuyenMuc::first();
        $slidengang=BangBaiViet::where('id_chuyenmuc',$chuyenmuctren->id)->get();


      // dd($data,$baiviet1,$baiviet,$chuyenmuctren,$slidengang);
        return view('khach.trangchu',compact('data','baiviet1','baiviet','chuyenmuctren','slidengang'));
    }

    public function getbaiviet($id)
    {
      $data=BangChuyenMuc::all();
      $baiviet=  BangBaiViet::find($id);
         //   dd($data,$baiviet);
      return view('khach.chitietpost',compact('data','baiviet'));
    }

    public function getchuyenmuc($tenchuyenmuc,$id)
    {
      # code...
      
     // dd($id,$tenchuyenmuc);
     return redirect()->route('khach.index');
    }
}
