<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Post;

class MyUserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }
}
