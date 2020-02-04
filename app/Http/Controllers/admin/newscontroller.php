<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newscontroller extends Controller
{
    


public function add (){
    return view('admin.news.create');
 }
 
 public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/news/create');
  }  
}