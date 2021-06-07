<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BangBinhLuan extends Model
{
    protected $table="tbl_binhluan";
    protected $primaryKey="id";
    protected $guarded = [];//Tất cả các cột không thuoc trong guarded[] có thể gán hàng loạt.,Thay vi di khai bao Fillable tung cot 1
    public $timestamps=true;

    public function baiviet()
    {
        return $this->belongsTo(BangBaiViet::class, 'id_baiviet', 'id');
    }
    
}
