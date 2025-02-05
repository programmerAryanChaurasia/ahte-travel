@extends('layouts.admin.layout')

@section('page-name','Post')

@section('age',20)

@section('back-page')
<a href="{{ route('dashboard.index') }}" > Dashboard &nbsp; >  &nbsp;</a> Create Post &nbsp; > &nbsp; <a href="{{ route('admin.post.list')  }}" > List </a>

<style>
    .required{
        color: red;
    }

    #container {
        width: 1000px;
        margin: 20px auto;
    }
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 400px;
    }
    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }

</style>
@endsection

@section('content')

@if ($post['page']==1)
    <form action="{{ route('admin.post.update') }}" method="POST" enctype="multipart/form-data">
@else
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
@endif

    @csrf

    <section class="panel important">
        <div class="row ">
            <div class="col-sm-9">
                <div class="container my-5 mx-2">
                    <div class="row justify-content-center">
                      <div class="col-lg-12">


                          <div class="row g-3">
                            {{--  --}}


                            <div class="col-md-6">
                                <label for="" class="form-label">Title Tag <span class="required">*</span></label>
                                <textarea class="form-control" id="" name="title_tag" rows="1" required>{{ $post['title_tag'] ?? '' }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="" class="form-label">Robots Tag <span class="required">*</span></label>
                                <textarea class="form-control" id="" name="robots_tag" rows="1" required>{{ $post['robots_tag'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta Keyword (understand what the webpage is about) <span class="required">*</span></label>
                                <textarea class="form-control" id="" name="meta_keyword" rows="1" required>{{ $post['meta_keyword'] ?? '' }}</textarea>
                            </div>

                            <div class="col-sm-6">
                              <label for="" class="form-label">Meta Description</label>
                              <textarea class="form-control" id="" name="meta_description" rows="1" >{{ $post['meta_description'] ?? '' }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta Subject <span class="required">*</span></label>
                                <textarea class="form-control" id="" name="meta_subject" rows="1" required>{{ $post['meta_subject'] ?? '' }}</textarea>
                            </div>
                            {{-- --}}
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta Revised(Sunday, July 18th, 2010, 5:15 pm) <span class="required">*</span></label>
                                <input type="text" name="meta_revised" id="" value="{{ $post['meta_revised'] ?? '' }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta Abstract </label>
                                <input type="text" name="meta_abstract" id="" value="{{ $post['meta_abstract'] ?? '' }}" class="form-control" >
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta Topic </label>
                                <input type="text" name="meta_topic" id="" value="{{ $post['meta_topic'] ?? '' }}" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta Summary </label>
                                <input type="text" name="meta_summary" value="{{ $post['meta_summary'] ?? '' }}" class="form-control">
                            </div>
                            {{----}}
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta distribution <span class="required">*</span></label>
                                <textarea class="form-control" id="" name="meta_distribution" rows="1" required>{{ $post['meta_distribution'] ?? '' }}</textarea>
                            </div>
                            {{----}}
                            <div class="col-md-6">
                                <label for="" class="form-label">Meta  Category<span class="required">*</span></label>
                                <input type="text" name="meta_category" id="" value="{{ $post['meta_category'] ?? '' }}" class="form-control" required>
                            </div>


                          </div>

                      </div>
                    </div>
                  </div>

            </div>

            <div class="col-sm-3 mt-4 px-5" style="">
                <div class="col-sm-12 mt-3 ">
                    <label for="your-name" class="form-label">Auther <span class="required">*</span></label>
                    <select class="form-select" name="meta_auther" data-live-search="true" data-container="body" >
                      <option value="Aryan Chaurasia">Aryan Chaurasia </option>
                    </select>
                </div>
                <div class="col-md-12" style="margin-top: 32px;">
                    <label for="" class="form-label">Meta Language </label>
                    <select class="form-select" name="meta_language" data-live-search="true" data-container="body">
                        <option value="EN">EN</option>
                        {{-- <option value="HI">HI </option> --}}
                    </select>
                </div>

                <div class="col-md-12" style="margin-top: 32px;">
                    <label for="" class="form-label">Meta Auther, Email </label>
                    <select class="form-select" name="meta_auther_and_email" data-live-search="true" data-container="body">
                        <option value="neuro-ved, neuroved@gmail.com">Neuro Ved</option>
                    </select>
                </div>
                <div class="col-md-12" style="margin-top: 35px;">
                    <label for="" class="form-label">Meta Coverage <span class="required">*</span></label>
                    <select class="form-select" name="meta_coverage" data-live-search="true" data-container="body">
                        <option value="wordwide">Wordwide</option>
                    </select>
                </div>
                <div class="col-md-12" style="margin-top: 32px;">
                    <label for="" class="form-label">Meta Rating <span class="required">*</span></label>
                    <select class="form-select" name="meta_rating" data-live-search="true" data-container="body">
                        <option value="general">General</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <section class="panel important mb-5">
        <div class="row ">
            <div class="col-sm-9">
                <div class="container my-5 mx-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">


                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="" class="form-label">Image(Thumbnail)  </label>
                                    <input type="file" name="thumbnail_image" class="form-control">
                                    {{-- <img src="{{ asset('/').$post['thumbnail_image'] ?? '' }}" width="50px" alt="img"> --}}
                                    {{-- <img src="{{ asset('').$post['thumbnail_image'] }}" class="img-fluid" alt="img"> --}}
                                </div>


                                <div class="col-md-6">
                                    <label for="" class="form-label">Thumbnail Alt</label>
                                    <input type="text" name="thumbnail_image_alt" value="{{ $post['thumbnail_image_alt'] ?? '' }}" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="" class="form-label">Title <span class="required">*</span></label>
                                    <textarea class="form-control" name="title" rows="1" required>{{ $post['title'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label"> Short Description<span class="required">*</span></label>
                                    <textarea class="form-control" name="sort_description" rows="1" required>{{ $post['sort_description'] ?? '' }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Long Desc <span class="required">*</span></label>
                                    <textarea class="form-control" id="editor" name="long_description" rows="">{{ $post['long_description'] ?? '' }}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                  </div>

            </div>

            <div class="col-sm-3 mt-4 mb-3 px-5" style="">
                <div class="col-sm-12 mt-3 ">
                    <label for="" class="form-label">Thumbnail Image Position </label>
                    <select class="form-select" name="thumbnail_image_position" data-live-search="true" data-container="body">
                        <option value="">Full</option>
                        {{-- <option value="">Left </option>
                        <option value="">Right </option>
                        <option value="">center </option> --}}
                    </select>
                </div>
                @if ($post['page']==1)
                    {{-- I am not giving here name attribute because , i am not to change it during update! --}}
                    <div class="col-md-12" style="margin-top: 32px;">
                        <label for="" class="form-label">Select Category <span class="required">*</span></label>
                        <input type="text" value="{{ $post['category'] ?? '' }}" id="" class="form-control" readonly/>
                    </div>

                    <div class="col-md-12" style="margin-top: 35px;">
                        <label for="" class="form-label">Select Sub Category <span class="required">*</span></label>
                        <input type="text" value="{{ $post['sub_category'] ?? '' }}" id="" class="form-control" readonly/>
                    </div>
                    <input type="hidden" name="id" value="{{ $post['id'] }}">
                @else
                    <div class="col-md-12" style="margin-top: 32px;">
                        <label for="" class="form-label">Select Category <span class="required">*</span></label>
                        <select  name="categories_id" id="change-category" required>
                            <option disabled selected>Selected Category </option>
                            @forelse ($cats as $cat)
                                <option value="{{ $cat->id ?? '' }}">{{ $cat->category ?? '' }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                    <div class="col-md-12" style="margin-top: 35px;">
                        <label for="" class="form-label">Select Sub Category <span class="required">*</span></label>
                        <select class="form-select" name="sub_categories_id" id="change-category-then-subcategory" required>
                            <option value="">Select Sub Category </option>
                        </select>
                    </div>
                @endif


                <div class="col-md-12" style="margin-top: 30px;">
                    <label for="" class="form-label">Status<span class="required">*</span> </label>
                    @if ( $post['page'] == 1 && $post['status'] == 1 )
                        <select class="form-select" name="status" required >
                            <option value="1">Active</option>
                            <option value="0">Dactive</option>
                        </select>
                    @elseif ($post['page'] == 1 && $post['status'] == 0 )
                        <select class="form-select" name="status" required >
                            <option value="0">Dactive</option>
                            <option value="1">Active</option>
                        </select>
                    @else
                        <select class="form-select" name="status" required >
                            <option value="1">Active</option>
                            <option value="0">Dactive</option>
                        </select>
                    @endif

                </div>
                <div class="col-md-12" style="margin-top: 30px;">
                    <label for="" class="form-label"> Slug<span class="required">*</span></label>
                    <input type="text" name="slug" value="{{ $post['slug'] ?? ''}}" id="" class="form-control" required>
                </div>
                <div class="col-md-12" style="margin-top: 32px;">
                    <button class="btn btn-dark w-100 fw-bold" >Submit</button>
                </div>


            </div>
        </div>
    </section>
</form>


@endsection
