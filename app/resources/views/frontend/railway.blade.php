@extends('layouts.frontend.layout')


@section('style')
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            /* padding: 20px; */
        }


        .container {
            /* margin-top: 50px; */
        }

        .train-card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .train-card:hover {
            transform: translateY(-10px);
        }

        .train-card .card-body {
            padding: 25px;
        }

        .train-card img {
            border-radius: 12px;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .form-control,
        .search-btn {
            border-radius: 50px;
            padding: 12px;
        }

        .search-btn {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .search-btn:hover {
            background-color: #0056b3;
        }

        .train-card .train-details {
            font-size: 14px;
            color: #6c757d;
        }

        .train-card .train-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .train-card .price {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }

        .train-card .card-footer {
            border-top: 1px solid #e9ecef;
            padding: 10px;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <style>
        /* Background Style */
        /* Container Styles */
        .form-container {
            background-color: #102a43;
            /* padding: 30px; */
            /* border-radius: 15px; */
            width: 100%;
            /* max-width: 900px; */
            margin-bottom: 10px auto;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            color: white;
            text-align: center;
        }

        /* Header */
        .form-header h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #fff;
        }

        /* Form Styles */
        .travel-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        /* Form Group */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        /* Labels */
        .form-group label {
            font-size: 14px;
            font-weight: bold;
            color: #a8b2d1;
        }

        /* Form Controls */
        .form-control {
            border: none;
            border-radius: 25px;
            padding: 12px 15px;
            font-size: 16px;
            color: #102a43;
            background: #e2e8f0;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Button Styles */
        .form-btn {
            background-color: #1c7ed6;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-btn:hover {
            background-color: #74c0fc;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }

            .form-header h2 {
                font-size: 20px;
            }

            .form-btn {
                font-size: 14px;
            }
        }
    </style>
    <div class="form-container">
        <div class="form-header mt-2 pt-2">
            <h2>Find Your Train</h2>
        </div>
        <form class="travel-form px-2">
            <div class="form-row row my-2">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <label for="from">From</label>
                    <select id="from-station" class="form-control" required>
                        <option value="">Select From Station</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <label for="from">To</label>
                    <select id="to-station" class="form-control" required>
                        <option value="">Select To Station</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <label for="people">Date</label>

                    <input type="date" class="form-control" required>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-3 col-12">
                    <label for="phone">Search Trains</label>
                    <button type="submit" class="btn search-btn w-100">Search Trains</button>
                </div>
            </div>
        </form>
    </div>


    <!-- Train Search Results Section -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Available Trains</h3>
        <div class="row">
            <!-- Example Train Card -->
            <div class="col-md-4 mb-4">
                <div class="train-card">
                    <img src="https://via.placeholder.com/500x200" alt="Train Image">
                    <div class="card-body">
                        <div class="train-title">Express Train 101</div>
                        <div class="train-details">
                            <p><strong>From:</strong> New York Central</p>
                            <p><strong>To:</strong> Chicago Union Station</p>
                            <p><strong>Departure:</strong> 10:00 AM</p>
                            <p><strong>Arrival:</strong> 2:00 PM</p>
                        </div>
                        <div class="price">$99.99</div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-primary w-100">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Add more train cards here -->
        </div>
    </div>








    <div class="space-medium">
        <div class="container">

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                    <div class="">
                        <h2>Why Book <br>IRCTC Train Ticket on AHTE Travel</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                    <div class="">
                        <p class="lead">Booking your IRCTC train ticket with AHTE Travel guarantees a seamless,
                            hassle-free experience. We offer easy booking, personalized customer support, and unbeatable
                            prices, ensuring your journey is stress-free and enjoyable.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="well-block">

                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/calendar.png') }}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Seamless Booking Experience</h4>
                                <p>Simple, user-friendly interface for quick and easy booking.</p>
                            </div>
                        </div>

                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/adventure.png') }}"
                                    alt=""></div>
                            <div class="feature-content">
                                <h4>Personalized Support</h4>
                                <p> Dedicated customer service ready to assist you at every step.</p>
                            </div>
                        </div>

                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/hotel.png') }}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4> Best Prices</h4>
                                <p>Enjoy competitive rates and exclusive discounts on train tickets. </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="well-block">
                        <div class="counter-block">
                            <h1 class="counter-numbers">689+</h1>
                            <div class="counter-content">
                                <h4>Secure Transactions</h4>
                                <p>Safe and encrypted payment gateways for worry-free bookings..</p>
                            </div>
                        </div>
                        <div class="counter-block">
                            <h1 class="counter-numbers">320+</h1>
                            <div class="counter-content">
                                <h4>Hassle-Free Cancellations</h4>
                                <p>Easy cancellation process with minimal charges..</p>
                            </div>
                        </div>
                        <div class="counter-block">
                            <h1 class="counter-numbers">60+</h1>
                            <div class="counter-content">
                                <h4>Reliable Service</h4>
                                <p>Trusted by travelers for a smooth and dependable booking experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- FAQ Section --}}
    <div class="container mt-5">
        <h2>FAQ Section</h2>

        <div class="faq-item">
            <div class="faq-question d-flex justify-content-between">
                <span>What is the purpose of this website?</span>
                <span class="toggle-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>This website is designed to provide information and answer your questions.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question d-flex justify-content-between">
                <span>How can I contact support?</span>
                <span class="toggle-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>You can contact support via the contact form on the website or through email.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question d-flex justify-content-between">
                <span>Do you offer free trials?</span>
                <span class="toggle-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>Yes, we offer a 14-day free trial for new users to explore our services.</p>
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question d-flex justify-content-between">
                <span>What payment methods do you accept?</span>
                <span class="toggle-icon">+</span>
            </div>
            <div class="faq-answer">
                <p>We accept all major credit cards, PayPal, and bank transfers.</p>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
