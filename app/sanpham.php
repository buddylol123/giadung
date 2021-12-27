<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    protected $fillable = ['masp','tensp','gia','hinh','soluong','maloai','mansx'];
    public function category()
    {
    	return $this->belongsTo('App\loaisanpham','maloai');
    }
}
