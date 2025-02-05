@extends('layouts.admin.layout')

@section('page-name','Sub Category')

@section('back-page')
<a href="{{ route('dashboard.index') }}" > Dashboard &nbsp; >  &nbsp;</a>  Create Sub Category &nbsp; > &nbsp; <a href="{{ route('admin.sub-category.list') }}" > List </a>
@endsection

@section('content')


        <section class="panel important">
            @if ($sub_categories['route']=="store")
                <form action="{{ route('admin.sub-category.store') }}" method="post">
            @else
                <form action="{{ route('admin.sub-category.update') }}" onsubmit="return confirm('Do you really want to Update the form?');" method="POST">
            @endif
                @csrf
                    <input type="hidden" name="id" value="{{ $sub_categories['id'] }}" />
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="container my-5 mx-2">
                                <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Select Category <span class="required">*</span></label>
                                        <select class="form-select" name="category" data-live-search="true" data-container="body" required>
                                            <option selected disabled>Select Category</option>
                                            @forelse ($cats as $cat)
                                                @if ($cat->category == $sub_categories['category'])
                                                    <option value="{{ $cat->id }}" selected>{{ $cat->category }}</option>
                                                @else
                                                    <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                                                @endif
                                            @empty
                                            @endforelse
                                        </select>
                                        @error('category')
                                            <samp class="validation-error" style="color: red;">{{ $message }}</samp>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label"> Sub Category <span class="required">*</span></label>
                                        <input type="text" name="sub_category" id="" value="{{ $sub_categories['sub_category'] }}"  class="form-control" required>
                                        @error('sub_category')
                                            <samp class="validation-error" style="color: red;">{{ $message }}</samp>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Description </label>
                                        <textarea class="form-control" id="" name="description" rows="1">{{ $sub_categories['description'] ?? "" }}</textarea>
                                        @error('description')
                                            <samp class="validation-error" style="color: red;">{{ $message }}</samp>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label" >Slug <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="" value="{{ $sub_categories['slug'] }}" name="slug" rows="1" required>
                                        @error('slug')
                                            <samp class="validation-error" style="color: red;">{{ $message }}</samp>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-3 px-4" style="margin-top:45px;">
                            <div class="col-sm-12 mt-3 ">
                                <label for="your-name" class="form-label">Status <span class="required">*</span></label>
                                @if ($sub_categories['route']=="store")
                                    <select class="form-select" name="status" data-live-search="true" data-container="body">
                                        <option value="1">Active </option>
                                        <option value="0">Dactive</option>
                                    </select>
                                @elseif ($sub_categories['status']=="1")
                                    <select class="form-select" name="status" data-live-search="true" data-container="body">
                                        <option value="1">Active </option>
                                        <option value="0">Dactive</option>
                                    </select>
                                @else
                                    <select class="form-select" name="status" data-live-search="true" data-container="body">
                                        <option value="0">Dactive </option>
                                        <option value="1">Active</option>
                                    </select>
                                @endif
                            </div>
                            <div class="col-md-12" style="margin-top:65px;">
                                <button type="submit" class="btn btn-dark w-100 fw-bold" >Submit</button>
                            </div>

                        </div>
                    </div>
                </form>
        </section>

@endsection
