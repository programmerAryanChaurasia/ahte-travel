<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Post;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $post['id'] = "";
        $post['title_tag'] = "";
        $post['robots_tag'] = "";
        $post['meta_keyword'] = "";
        $post['meta_description'] = "";
        $post['meta_subject'] = "";
        $post['meta_revised'] = "";
        $post['meta_abstract'] = "";
        $post['meta_topic'] = "";
        $post['meta_summary'] = "";
        $post['meta_distribution'] = "";
        $post['meta_category'] = "";
        $post['meta_auther'] = "";
        $post['meta_language'] = "";
        $post['meta_auther_and_email'] = "";
        $post['meta_coverage'] = "";
        $post['meta_rating'] = "";
        $post['thumbnail_image'] = "";
        $post['thumbnail_image_alt'] = "";
        // $post['thumbnail_image_position'] = "";
        $post['title'] = "";
        $post['sort_description'] = "";
        $post['long_description'] = "";
        $post['sub_categories_id'] = "";
        $post['categories_id'] = "";
        $post['slug'] = "";
        $post['status'] = "";
        $post['category'] = "";
        $post['sub_category'] = "";
        $post['page'] = 0;/* Zero for 'create_page' */


        $cats = Category::orderBy('id', 'DESC')->get();
        return view('admin.post.index',compact('cats','post'));
    }

    // SubCategory dependent on category drop down
    public function get_sub_category(Request $request)
    {
        $cat_id=$request->cat_id;

        $sub_cats = DB::table('sub_categories')->where('categories_id',$cat_id)->where('post_action',0)->orderBy('id', 'DESC')->get();

        return response()->json($sub_cats);
        // dd($sub_cats);

    }

    public function store(Request $request)
    {
        // dd($request->file('thumbnail_image'));

        $posts = new Post;

        $posts->title_tag = $request->title_tag;
        $posts->robots_tag = $request->robots_tag ;
        $posts->meta_keyword = $request->meta_keyword ;
        $posts->meta_description = $request->meta_description ;
        $posts->meta_subject = $request->meta_subject ;
        $posts->meta_revised = $request->meta_revised ;
        $posts->meta_abstract = $request->meta_abstract ;
        $posts->meta_topic = $request->meta_topic ;
        $posts->meta_summary = $request->meta_summary ;
        $posts->meta_distribution = $request->meta_distribution ;
        $posts->meta_category = $request->meta_category ;
        $posts->meta_auther = $request->meta_auther ;
        $posts->meta_language = $request->meta_language ;
        $posts->meta_auther_and_email = $request->meta_auther_and_email ;
        $posts->meta_coverage = $request->meta_coverage ;
        $posts->meta_rating = $request->meta_rating ;

        if ($request->file('thumbnail_image')!=null) {
            //save image
            $image = $request->file('thumbnail_image');

            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('post_thumbnail_image/'), $imageName);


            // $imageName = time().'.'.$image->getClientOriginalExtension();
            // $path = $image->storeAs('post_thumbnail_image', $imageName, 'public');

            $posts->thumbnail_image = $imageName;


            $posts->thumbnail_image_alt = $request->thumbnail_image_alt ;
        }

        $posts->title = $request->title ;
        $posts->sort_description = $request->sort_description ;
        $posts->long_description = $request->long_description ;
        $posts->categories_id = $request->categories_id ;
        $posts->sub_categories_id = $request->sub_categories_id ;
        $posts->status = $request->status ;
        $posts->slug = $request->slug ;
        $posts->save();

        //Change Post action column in sub_categories table --->> It indicate the post are submited on this subcategory

        $sub_cat = SubCategory::where('id',$request->sub_categories_id)->first();
        if ($request->status==1) {
            $sub_cat->post_action = 1;
        } else {
            $sub_cat->post_action = 0;
        }
        $sub_cat->save();


        session()->flash('success','Record Added Successfully!!');
        return redirect()->route('admin.post.list');
    }
    public function list()
    {
        $posts = DB::table('posts')
                ->join('categories','categories.id','posts.categories_id')
                ->join('sub_categories','sub_categories.id','posts.sub_categories_id')
                ->select('posts.*','categories.category as category','sub_categories.sub_category as sub_category','sub_categories.slug as sub_category_slug')
                ->get();

        return view('admin.post.list',compact('posts'));
    }

    public function edit(Request $request)
    {
        $edit_post = DB::table('posts')
                ->join('categories','categories.id','posts.categories_id')
                ->join('sub_categories','sub_categories.id','posts.sub_categories_id')
                ->select('posts.*','categories.category as category','sub_categories.sub_category as sub_category')
                ->where('posts.id',$request->id)
                ->first();

        // dd($edit_post);
        $post['id'] = $edit_post->id ?? '';
        $post['title_tag'] = $edit_post->title_tag ?? '';
        $post['robots_tag'] = $edit_post->robots_tag ?? '';
        $post['meta_keyword'] = $edit_post->meta_keyword ?? '';
        $post['meta_description'] = $edit_post->meta_description ?? '';
        $post['meta_subject'] = $edit_post->meta_subject ?? '';
        $post['meta_revised'] = $edit_post->meta_revised ?? '';
        $post['meta_abstract'] = $edit_post->meta_abstract ?? '';
        $post['meta_topic'] = $edit_post->meta_topic ?? '';
        $post['meta_summary'] = $edit_post->meta_summary ?? '';
        $post['meta_distribution'] = $edit_post->meta_distribution ?? '';
        $post['meta_category'] = $edit_post->meta_category ?? '';
        $post['meta_auther'] = $edit_post->meta_auther ?? '';
        $post['meta_language'] = $edit_post->meta_language ?? '';
        $post['meta_auther_and_email'] = $edit_post->meta_auther_and_email ?? '';
        $post['meta_coverage'] = $edit_post->meta_coverage ?? '';
        $post['meta_rating'] = $edit_post->meta_rating ?? '';
        $post['thumbnail_image'] = $edit_post->thumbnail_image ?? '';
        $post['thumbnail_image_alt'] = $edit_post->thumbnail_image_alt ?? '';
        // $post['thumbnail_image_position'] = $edit_post->thumbnail_image_position ?? '';
        $post['title'] = $edit_post->title ?? '';
        $post['sort_description'] = $edit_post->sort_description ?? '';
        $post['long_description'] = $edit_post->long_description ?? '';
        $post['sub_categories_id'] = $edit_post->sub_categories_id ?? '';

        $post['categories_id'] = $edit_post->categories_id ?? '';

        $post['slug'] = $edit_post->slug ?? '';
        $post['status'] = $edit_post->status ?? '';
        $post['category'] = $edit_post->category ?? '';
        $post['sub_category'] = $edit_post->sub_category ?? '';
        $post['page'] = 1;/* 1 for 'edit_page' */


        // dd($post);
        $cats = Category::orderBy('id', 'DESC')->get();
        return view('admin.post.index',compact('cats','post'));
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $posts = Post::where('id',$request->id)->first();

        $posts->title_tag = $request->title_tag;
        $posts->robots_tag = $request->robots_tag ;
        $posts->meta_keyword = $request->meta_keyword ;
        $posts->meta_description = $request->meta_description ;
        $posts->meta_subject = $request->meta_subject ;
        $posts->meta_revised = $request->meta_revised ;
        $posts->meta_abstract = $request->meta_abstract ;
        $posts->meta_topic = $request->meta_topic ;
        $posts->meta_summary = $request->meta_summary ;
        $posts->meta_distribution = $request->meta_distribution ;
        $posts->meta_category = $request->meta_category ;
        $posts->meta_auther = $request->meta_auther ;
        $posts->meta_language = $request->meta_language ;
        $posts->meta_auther_and_email = $request->meta_auther_and_email ;
        $posts->meta_coverage = $request->meta_coverage ;
        $posts->meta_rating = $request->meta_rating ;

        if ($request->file('thumbnail_image')!=null) {
            //save image
            $image = $request->file('thumbnail_image');

            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('post_thumbnail_image/'), $imageName);

            $posts->thumbnail_image = $imageName;

            $posts->thumbnail_image_alt = $request->thumbnail_image_alt ;
        }

        $posts->title = $request->title ;
        $posts->sort_description = $request->sort_description ;
        $posts->long_description = $request->long_description ;
        // $posts->categories_id = $request->categories_id ;
        // $posts->sub_categories_id = $request->sub_categories_id ;
        $posts->status = $request->status ;
        $posts->slug = $request->slug ;
        $posts->save();

        //Change Post action column in sub_categories table --->> It indicate the post are submited on this subcategory
        //if status == 1 that means post are ready for publish
        //if status == 0 that means post are NOT ready for publish

        $sub_cat = SubCategory::where('id',$posts->sub_categories_id)->first();
        if ($request->status==1) {
            $sub_cat->post_action = 1;
        } else {
            $sub_cat->post_action = 0;
        }
        $sub_cat->save();


        session()->flash('success','Record Updated Successfully!!');
        return redirect()->route('admin.post.list');
    }

    public function delete(Request $request)
    {
        $post = Post::where('id',$request->id)->first();

        $sub_cat = SubCategory::where('id',$post->sub_categories_id)->first();

        //"post_action = 0" it means not any post publish on this sub_category, Here we are deleting post so we make "post_action = 0".
        $sub_cat->post_action = 0;
        $sub_cat->save();

        Post::destroy($request->id);

        session()->flash('success','Record Deletes Successfully!!');
        return redirect()->route('admin.post.list');
    }


}

