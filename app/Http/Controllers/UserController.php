<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $user=Users::all();
        return view('User.index',compact('user'));
    }


}
