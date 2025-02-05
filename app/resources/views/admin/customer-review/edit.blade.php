@extends('layouts.admin.layout')

@section('page-name', 'Edit Trip Plan')

@section('back-page')
<a href="{{ route('dashboard.index') }}"> Dashboard &nbsp; >  &nbsp;</a>
<a href="{{ route('admin.plan-your-trips.index') }}"> List &nbsp; > &nbsp;</a> Edit Trip
@endsection

@section('content')
    <section class="panel important">
        <div class="container-fluid px-5 py-3">
            <form action="{{ route('admin.plan-your-trips.update', $planYourTrip->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $planYourTrip->name }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="from_city">From City</label>
                            <input type="text" name="from_city" id="from_city" class="form-control" value="{{ $planYourTrip->from_city }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="to_city">To City</label>
                            <input type="text" name="to_city" id="to_city" class="form-control" value="{{ $planYourTrip->to_city }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="number_of_people">Number of People</label>
                            <input type="number" name="number_of_people" id="number_of_people" class="form-control" min="1" value="{{ $planYourTrip->number_of_people }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" maxlength="13" value="{{ $planYourTrip->phone_number }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="0" {{ $planYourTrip->status == 0 ? 'selected' : '' }}>Pending</option>
                                <option value="1" {{ $planYourTrip->status == 1 ? 'selected' : '' }}>Contacted</option>
                                <option value="2" {{ $planYourTrip->status == 2 ? 'selected' : '' }}>Confirmed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="response_after_contact">Response After Contact</label>
                            <textarea name="response_after_contact" id="response_after_contact" class="form-control">{{ $planYourTrip->response_after_contact }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="last_contact_date">Last Contact Date</label>
                            <input type="date" name="last_contact_date" id="last_contact_date" class="form-control" value="{{ $planYourTrip->last_contact_date }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="future_contact_date">Future Contact Date</label>
                            <input type="date" name="future_contact_date" id="future_contact_date" class="form-control" value="{{ $planYourTrip->future_contact_date }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="future_contact_date"></label>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
