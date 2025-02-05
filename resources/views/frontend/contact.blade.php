@extends('layouts.frontend.layout')
{{--  ★★★★★ --}}

@section('style')
@endsection

@section('content')


<div class="contact-pageheader">
</div>
<!-- /.page-header-->
<!-- contact-section -->
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="contact-wrapper">
                {{-- <div id="contact-map" class="mb60"></div> --}}
                <div class="row">
                    <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12">
                        <div class="section-title">
                            <h2>Connect With'me</h2>
                            <p>If you have any questions or comments please complete the form below.We'd love to hear from you!</p>
                        </div>
                        <div class="contact-block">
                            <!-- contact-form -->
                            <form action="{{ route('frontend.contacts.store') }}" method="Post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Name</label>
                                            <input id="name" name="name" type="text" placeholder="Your Name" class="form-control" required>
                                            
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="phone"> Phone</label>
                                            <input id="phone" type="text" name="phone" placeholder="Your Contact Number" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Messages</label>
                                            <textarea class="form-control" name="message" id="textarea" rows="4" placeholder="Your Messages"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- contact-form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-info -->
<div class="space-small">
    <div class="container">
        <div class="row ">
            <!-- contact -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                <div class="contact-info">
                    <h4 class="contact-info-title">Head Office Location</h4>
                    <div class="contact-info-content">
                        <i class="fa fa-map-marker contact-info-icon"></i>
                        <p>2166 Matthews Street Arlington Heights, United State 60005</p>
                    </div>
                </div>
            </div>
            <!-- /.contact -->
            <!-- contact -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20">
                <div class="contact-info">
                    <h4 class="contact-info-title">Call Us</h4>
                    <div class="contact-info-content">
                        <i class="fa fa-phone contact-info-icon"></i>
                        <p><strong>+180-123-4567
                            <br> +180-123-8910</strong>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.contact -->
            <!-- contact -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-12 mb20 ">
                <div class="contact-info">
                    <h4 class="contact-info-title">Email Us</h4>
                    <div class="contact-info-content">
                        <i class="fa fa-envelope contact-info-icon"></i>
                        <p><strong>info@travel.com<br> support@travelair.com</strong>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.contact -->
        </div>
    </div>
</div>
@endsection

@section('js')

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&amp;callback=initMap"> </script>

<script>
    function initMap() {
        var uluru = {
            lat: 23.094197,
            lng: 72.558148
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 14,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map_marker.png'

        });
    }
    </script>

    <script>
        // Display toast message if it exists in the session
        @if(session('success'))
            toastr.success("Ahte travel team contact within 24 Hour.");
        @endif

    </script>
@endsection
