@extends('layouts.admin.layout')

@section('page-name','Sub Category List')

@section('back-page')
<a href="{{ route('dashboard.index') }}" > Dashboard &nbsp; >  &nbsp;</a> <a href="{{ route('admin.sub-category.index') }}" > Create Sub Category &nbsp; > &nbsp;</a> List

@endsection

@section('content')

<section class="panel important">

    <div class="container-fluid table-responsive px-5 py-3">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered table-hover">
          <thead class="thead-dark" style="background-color: black;color:#fff">
            <tr>
              <th scope="col" width="5%">#</th>
              <th scope="col" width="15%">Sub Category</th>
              <th scope="col" width="15%">Category</th>
              <th scope="col" width="10%">Slug</th>
              <th scope="col" width="40%">Description</th>
              <th scope="col" width="15%">Action</th>{{--  --}}
            </tr>
          </thead>
          <tbody>
            @forelse ($sub_cats as $cat)
            <tr>
                <th scope="row">1</th>
                <td>{{ $cat->sub_category }}</td>
                <td>{{ $cat->category }}</td>
                <td>{{ $cat->slug }}</td>
                <td>{{ $cat->description }}</td>
                <td>
                  <span>
                      <div class="row">
                          <div class="col-sm-6">
                              <form action="{{ route('admin.sub-category.edit') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $cat->slug }}" name="slug">
                                  <button class="btn btn-primary" type="submit">Edit</button>
                              </form>

                          </div>
                          <div class="col-sm-6">
                              <form action="{{ route('admin.sub-category.delete') }}" onsubmit="return confirm('Do you really want to Delete the record?');" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $cat->slug }}" name="slug">
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
