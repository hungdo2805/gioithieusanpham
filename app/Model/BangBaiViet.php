<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BangBaiViet extends Model
{
    protected $table="tbl_baiviet";
    protected $primaryKey="id";
    protected $guarded = [];//Tất cả các cột không thuoc trong guarded[] có thể gán hàng loạt.,Thay vi di khai bao Fillable tung cot 1
    public $timestamps=true;

    public function chuyenmuc()
    {
        return $this->belongsTo(BangChuyenMuc::class, 'id_chuyenmuc', 'id');
    }
    
}
