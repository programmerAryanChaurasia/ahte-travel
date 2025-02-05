@extends('layouts.frontend.layout-post')

{{-- @dd($post) --}}
<style>

    div.nextper {
    width: 100%;
    height: auto;
    background-color: #f1f1f1;
    }

    .nextper .dropbtn {
    background-color:#17448c;
    border-radius: 5px;
    color: white;
    padding: 11px;
    font-size: 16px;
    font-weight: 900;
    border: none;
    cursor: pointer;
    }
    .nextper .dropbtn:hover{
        background-color: #0a2757e9;
        box-shadow: 5px 5px #0a2757e9;
    }
    h1{
        color:#17448c;
    }
    .sort-desc p{
        color: red;
        font-size: 0.8rem;
    }

</style>
@section('content')

{{-- Title --}}
<h1>{{ $post->title ?? '' }}</h1>

{{-- Short Description --}}
<hr style="">
<span class="sort-desc"><p><i>{{ $post->sort_description ?? '' }}</i></p></span>
<hr>
{{-- Image --}}
@if ($post->thumbnail_image != null)
    <div class="" style="margin:5px; background-color: rgba(232, 232, 226, 0.713);">
        <div class="col-sm-12">
            <img src="{{ asset('post_thumbnail_image').'/'.$post->thumbnail_image }}"   class="img-fluid" alt="">
        </div>
    </div>
@endif

{{-- Long Description --}}
{!! $post->long_description ?? '' !!}

{{-- Privious and next button --}}
<div class="nextper mt-2">
    <div class="dropbtn" style="float: left;">
        <a href="#" style="color: white; text-decoration: none;">&lt; </a>
    </div>
    <div class="dropbtn" style="float: right;">
        <a href="{{ url()->previous() }}" style="color: white; text-decoration:none;">&gt;</a>
    </div>
</div>
@endsection
