@extends('layouts.frontend.layout')


@section('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            /* padding: 20px; */
        }

        /* Carousel Container */
        .custom-carousel {
            margin: 0 auto;
            max-width: 90%;
        }

        /* Individual Items */
        .custom-item {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .custom-item:hover {
            transform: translateY(-5px);
        }

        /* Image Styling */
        .custom-logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #007bff;
        }

        /* Title Text Styling */
        .custom-title {
            font-size: 22px;
            font-weight: bold;
            color: #333333;
            margin-top: 10px;
            text-transform: capitalize;
        }

        /* Owl Carousel Navigation Buttons */
        .owl-nav button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
        }

        .owl-nav button:hover {
            background-color: #388E3C;
        }

        /* Owl Dots */
        .owl-dots {
            display: flex;
            justify-content: center;
            /* Center dots horizontally */
            align-items: center;
            /* Align dots vertically */
            margin-top: 15px;
        }

        .owl-dots .owl-dot {
            background: #3d0f82;
            /* Blue color */
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 5px;
            transition: background 0.3s ease;
        }

        .owl-dots .owl-dot.active {
            background: #0056b3;
            /* Darker blue for active dot */
        }
    </style>
    <style>
        .services-section {
            padding: 20px 0;
        }

        .services-list {
            background-color: #f8f9fa;
            padding: 0;
        }

        .services-list .nav-link {
            background-color: #212529;
            /* Dark background */
            color: #fff;
            border: none;
            margin-bottom: 5px;
            text-align: left;
            padding: 15px;
            /* Increased padding */
            border-radius: 0;
            width: 100%;
            display: block;
            position: relative;
            /* Needed for absolute positioned arrow */
        }

        .services-list .nav-link::after {
            content: "\f054";
            /* Font Awesome right arrow */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }

        .services-list .nav-link[aria-expanded="true"]::after {
            transform: translateY(-50%) rotate(90deg);
        }

        .services-list .nav-link.active {
            background-color: #dc3545;
            color: #fff;
        }

        .services-list .nav-link:hover {
            background-color: #495057;
            color: #fff;
            cursor: pointer;
        }

        .services-list .nav-link:hover::after {
            color: #fff;
        }

        .services-content {
            background-color: #fff;
            padding: 20px;

        }

        .learn-more-button {
            background-color: #212529;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 4px;
            cursor: pointer;

        }

        .learn-more-button:hover {
            background-color: #495057;
        }

        .title-row {
            margin-bottom: 2rem;
        }

        /* Hide desktop layout on small screens */
        @media (max-width: 767px) {
            .desktop-view {
                display: none;
            }
        }

        /* Show mobile layout on small screens */
        @media (min-width: 768px) {
            .mobile-view {
                display: none;
            }

            .services-section {
                padding: 50px 0;
            }

            .title-row {
                margin-bottom: 2rem;
            }
        }

        /* Mobile style */
        .mobile-view .accordion-button:not(.collapsed) {
            color: #fff;
            /* Button text color when open */
            background-color: #dc3545;
            /* Button background color when open */

        }

        .mobile-view .accordion-button {
            background-color: #212529;
            color: #fff;
        }

        .mobile-view .accordion-item {
            border: none;
        }

        .mobile-view .accordion-body {
            padding: 20px;
            background-color: #fff;
        }
    </style>


    {{-- below whatsapp and Btn --}}
    <style>
        /* WhatsApp Button */
        .floating-btn-whatsapp {
            background: #25d366;
            color: white;
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 0;
            height: 0;
            padding: 35px;
            text-decoration: none;
            border-radius: 50%;
            animation-name: floating-pulse;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
            z-index: 1000;
        }

        /* Phone Button */
        .floating-btn-phone {
            background: #007bff;
            color: white;
            position: fixed;
            bottom: 100px; /* Adjust this value to avoid overlap */
            right: 20px;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 0;
            height: 0;
            padding: 35px;
            text-decoration: none;
            border-radius: 50%;
            animation-name: floating-pulse;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
            z-index: 1000;
        }

        /* Pulse Animation */
        @keyframes floating-pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
            }
            80% {
                box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
            }
        }

        /* Border Animation for WhatsApp */
        .floating-btn-whatsapp::before {
            content: "";
            position: absolute;
            border-radius: 50%;
            padding: 25px;
            border: 5px solid #25d366;
            opacity: 0.75;
            animation-name: floating-pulse-border;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
        }

        /* Border Animation for Phone */
        .floating-btn-phone::before {
            content: "";
            position: absolute;
            border-radius: 50%;
            padding: 25px;
            border: 5px solid #007bff;
            opacity: 0.75;
            animation-name: floating-pulse-border;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
        }

        /* Border Animation Keyframes */
        @keyframes floating-pulse-border {
            0% {
                padding: 25px;
                opacity: 0.75;
            }
            75% {
                padding: 50px;
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }

        /* Responsive Styles for Mobile Devices */
        @media only screen and (max-width: 768px) {
            .floating-btn-whatsapp,
            .floating-btn-phone {
                font-size: 30px; /* Smaller font size */
                padding: 25px; /* Smaller padding */
                bottom: 15px; /* Adjust position for smaller screens */
            }

            .floating-btn-phone {
                bottom: 80px; /* Adjust position for smaller screens */
            }

            /* Adjust border animation for smaller buttons */
            .floating-btn-whatsapp::before,
            .floating-btn-phone::before {
                padding: 15px; /* Smaller padding for border animation */
            }

            @keyframes floating-pulse-border {
                0% {
                    padding: 15px;
                    opacity: 0.75;
                }
                75% {
                    padding: 30px;
                    opacity: 0;
                }
                100% {
                    opacity: 0;
                }
            }
        }
    </style>
@endsection

@section('content')
    @include('layouts.frontend.slider')



    @include('layouts.frontend.homepage-enquiry-form')

    <div class="space-medium">
        <div class="container">

            <div class="row ">
                <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                    <div class="tour-img">
                        <a href="#" class="imghover"> <img
                                src="{{ asset('frontend/images/logo/international2.jpeg') }}" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                    <div class="tour-block">
                        <div class="tour-content">
                            <h2 class="mb30"><a href="#" class="title">International Tour</a></h2>
                            <p class="mb30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur id qui quod
                                alias ratione illo soluta quidem inventore totam molestias voluptate, explicabo eligendi vel
                                reprehenderit..</p>
                            <a href="#" class="btn-link">Go For International Tour<i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb40">
                    <div class="tour-block">
                        <div class="tour-content">
                            <h2 class="mb30"><a href="#" class="title">Adventure Tour</a></h2>
                            <p class="mb30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur id qui quod
                                alias ratione illo soluta quidem inventore totam molestias voluptate, explicabo eligendi vel
                                reprehenderit..</p>
                            <a href="#" class="btn-link">Go For Adventure Tour<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb40">
                    <div class="tour-img">
                        <a href="#" class="imghover"> <img src="{{ asset('frontend/images/logo/adventure.jpeg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 offset-md-1 col-md-4 col-sm-12 col-12 mb20">
                    <div class="tour-img">
                        <a href="#" class="imghover"> <img src="{{ asset('frontend/images/logo/domestic.jpeg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-md-1 col-md-5 col-sm-12 col-12 mb20">
                    <div class="tour-block">
                        <div class="tour-content">
                            <h2 class="mb30"><a href="#" class="title">Domestic Tour</a></h2>
                            <p class="mb30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur id qui quod
                                alias ratione illo soluta quidem inventore totam molestias voluptate, explicabo eligendi vel
                                reprehenderit..</p>
                            <a href="#" class="btn-link">Go For Domestic Tour<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="space-medium">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="section-title">
                        <h2>Top Destinations</h2>
                    </div>
                </div>

            </div>
            <div class="row custom-carousel-for-destinations owl-carousel">
                <div class="custom-item">


                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/destination_1.jpg') }}" alt="">
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

                </div>
                <div class="custom-item">


                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/destination_3.jpg') }}" alt="">
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


                </div>
                <div class="custom-item">


                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/destination_2.jpg') }}" alt="">
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


                </div>
                <div class="custom-item">

                    <div class="destination-block">
                        <div class="desti-img">
                            <img src="{{ asset('frontend/images/destination_4.jpg') }}" alt="">
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







            </div>
        </div>
    </div>


    <div class="space-medium">
        <div class="container">

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb60">
                    <div class="">
                        <h2>We are <br> Travel Agency</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 offset-md-1 col-md-8 col-sm-12 col-12 mb60">
                    <div class="">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolorum labore
                            ea nemo delectus perspiciatis magni eum quaerat beatae esse. Voluptate, tenetur unde.
                            Distinctio, nesciunt odit quis hic ea recusandae?</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="well-block">

                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/calendar.png') }}"
                                    alt=""></div>
                            <div class="feature-content">
                                <h4>Everything’s on Schedule</h4>
                                <p>Cras porttitor tortor erateget accumsan is feltumsit.</p>
                            </div>
                        </div>

                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/adventure.png') }}"
                                    alt=""></div>
                            <div class="feature-content">
                                <h4>Destination Variety</h4>
                                <p>Pellentesque imperdiet esmpus finibusse euismunc.</p>
                            </div>
                        </div>

                        <div class="feature-left">
                            <div class="feature-icon"><img src="{{ asset('frontend/images/hotel.png') }}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4>Comfortable Housing</h4>
                                <p>Vestiulum sodales tempudin one erlctus iedate. </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="well-block">
                        <div class="counter-block">
                            <h1 class="counter-numbers">689+</h1>
                            <div class="counter-content">
                                <h4>Tours</h4>
                                <p>Cras porttitor tortor erateget taccumsan.</p>
                            </div>
                        </div>
                        <div class="counter-block">
                            <h1 class="counter-numbers">320+</h1>
                            <div class="counter-content">
                                <h4>Destinations</h4>
                                <p>Pellentesque luctus felisnon nib its consecteuis.</p>
                            </div>
                        </div>
                        <div class="counter-block">
                            <h1 class="counter-numbers">60+</h1>
                            <div class="counter-content">
                                <h4>Countries</h4>
                                <p>Sed gravida eleequenec fringilla dolonteger.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.frontend.faq')

    {{-- ------------------------------------------------------Services--------------------------------------------------------- --}}
    <div class="space-medium service-wrapper">
        <!-- Desktop View -->
        <section class="services-section container desktop-view">
            <div class="title-row">
                <h2 class="text-center"> Services</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services-list">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#finance-and-accounting" data-bs-toggle="tab">Finance and
                                    Accounting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#it" data-bs-toggle="tab">IT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#data-management" data-bs-toggle="tab">Data Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#insight360" data-bs-toggle="tab">Insight360 Industry
                                    Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#av-solutions" data-bs-toggle="tab">AV Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#healthcare-solutions" data-bs-toggle="tab">Healthcare
                                    Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#virtual-assistant" data-bs-toggle="tab">Virtual Assistant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#business-transformation" data-bs-toggle="tab">Business
                                    Transformation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#human-resources" data-bs-toggle="tab">Human Resources
                                    Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#cfo-services" data-bs-toggle="tab">CFO Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="services-content">
                        <div class="tab-content">
                            <div class="tab-pane fade " id="finance-and-accounting">
                                <h3>Finance and Accounting</h3>
                                <p>
                                    <img src="{{ asset('/frontend/images/gallery_big_1.jpg') }}" alt=""
                                        style="width:100px;height:100px;">

                                    Description for Finance and Accounting. Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Nemo animi possimus illo at dolorum nulla quo maiores,
                                    unde fuga modi, non rerum. Non obcaecati culpa quia dolore delectus sit enim provident
                                    qui? Temporibus deserunt sint exercitationem, quo facilis, eos nostrum nemo molestiae
                                    quia magni quas porro quidem quisquam enim natus necessitatibus quam dolores possimus
                                    voluptas ullam fuga laboriosam. Delectus similique mollitia quod eius alias dolores,
                                    voluptatem eaque adipisci ipsa deserunt consectetur assumenda ratione accusantium, sit,
                                    illo ullam deleniti! Eveniet temporibus, fuga vitae, omnis veniam rem necessitatibus
                                    dicta deleniti esse enim ducimus? Deleniti expedita sequi unde temporibus impedit?
                                    Commodi, possimus eaque.
                                </p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="it">
                                <h3>IT</h3>
                                <p>Description for IT services.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="data-management">
                                <h3>Data Management</h3>
                                <p>Reliance on technology to optimize business functions and automate timely data generation
                                    for decision-making has resulted in vast quantities of complex data.</p>
                                <p>Our data management team can help turn your data into organized, manageable reports in
                                    usable formats, allowing for actionable insights. We can assess your needs and propose
                                    solutions for data entry, data migration, data cleaning, and data storage on safe and
                                    secure servers.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="insight360">
                                <h3>Insight360 Industry Solutions</h3>
                                <p>Description for Insight360 Industry Solutions.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="av-solutions">
                                <h3>AV Solutions</h3>
                                <p>Description for AV Solutions.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="healthcare-solutions">
                                <h3>Healthcare Solutions</h3>
                                <p>Description for Healthcare Solutions.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="virtual-assistant">
                                <h3>Virtual Assistant</h3>
                                <p>Description for Virtual Assistant.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="business-transformation">
                                <h3>Business Transformation</h3>
                                <p>Description for Business Transformation services.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade show active" id="human-resources">
                                <h3>Human Resources Solutions</h3>
                                <p>With our wealth of experience, specialized industry knowledge, and cutting-edge
                                    technology, we provide top-tier recruitment services and solutions tailored to
                                    streamline your hiring endeavors.</p>
                                <p>Unlock the potential of your business with our expert-led hiring processes, ensuring
                                    access to the finest talent, skills, and strategic insights aligned perfectly with your
                                    growth objectives. From crafting policies to conducting precise gap analyses, designing
                                    compelling job descriptions to meticulous employee document reviews, we've got you
                                    covered every step of the way.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                            <div class="tab-pane fade" id="cfo-services">
                                <h3>CFO Services</h3>
                                <p>Description for CFO Services.</p>
                                <button class="learn-more-button">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mobile view -->
        <section class="services-section container mobile-view">
            <div class="title-row">
                <h2 class="text-center"> Services</h2>
            </div>
            <div class="accordion services-list" id="servicesAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFinance">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFinance" aria-expanded="false" aria-controls="collapseFinance">
                            Finance and Accounting
                        </button>
                    </h2>
                    <div id="collapseFinance" class="accordion-collapse collapse" aria-labelledby="headingFinance"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Finance and Accounting</h3>
                            <p>Description for Finance and Accounting. Lorem ipsum dolor sit, amet consectetur adipisicing
                                elit. Voluptatibus suscipit perspiciatis, mollitia consequuntur optio debitis repudiandae
                                nobis iste, neque eligendi animi ducimus omnis maxime eos. Incidunt officia deserunt, fugit,
                                atque optio velit doloribus aliquam placeat, facilis ex quos voluptate totam fugiat tempora?
                                Quam voluptatem tenetur tempora soluta accusantium iure, facilis, praesentium non numquam
                                esse maiores. Delectus labore harum, ducimus deserunt voluptatum at nam eum maiores
                                excepturi similique, neque voluptates consectetur sapiente. Quo sequi itaque est voluptatem,
                                quaerat voluptates qui ab vitae rerum nihil totam, doloremque incidunt maxime iste
                                cupiditate eum. Rem nisi ad possimus? Ipsum suscipit corporis sint harum fugiat?</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingIT">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseIT" aria-expanded="false" aria-controls="collapseIT">
                            IT
                        </button>
                    </h2>
                    <div id="collapseIT" class="accordion-collapse collapse" aria-labelledby="headingIT"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>IT</h3>
                            <p>Description for IT services.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingData">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseData" aria-expanded="false" aria-controls="collapseData">
                            Data Management
                        </button>
                    </h2>
                    <div id="collapseData" class="accordion-collapse collapse" aria-labelledby="headingData"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Data Management</h3>
                            <p>Reliance on technology to optimize business functions and automate timely data generation for
                                decision-making has resulted in vast quantities of complex data.</p>
                            <p>Our data management team can help turn your data into organized, manageable reports in usable
                                formats, allowing for actionable insights. We can assess your needs and propose solutions
                                for data entry, data migration, data cleaning, and data storage on safe and secure servers.
                            </p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingInsight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseInsight" aria-expanded="false" aria-controls="collapseInsight">
                            Insight360 Industry Solutions
                        </button>
                    </h2>
                    <div id="collapseInsight" class="accordion-collapse collapse" aria-labelledby="headingInsight"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Insight360 Industry Solutions</h3>
                            <p>Description for Insight360 Industry Solutions.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAV">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseAV" aria-expanded="false" aria-controls="collapseAV">
                            AV Solutions
                        </button>
                    </h2>
                    <div id="collapseAV" class="accordion-collapse collapse" aria-labelledby="headingAV"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>AV Solutions</h3>
                            <p>Description for AV Solutions.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingHealthcare">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseHealthcare" aria-expanded="false"
                            aria-controls="collapseHealthcare">
                            Healthcare Solutions
                        </button>
                    </h2>
                    <div id="collapseHealthcare" class="accordion-collapse collapse" aria-labelledby="headingHealthcare"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Healthcare Solutions</h3>
                            <p>Description for Healthcare Solutions.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingVirtual">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseVirtual" aria-expanded="false" aria-controls="collapseVirtual">
                            Virtual Assistant
                        </button>
                    </h2>
                    <div id="collapseVirtual" class="accordion-collapse collapse" aria-labelledby="headingVirtual"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Virtual Assistant</h3>
                            <p>Description for Virtual Assistant.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBusiness">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseBusiness" aria-expanded="false" aria-controls="collapseBusiness">
                            Business Transformation
                        </button>
                    </h2>
                    <div id="collapseBusiness" class="accordion-collapse collapse" aria-labelledby="headingBusiness"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Business Transformation</h3>
                            <p>Description for Business Transformation services.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingHR">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseHR" aria-expanded="false" aria-controls="collapseHR">
                            Human Resources Solutions
                        </button>
                    </h2>
                    <div id="collapseHR" class="accordion-collapse collapse" aria-labelledby="headingHR"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>Human Resources Solutions</h3>
                            <p>With our wealth of experience, specialized industry knowledge, and cutting-edge technology,
                                we provide top-tier recruitment services and solutions tailored to streamline your hiring
                                endeavors.</p>
                            <p>Unlock the potential of your business with our expert-led hiring processes, ensuring access
                                to the finest talent, skills, and strategic insights aligned perfectly with your growth
                                objectives. From crafting policies to conducting precise gap analyses, designing compelling
                                job descriptions to meticulous employee document reviews, we've got you covered every step
                                of the way.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCFO">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCFO" aria-expanded="false" aria-controls="collapseCFO">
                            CFO Services
                        </button>
                    </h2>
                    <div id="collapseCFO" class="accordion-collapse collapse" aria-labelledby="headingCFO"
                        data-bs-parent="#servicesAccordion">
                        <div class="accordion-body">
                            <h3>CFO Services</h3>
                            <p>Description for CFO Services.</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb60">
                    <div class="testimonial-head">
                        <div class="quote-icon">
                            <img src="{{ asset('frontend/images/left_quote.png') }}" alt="">
                        </div>
                        <h2 class="mb40">What Our Customers Say About Our Tours</h2>
                        <a href="#" class="btn-link">Read All Reviews <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 offset-md-1 col-md-6 col-sm-12 col-12 mb60">
                    <div class="testimonial-carousel">
                        <div class="owl-carousel owl-theme testimonial-owl">

                            <div class="item">
                                <div class="testimonial-block">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">“Nam aclorem atsem vulputate euismodulla nonlacinia
                                            augueauriset venenatis maurised consequat quis exa plarliquam”</p>
                                        <span class="testi-meta"><strong>- Sarah Arnold</strong> (Our Tourist)</span>
                                        <div class="testi-arrow"></div>
                                    </div>
                                    <div class="testi-img">
                                        <img src="{{ asset('frontend/images/testi_img_1.jpg') }}" alt=""
                                            class="rounded-circle">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-block">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">“Proin dictum justo at finibus consectetur Proin odio
                                            odio molestie qui commodo sit amet euismod dictum ligula”</p>
                                        <span class="testi-meta"><strong>- Maria Young</strong> (Our Tourist)</span>
                                        <div class="testi-arrow"></div>
                                    </div>
                                    <div class="testi-img">
                                        <img src="{{ asset('frontend/images/testi_img_2.jpg') }}" alt=""
                                            class="rounded-circle">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonial-block">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">“Crasin leo arcuiquamnec elementum erossed tincidunt
                                            dolroin tristiquecongue Inaex pharetra euismod duieget”</p>
                                        <span class="testi-meta"><strong>- Helena Lehoux</strong> (Our Tourist)</span>
                                        <div class="testi-arrow"></div>
                                    </div>
                                    <div class="testi-img">
                                        <img src="{{ asset('frontend/images/testi_img_3.jpg') }}" alt=""
                                            class="rounded-circle">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <a href="https://wa.me/6397829798?text=Welcome%20to%20your%20Ahte%20Travel" class="floating-btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- Phone Button -->
    <a href="tel:+916392829798" class="floating-btn-phone">
        <i class="fas fa-phone"></i>
    </a>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            const owl = $(".custom-carousel");

            // Initialize Owl Carousel
            owl.owlCarousel({
                loop: true,
                margin: 20,
                // nav: false, // Disable default nav
                dots: true,
                autoplay: true,
                autoplayTimeout: 1000,
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

    <script>
        $(document).ready(function() {
            const owl = $(".custom-carousel-for-destinations");

            // Initialize Owl Carousel
            owl.owlCarousel({
                loop: true,
                margin: 20,
                // nav: false, // Disable default nav
                dots: true,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
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
