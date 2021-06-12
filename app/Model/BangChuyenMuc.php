<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class BangChuyenMuc extends Model
{
      //
      protected $table="tbl_chuyenmuc";
      protected $primaryKey="id";
      protected $guarded = [];//Tất cả các cột không thuoc trong guarded[] có thể gán hàng loạt.,Thay vi di khai bao Fillable tung cot 1
      public $timestamps=false;

      /**
       * Get all of the comments for the BangChuyenMuc
       *
       * @return \Illuminate\Database\Eloquent\Relations\HasMany
       */
      public function baiviet()
      {
          return $this->hasMany(BangBaiViet::class, 'id_chuyenmuc', 'id');
      }
}
