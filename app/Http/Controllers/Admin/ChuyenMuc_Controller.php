<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\BangChuyenMuc;

class ChuyenMuc_Controller extends Controller
{
    public function Home()
    {
      return redirect()->route('chuyenmuc.index');
    }
    public function index()
    {
        $data=BangChuyenMuc::all();
        dd($data);
        //return view('Admin.huyenxa.huyen',compact('data'));
    }

    public function create()
    {
    }
   
    public function store(Request $request)
    {   
        BangChuyenMuc::create($request->all());
        return $this->Home();
    }

   
    public function show($id)
    {
      return $this->Home();
    }

   
    public function edit($id)
    {
         $data=BangChuyenMuc::find($id);
     //   dd($data);
       // return view('Admin.huyenxa.sua_huyen',compact('data'));
    }

   
    public function update(Request $request, $id)
    {
         BangChuyenMuc::find($id)->update($request->all()); 
         return $this->Home();
    }

    public function destroy($id)
    {
        BangChuyenMuc::findOrFail($id)->delete(); 
        return $this->Home();
    }
}
