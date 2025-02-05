<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Post;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Tag;

class TagController extends Controller
{
    public function index(){
        return view('admin.tags.index');
    }
}
