<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Post;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        $sub_cats = SubCategory::where('post_action',1)->get();

        return view('frontend.home',compact('cats','sub_cats'));
    }

    public function post_page($cat_slug=null, $sub_cat_slug=null)
    {

        $sub_cat = SubCategory::where('slug',$sub_cat_slug)->first();
        $cat = Category::where('slug',$cat_slug)->first();

        // dd($sub_cat);

        //Privious Page
        $next_page = Post::where('categories_id', '=', $cat->id)->where('sub_categories_id', '>', $sub_cat->id)->orderBy('id','asc')->first();
        //Next Page
        $prev_page =Post::where('categories_id', '=', $cat->id)->where('sub_categories_id', '<', $sub_cat->id)->orderBy('id','asc')->first();

        // $post = DB::table('posts')->where('sub_categories_id',$sub_cat->id)->first();

        $post = DB::table('posts')
                    ->join('categories','categories.id','posts.categories_id')
                    ->select('posts.*','categories.category as category_name','categories.slug as category_slug')
                    ->where('posts.sub_categories_id',$sub_cat->id)
                    ->first();
        // dd($post);

        //Fetch Sidebar All sub category related to this category.
        $cat = Category::where('slug',$cat_slug)->first();
        $sub_cats = SubCategory::where('categories_id',$cat->id)->where('post_action',1)->get();

        // dd($sub_cats);

        //All post related to category for side bar.
        //$all_posts_of_this_category = Post::where('sub_categories_id',$sub_cat->id)->get();


        //All category list for header2
        $cats = Category::all();
        // dd($post);

        return view('frontend.post_page',compact('post','sub_cats','cat','cats'));
    }

    public function category_page($cat_slug)
    {
        $cat = Category::where('slug',$cat_slug)->first();
        $sub_cats = SubCategory::where('categories_id',$cat->id)->where('post_action',1)->get();

        //Introduction of any category ---> When any person call category then return First Post of that category(in most of the cases first category is Introduction of that category)
        $first_post = DB::table('posts')->where('categories_id',$cat->id)->first();

        // dd($first_post);
        if($first_post == null){
            return abort(503);

        }

        $post = DB::table('posts')
                ->join('categories','categories.id','posts.categories_id')
                ->select('posts.*','categories.category as category_name','categories.slug as category_slug')
                ->where('posts.sub_categories_id',$first_post->sub_categories_id)
                ->first();




        //All category list for header2
        $cats = Category::all();

        return view('frontend.post_page',compact('post','sub_cats','cat','cats'));
        // dd($post);
    }
}
