<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BangChuyenMuc;
use App\Model\BangBaiViet;
use App\Model\BangBinhLuan;

class Khach_Controller extends Controller
{
    //
    public function trangchu()
    {
       // $category=BangChuyenMuc::all();
        $baiviet_to1=BangBaiViet::with('chuyenmuc')->orderBy('id', 'desc')->first(); //lấy 1 bài viết mới nhất+hiển thị đầu tiên(ảnh to nhất)
        $baiviet_4o=BangBaiViet::with('chuyenmuc')->take(4)->get();  //lấy ra 4 bài viết cạnh bài viết to

      // dd($baiviet_to1,$baiviet_4o);  //kiểm tra dữ liệu
       return view('khach.trangchu',compact('baiviet_to1','baiviet_4o')); //xuất ra trang chủ(view)
    }

    public function getbaiviet($id)
    {
         $post=  BangBaiViet::with('chuyenmuc')->find($id);
         $noibat=BangBaiviet::where('noi_bat',1)->take(7)->orderBy('id', 'desc')->get();

         $binhluan=BangBinhLuan::where('id_baiviet',$id)->get();//san pham nao==>binh luan do==>lay binh luan theo ID san pham
        //  dd($binhluan);  
            //   dd($data,$baiviet);
         return view('khach.baiviet',compact('post','noibat','binhluan'));
    }

    public function getchuyenmuc($tenchuyenmuc)
    {
            # Lấy ra các bài viết theo chuyên mục(slug,ID)
            #Bước 1: lấy ra THÔNG TIN của chuyên mục đó theo slug(khong-dau)===>lấy ID của chuyên mục đó
            //Bước 2: Đã có ID chuyên mục==>lấy bài viết theo ID chuyên mục
            $cate = BangChuyenMuc::where('ten_khongdau', $tenchuyenmuc)->first();
            $list = BangBaiviet::where('id_chuyenmuc',$cate->id)->orderBy('created_at','desc')->paginate(5);

       //dd($cate,$list);
            return view('khach.chuyenmuc',compact('list','cate'));
    }

    public function get_timkiem(Request $request)
    {
          $key1=$request->key;//lay ra key tim kiem

          $key2=str_replace(' ','%',$key1);// bo ky tu khoang trang,thay = %
      // dd($key2);
          $ketquatk=BangBaiviet::where('tieu_de','LIKE','%'.$key2.'%')->get();
          return view('khach.timkiem',compact('ketquatk','key1'));
    }

    
}
