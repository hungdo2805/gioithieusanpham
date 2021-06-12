<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BangBinhLuan;

class BinhLuan_Controller extends Controller
{
    public function Home()
    {
      return redirect()->route('binhluan.index');
    }

    public function index()
    {
        
        $data=BangBinhLuan::with('baiviet')->get();
   // dd($data);
        return view('admin.binhluan.list',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();   
         //  dd("Khách comment",$data);
        BangBinhLuan::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();     $data['id_baiviet ']=$id;
         dd($id,$data);
         BangBinhLuan::create($data);
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BangBinhLuan::findOrFail($id)->delete(); 
        return $this->Home();
    }
}
