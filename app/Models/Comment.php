<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';

    protected $fillable = [
    	'name', 'email', 'message',
        ];

    // public function product(){
    // 	return $this->belongsTo('App\Models\Product','idProduct','id');
    // }
    // public function user(){
    // 	return $this->belongsTo('App\Models\User','idUser','id');
    // }
}
