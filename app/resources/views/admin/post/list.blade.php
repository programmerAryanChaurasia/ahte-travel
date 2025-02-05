@extends('layouts.admin.layout')

@section('page-name','Post List')

@section('back-page')
<a href="#" > Page1 &nbsp; >  &nbsp;</a> <a href="#" > Page2 &nbsp; > &nbsp;</a> <a href="#" > Page3 </a>
@endsection

@section('content')

    <section class="panel important mb-5">

        <div class="container-fluid table-responsive px-5 py-3">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-hover">
              <thead class="thead-dark" style="background-color: black;color:#fff">
                <tr>
                    <th scope="col" >#</th>
                    <th scope="col">Title</th>
                    <th scope="col" >Category</th>
                    <th scope="col" >Sub Category</th>
                    <th scope="col" >Sub Category Slug</th>
                    <th scope="col" >Short Description</th>
                    <th scope="col" >Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($posts as $post)
                <tr>
                    <th scope="row">1</th>
                    <td> {{ $post->title_tag ?? ''}}</td>
                    <td>{{ $post->category ?? ''}}</td>
                    <td>{{ $post->sub_category ?? '' }}</td>
                    <td>{{ $post->sub_category_slug  ?? '' }}</td>
                    <td>{{ $post->sort_description ?? ''}}</td>
                    <td>
                        <span>
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action="{{ route('admin.post.edit') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $post->id }}" name="id">
                                        <button class="btn btn-primary" type="submit">Edit</button>
                                    </form>

                                </div>
                                <div class="col-sm-6">
                                    <form action="{{ route('admin.post.delete') }}" onsubmit="return confirm('Do you really want to Delete the record?');" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $post->id }}" name="id">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </span>
                    </td>
                  </tr>
                @empty
                @endforelse

              </tbody>
            </table>
        </div>

    </section>
@endsection
