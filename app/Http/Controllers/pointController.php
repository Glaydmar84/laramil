<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class pointController extends Controller
{
    public function  index()
    {
       $users = user::all();

      return view('dashboard',['users'=>$users]);

    }
}
