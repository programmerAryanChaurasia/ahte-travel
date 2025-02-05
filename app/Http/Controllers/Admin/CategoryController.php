<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories['id'] = "";
        $categories['category'] = "";
        $categories['description'] = "";
        $categories['slug'] = "";
        $categories['status'] = "";
        $categories['route'] = "store";

        return view('admin.category.index',['categories'=>$categories]);

    }

    public function store(Request $request)
    {
        $request->validate([
            "category" => "required|unique:categories",
            "description" => "required",
            "slug" => "required|unique:categories",
            "status" => "required",
        ]);

        $cat = new Category;

        $cat->category = $request->category;
        $cat->description = $request->description;
        $cat->slug = $request->slug;
        $cat->status = $request->status;
        $cat->save();

        Session()->flash('success', 'You have successfully Added Category!');
        return redirect()->route('admin.category.list');
        // dd($request->all());

    }

    public function edit(Request $request)
    {
        $cat = Category::where('slug',$request->slug)->first();

        $categories['id'] = $cat->id;
        $categories['category'] = $cat->category;
        $categories['description'] = $cat->description;
        $categories['slug'] = $cat->slug;
        $categories['status'] = $cat->status;
        $categories['route'] = "update";

        return view('admin.category.index',['categories'=>$categories]);

    }
    public function update(Request $request)
    {
        $cat = Category::where('id',$request->id)->first();

        $cat->category = $request->category;
        $cat->description = $request->description;
        $cat->slug = $request->slug;
        $cat->status = $request->status;
        $cat->save();

        Session()->flash('success', 'You have successfully Updated!');
        return redirect()->route('admin.category.list');
        // dd($request->all());
    }

    public function list()
    {
        $cats = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.list',compact('cats'));
    }

    public function delete(Request $request)
    {
        $cat = Category::where('slug',$request->slug)->delete();

        Session()->flash('success', 'You have successfully Deleted!');
        return redirect()->route('admin.category.list');
    }
}

