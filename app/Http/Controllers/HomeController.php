<?php

namespace App\Http\Controllers;
 
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'Гостевая книга',
            'pagetitle'=>'Гостевая книга'
            ];

          return view("pages.massage.index",$data);

    }
    public function edit($id)
    {
        $data = [
            'title'=> 'Гостевая книга',
            'pagetitle'=>'Гостевая книга'.$id
        ];
        return view('pages.massage.edit',$data);
    }
}
