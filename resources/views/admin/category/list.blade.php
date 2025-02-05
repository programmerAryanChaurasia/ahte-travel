@extends('layouts.admin.layout')

@section('page-name','Category List')

@section('back-page')
<a href="{{ route('dashboard.index') }}" > Dashboard &nbsp; >  &nbsp;</a> <a href="{{ route('admin.category.index')  }}" > Create Category &nbsp; > &nbsp;</a>  List
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
                  <th scope="col" width="15%">Name</th>
                  <th scope="col" width="15%">Slug</th>
                  <th scope="col" width="50%">Description</th>
                  <th scope="col" width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($cats as $cat)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $cat->category }}</td>
                    <td>{{ $cat->slug }}</td>
                    <td>{{ $cat->description }}</td>
                    <td>
                      <span>
                          <div class="row">
                              <div class="col-sm-6">
                                  <form action="{{ route('admin.category.edit') }}" method="POST">
                                      @csrf
                                      <input type="hidden" value="{{ $cat->slug }}" name="slug">
                                      <button class="btn btn-primary" type="submit">Edit</button>
                                  </form>

                              </div>
                              <div class="col-sm-6">
                                  <form action="{{ route('admin.category.delete') }}" onsubmit="return confirm('Do you really want to Delete the record?');" method="POST">
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
