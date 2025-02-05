@extends('layouts.admin.layout')

@section('page-name','Dashboard')

@section('back-page')
{{-- <a href="#" > Page1 &nbsp; >  &nbsp;</a> <a href="#" > Page2 &nbsp; > &nbsp;</a> <a href="#" > Page3 </a> --}}
@endsection

@section('content')

    <section class="panel important">

        <div class="container-fluid table-responsive px-5 py-3">
            <table class="table table-bordered table-hover">
              <thead class="thead-dark" style="background-color: black;color:#fff">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                 <tr>
                  <th scope="row">4</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
        </div>

    </section>
@endsection
