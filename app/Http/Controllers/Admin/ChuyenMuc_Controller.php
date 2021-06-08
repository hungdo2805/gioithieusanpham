<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\BangChuyenMuc;
use Illuminate\Support\Str;

class ChuyenMuc_Controller extends Controller
{
    public function Home()
    {
      return redirect()->route('chuyenmuc.index');
    }
    public function index()
    {
        $data=BangChuyenMuc::all();
        //dd($data);
        return view('admin.chuyenmuc.list',compact('data'));
    }

    public function create()
    {
    }
   
    public function store(Request $request)
    {   
        $data= $request->all();  $data['ten_khongdau']=  Str::slug($request->ten_chuyenmuc);
        BangChuyenMuc::create($data);
        return $this->Home();
    }

   
    public function show($id)
    {
      return $this->Home();
    }

   
    public function edit($id)
    {
        
        $data=BangChuyenMuc::find($id);

        return view('admin.chuyenmuc.edit',compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        $data= $request->all();  $data['ten_khongdau']=  Str::slug($request->ten_chuyenmuc);
         BangChuyenMuc::find($id)->update($data); 
         return $this->Home();
    }

    public function destroy($id)
    {
        BangChuyenMuc::findOrFail($id)->delete(); 
        return $this->Home();
    }
}
