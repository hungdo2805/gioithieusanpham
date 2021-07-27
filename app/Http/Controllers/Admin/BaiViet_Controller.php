<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\BangChuyenMuc;
use App\Model\BangBaiViet;
use File;

class BaiViet_Controller extends Controller
{
    private $noiluufile="public/file/baiviet/";

    // public function __construct()
    // {
    //    $this->noiluufile='public/file/baiviet/';
    // }
    public function Home()
    {
      return redirect()->route('baiviet.index');
    }
    
    public function index()
    {
        $data=BangBaiViet::with('chuyenmuc')->get();
 //dd($data);
        return view('admin.baiviet.list',compact('data'));
    }

    
    public function create()
    {
        $chuyenmuc=BangChuyenMuc::all();
        return view('admin.baiviet.add',compact('chuyenmuc'));
    }

   
    public function store(Request $request)
    {
        $file=$request->file('hinh_anh');$tenfile=$file->getClientOriginalName();// 
        $data = $request->all();     $data['hinh_anh']=$tenfile;;//
   // dd($data,$data['hinh_anh']);
         BangBaiViet::create($data);// thêm vào CSDL 
        $file->move($this->noiluufile,$tenfile); // 
        return $this->Home();
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $chuyenmuc=BangChuyenMuc::all();
        $data=BangBaiViet::find($id);
        return view('admin.baiviet.edit',compact('data','chuyenmuc'));
    }

   
    public function update(Request $request, $id)
    {
                $data = $request->all(); 
                $file=$request->file('hinh_anh');
                if(isset($file)) //co file
                {
                $tenfile=$file->getClientOriginalName();
                $data['hinh_anh']=$tenfile;
        //dd($data);
                $file->move($this->noiluufile,$tenfile); // 
                }

        // dd($data);        
                BangBaiViet::findOrFail($id)->update($data);        
                return $this->Home();
    }

   
    public function destroy($id)
    {
        $data=BangBaiViet::find($id);
//   dd('public/file/nhanhieu/'.$data->hinh_anh);//
        File::delete($this->noiluufile.$data->hinh_anh);
        BangBaiViet::find($id)->delete(); 
        return $this->Home();
    }

/*    public function getnoiluufile()
    {
        # code...
        dd($this->noiluufile);
    }*/
    
}
