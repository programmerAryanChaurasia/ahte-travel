{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Button with Owl Carousel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet">

    <style>
        .hover-btn {
            position: relative;
            overflow: hidden;
            border: none;
            text-transform: uppercase;
            color: #FFC107;
            background-color: transparent;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 0.75rem 1.5rem;
            transition: color 0.5s ease-in-out;
            white-space: nowrap; /* Ensure text stays on one line */
            display: flex; /* Center the text horizontally */
            justify-content: center;
            align-items: center;
            height: 100%; /* Ensure the button has a uniform height */
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
            margin-bottom: 20px; /* To separate the buttons a little from the carousel border */
        }
    </style>
</head>

<body class="">

    <div class="container mt-4">
        <!-- Owl Carousel -->
        <div class="custom-carousel owl-carousel">
            <div class="item">
                <button class="btn hover-btn">Hover me 1</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Hover me 2</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Hover me 3</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Hover me 4</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Hover me 5</button>
            </div>
            <div class="item">
                <button class="btn hover-btn">Hover me 6</button>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

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

</body>

</html>
 --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyitx Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            /* Light gray background */
        }

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
</head>

<body>
    <!-- Desktop View -->
    <section class="services-section container desktop-view">
        <div class="title-row">
            <h2 class="text-center mb-4">Divisional Services</h2>
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
                            <p>Description for Finance and Accounting.</p>
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
            <h2 class="text-center mb-4">Divisional Services</h2>
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
                        <p>Description for Finance and Accounting.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
