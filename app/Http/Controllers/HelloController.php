<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index($id=null){
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです。',
            'id'=>$id
        ];
        return view('hello.index',$data);
    }
}
