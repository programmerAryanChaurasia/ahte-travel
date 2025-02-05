@extends('layouts.frontend.layout')


@section('style')
    <style>
        .hover-btn {
            position: relative;
            overflow: hidden;
            border: none;
            /* text-transform: uppercase; */
            color: #FFC107;
            background-color: transparent;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 0.75rem 1.5rem;
            transition: color 0.5s ease-in-out;
            white-space: nowrap;
            /* Ensure text stays on one line */
            display: flex;
            /* Center the text horizontally */
            justify-content: center;
            align-items: center;
            height: 100%;
            /* Ensure the button has a uniform height */
        }

        .hover-btn::before,
        .hover-btn::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #FFC107;
            z-index: -1;
            transition: all 0.5s ease-in-out;
        }

        .hover-btn::before {
            width: 0;
            height: 2px;
        }

        .hover-btn::after {
            width: 100%;
            height: 0;
        }

        .hover-btn:hover {
            color: #fff;
        }

        .hover-btn:hover::before {
            width: 100%;
        }

        .hover-btn:hover::after {
            height: 100%;
        }

        /* Move buttons up slightly */
        .owl-carousel .item {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 5px;
            /* To separate the buttons a little from the carousel border */
        }
    </style>
@endsection

@section('content')
    {{-- <div class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption mt-2">
                        <h1 class="page-title"> Adventure Experience</h1>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="page-header bg-light shadow-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-caption">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Page Title -->
                            <h1 class="page-title ml-2">Customer Review</h1>

                            <!-- Add Review Button -->
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal"
                                class="btn btn-primary btn-lg rounded-circle shadow d-flex align-items-center justify-content-center mr-2"
                                title="Add Review" style="width: 50px; height: 50px;">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <!-- Owl Carousel -->
        <div class="custom-carousel owl-carousel">
            <div class="item">
                <button class="btn hover-btn">Cultural</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Adventure</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Family</button>
            </div>
            {{-- <div class="item">
            <button class="btn hover-btn">Budget-Friendly</button>
        </div> --}}
            <div class="item">
                <button class="btn hover-btn">Sports</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">International</button>
            </div>
        </div>
    </div>



    <!-- /.page-header-->
    <!-- destination-section -->
    <div class="content">


        <div class="container">

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- destination-section -->
                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/about_item_1.jpg') }}" alt="">
                            <a href="#" class="desti-title">Singapore</a>
                            <div class="overlay">
                            </div>
                            <div class="text">
                                <h3 class="mb20 text-white">Singapore</h3>
                                <ul class="angle list-none">
                                    <li>4 Nights / 3 days</li>
                                    <li>3 Star hotel</li>
                                    <li>Breakfast and Dinner</li>
                                </ul>
                                <p class="price">$1599</p>
                                <a href="#" class="btn-link">Go for Singapore <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <!-- /.destination-section -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- destination-section -->
                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/about_item_2.jpg') }}" alt="">
                            <a href="#" class="desti-title">Thailand</a>
                            <div class="overlay">
                            </div>
                            <div class="text">
                                <h3 class="mb20 text-white">Thailand</h3>
                                <ul class="angle list-none">
                                    <li>5 Nights / 4 days</li>
                                    <li>3 Star hotel</li>
                                    <li>Breakfast and Dinner</li>
                                </ul>
                                <p class="price">$2599</p>
                                <a href="#" class="btn-link">Go for Thailand <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <!-- /.destination-section -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- destination-section -->
                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/about_item_3.jpg') }}" alt="">
                            <a href="#" class="desti-title">Vietnam</a>
                            <div class="overlay">
                            </div>
                            <div class="text">
                                <h3 class="mb20 text-white">Vietnam</h3>
                                <ul class="angle list-none">
                                    <li>6 Nights / 5 days</li>
                                    <li>3 Star hotel</li>
                                    <li>Breakfast and Dinner</li>
                                </ul>
                                <p class="price">$4599</p>
                                <a href="#" class="btn-link">Go for Vietnam <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                    <!-- /.destination-section -->
                </div>
                <!-- destination-section -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/about_item_4.jpg') }}" alt="">
                            <a href="#" class="desti-title">Melbourne</a>
                            <div class="overlay">
                            </div>
                            <div class="text">
                                <h3 class="mb20 text-white">Melbourne</h3>
                                <ul class="angle list-none">
                                    <li>4 Nights / 3 days</li>
                                    <li>3 Star hotel</li>
                                    <li>Breakfast and Dinner</li>
                                </ul>
                                <p class="price">$2599</p>
                                <a href="#" class="btn-link">Go for Melbourne <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.destination-section -->
                <!-- destination-section -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/about_item_1.jpg') }}" alt="">
                            <a href="#" class="desti-title">Maldives</a>
                            <div class="overlay">
                            </div>
                            <div class="text">
                                <h3 class="mb20 text-white">Maldives</h3>
                                <ul class="angle list-none">
                                    <li>8 Nights / 7 days</li>
                                    <li>3 Star hotel</li>
                                    <li>Breakfast and Dinner</li>
                                </ul>
                                <p class="price">$7000</p>
                                <a href="#" class="btn-link">Go for Maldives <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.destination-section -->
                <!-- destination-section -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/about_item_1.jpg') }}" alt="">
                            <a href="#" class="desti-title">Sri Lanka</a>
                            <div class="overlay">
                            </div>
                            <div class="text">
                                <h3 class="mb20 text-white">Sri Lanka</h3>
                                <ul class="angle list-none">
                                    <li>9 Nights / 8 days</li>
                                    <li>3 Star hotel</li>
                                    <li>Breakfast and Dinner</li>
                                </ul>
                                <p class="price">$8999</p>
                                <a href="#" class="btn-link">Go for Maldives <i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="pagination-container text-center">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                < </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">></a>
                        </li>
                    </ul>
                </div>
                <!-- /.destination-section -->
            </div>
        </div>
    </div>



    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="reviewModalLabel">Customer Review Form</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        ✖
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <form action="/submit-review" method="POST">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>

                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" required>

                            <label for="time">Time:</label>
                            <input type="time" id="time" name="time" required>

                            <label>Rating:</label>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5" required>
                                <label for="star5">★</label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4">★</label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3">★</label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2">★</label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1">★</label>
                            </div>

                            <label for="review">Review:</label>
                            <textarea id="review" name="review" required></textarea>

                            <button type="submit" class="submit-btn">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // Initialize Owl Carousel
            $(".custom-carousel").owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
@endsection
