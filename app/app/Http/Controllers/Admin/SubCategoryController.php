<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Post;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories['id'] = "";
        $sub_categories['category'] = "";
        $sub_categories['sub_category'] = "";
        $sub_categories['description'] = "";
        $sub_categories['slug'] = "";
        $sub_categories['status'] = "";
        $sub_categories['route'] = "store";

        $cats = Category::orderBy('id', 'DESC')->get();



        return view('admin.sub-category.index',['sub_categories'=>$sub_categories,'cats'=>$cats]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "category" => "required",
            "sub_category" => "required|unique:sub_categories",
            "description" => "required",
            "slug" => "required|unique:sub_categories",
            "status" => "required",
        ]);

        $sub_cat = new SubCategory;

        $sub_cat->categories_id = $request->category;
        $sub_cat->sub_category = $request->sub_category;
        $sub_cat->description = $request->description;
        $sub_cat->slug = $request->slug;
        $sub_cat->status = $request->status;
        $sub_cat->save();

        Session()->flash('success', 'You have successfully Added Sub Category!');
        return redirect()->route('admin.sub-category.list');
        // dd("");

    }

    public function edit(Request $request)
    {

        $sub_cats = DB::table('sub_categories')
                    ->join('categories','categories.id','sub_categories.categories_id')
                    ->select('sub_categories.*','categories.category as category')
                    ->where('sub_categories.slug',$request->slug)
                    ->first();

        $sub_categories['id'] = $sub_cats->id;
        $sub_categories['category'] = $sub_cats->category;
        $sub_categories['sub_category'] = $sub_cats->sub_category;
        $sub_categories['description'] = $sub_cats->description;
        $sub_categories['slug'] = $sub_cats->slug;
        $sub_categories['status'] = $sub_cats->status;
        $sub_categories['route'] = "update";

        $cats = Category::orderBy('id', 'DESC')->get();

        // dd($sub_categories);

        return view('admin.sub-category.index',['sub_categories'=>$sub_categories,'cats'=>$cats]);

    }

    public function update(Request $request)
    {
        $sub_cat = SubCategory::where('id',$request->id)->first();

        // dd($sub_cat);

        $sub_cat->categories_id = $request->category;
        $sub_cat->sub_category = $request->sub_category;
        $sub_cat->description = $request->description;
        $sub_cat->slug = $request->slug;
        $sub_cat->status = $request->status;
        $sub_cat->save();

        Session()->flash('success', 'You have successfully Updated!');
        return redirect()->route('admin.sub-category.list');
        // dd($request->all());
    }

    public function list()
    {
        // $sub_cats = SubCategory::orderBy('id', 'DESC')->get();

        $sub_cats = DB::table('sub_categories')
                    ->join('categories','categories.id','sub_categories.categories_id')
                    ->select('sub_categories.*','categories.category as category')
                    ->orderBy('id', 'DESC')
                    ->get();

        return view('admin.sub-category.list',compact('sub_cats'));
    }

    public function delete(Request $request)
    {
        $cat = SubCategory::where('slug',$request->slug)->delete();

        Session()->flash('success', 'You have successfully Deleted!');
        return redirect()->route('admin.sub-category.list');
    }

}
