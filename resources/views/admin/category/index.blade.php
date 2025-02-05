{{-- @dd($categories) --}}

@extends('layouts.admin.layout')

@section('page-name','Category')

@section('back-page')
<a href="{{ route('dashboard.index') }}" > Dashboard &nbsp; >  &nbsp;</a> Create Category &nbsp; > &nbsp;<a href="{{ route('admin.category.list') }}" > List </a>
@endsection

@section('content')

@section('content')

<section class="panel important">
    @if ($categories['route']=="store")
        <form action="{{ route('admin.category.store') }}" method="POST">
    @else
        <form action="{{ route('admin.category.update') }}" onsubmit="return confirm('Do you really want to Update the form?');" method="POST">
    @endif
        @csrf
        <input type="hidden" name="id" value="{{ $categories['id'] }}" />
        <div class="row ">
            <div class="col-sm-9">
                <div class="container my-4 mx-2">
                    <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row ">
                        <div class="col-md-6">
                            <label for="" class="form-label">Category <span class="required">*</span></label>
                            <input type="text" name="category" id="" value="{{ $categories['category'] }}" class="form-control" required>

                            @error('category')
                                <samp class="validation-error" style="color: red;">{{ $message }}</samp>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Description </label>
                            <textarea class="form-control" id="" value="" name="description" rows="1" required>{{ $categories['description'] }}</textarea>
                        </div>
                        <div class="col-md-6" style="margin-top: 30px;">
                            <label for="" class="form-label"> Slug<span class="required">*</span></label>
                            <input type="text" name="slug" id="slug" value="{{ $categories['slug'] }}" class="form-control" required>
                            @error('slug')
                                <samp class="validation-error">{{ $message }}</samp>
                            @enderror
                        </div>
                        <div class="col-md-6" style="margin-top: 60px;">
                            <input type="submit" value="Submit">
                            {{-- <button type="submit" class="btn btn-dark w-100 fw-bold" ></button> --}}
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-3 px-4" style="margin-top:22px;">
                <div class="col-sm-12 mt-3 ">
                    <label for="your-name" class="form-label">Status <span class="required">*</span></label>
                    @if ($categories['route']=="store")
                        <select class="form-select" name="status" data-live-search="true" data-container="body">
                            <option value="1">Active </option>
                            <option value="0">Dactive</option>
                        </select>
                    @elseif ($categories['status']=="1")
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
            </div>
        </div>
    </form>
</section>
@endsection
