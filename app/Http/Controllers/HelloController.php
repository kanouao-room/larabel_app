<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
    

    public function index(Request $request){
    return view('hello.index', ['data'=>$request->data]);
}
     public function post(Request $request){
    // return view('hello.index',['msg'=>$request->msg]);
        $data = ['one', 'two' ,'three' ,'four' ,'five'];
        return view('hello.index', ['data'=>$data]);

}

    public function helloapp(){
    // $data = ['one', 'two' ,'three' ,'four' ,'five'];
    // return view('hello.index', ['data'=>$data]);
}


}
