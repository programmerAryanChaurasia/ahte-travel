@extends('layouts.admin.layout')

@section('css')

@endsection

@section('page-name', 'Plan Your Trip List')

@section('back-page')
<a href="{{ route('dashboard.index') }}"> Dashboard &nbsp; >  &nbsp;</a>
<a href="{{ route('admin.plan-your-trips.create') }}"> Create Trip &nbsp; > &nbsp;</a> List
@endsection

@section('content')

<section class="panel important">
    <div class="container-fluid table-responsive px-5 py-3">
        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" class="datatable-thead-style" >#</th>
                    <th scope="col" class="datatable-thead-style">Name</th>
                    <th scope="col" class="datatable-thead-style">From City</th>
                    <th scope="col" class="datatable-thead-style">To City</th>
                    <th scope="col" class="datatable-thead-style">Count</th>
                    <th scope="col" class="datatable-thead-style">Phone</th>
                    <th scope="col" class="datatable-thead-style">Status</th>
                    <th scope="col" class="datatable-thead-style">Last Contact Date</th>
                    <th scope="col" class="datatable-thead-style">Future Contact Date</th>
                    <th scope="col" class="datatable-thead-style">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($planYourTrips as $trip)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $trip->name }}</td>
                    <td>{{ $trip->from_city }}</td>
                    <td>{{ $trip->to_city }}</td>
                    <td>{{ $trip->number_of_people }}</td>
                    <td>{{ $trip->phone_number }}</td>
                    <td>
                        @if($trip->status == 0)
                            <span class="status-badge bg-warning">
                                <i class="fas fa-clock"></i> Pending
                            </span>
                        @elseif($trip->status == 1)
                            <span class="status-badge bg-info">
                                <i class="fas fa-phone"></i> Contacted
                            </span>
                        @elseif($trip->status == 2)
                            <span class="status-badge bg-success">
                                <i class="fas fa-check-circle"></i> Confirmed
                            </span>
                        @endif
                    </td>
                    <td>
                        {{ $trip->last_contact_date ? \Carbon\Carbon::parse($trip->last_contact_date)->format('d-m-Y') : 'N/A' }}
                    </td>
                    <td>
                        {{ $trip->future_contact_date ? \Carbon\Carbon::parse($trip->future_contact_date)->format('d-m-Y') : 'N/A' }}
                    </td>
                    <td>
                        <div class="action-buttons">
                            <!-- Edit Button -->
                            <a href="{{ route('admin.plan-your-trips.edit', $trip->id) }}" class="btn btn-primary btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Delete Button with Modal Trigger -->
                            <button class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#deleteModal{{ $trip->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $trip->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                {{ $trip->name }}
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <b>{{ $trip->name }}</b>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <!-- The form that submits for deletion -->
                                            <form action="{{ route('admin.plan-your-trips.destroy', $trip->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="10" class="empty-state text-center">
                        No trips found
                    </td>
                </tr>
                @endforelse
            </tbody>


        </table>
    </div>
</section>
@endsection

@section('js')

@endsection
