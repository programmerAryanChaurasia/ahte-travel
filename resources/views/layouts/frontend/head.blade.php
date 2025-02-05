<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Travelair Agency HTML</title>

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
    <!-- owl-carousel -->
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.css') }}" rel="stylesheet">
    <!-- jquery ui  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <!-- FontAwesome CSS -->
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    {{-- Toast Message --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @yield('style')


    {{-- FAQ Style --}}
    <style>
        .faq-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .faq-answer {
            display: none;
            margin-top: 10px;
        }

        .faq-question {
            cursor: pointer;
        }

        .faq-question:hover {
            color: #007bff;
        }
    </style>


    {{-- Review Model --}}
    <style>
        .form-container {
            /* max-width: 500px; */
            width: 100%;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #007bff;
            transition: 0.3s;
        }

        .form-container:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-container label {
            font-weight: 500;
            margin-bottom: 6px;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        .form-container input:focus,
        .form-container textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        .form-container textarea {
            height: 100px;
            resize: none;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Star Rating */
        .rating {
            display: flex;
            justify-content: center;
            flex-direction: row-reverse;
            margin-bottom: 15px;
        }

        .rating input {
            display: none;
        }

        .rating label {
            font-size: 28px;
            color: #ccc;
            cursor: pointer;
            transition: 0.3s;
        }

        .rating label:hover,
        .rating label:hover~label,
        .rating input:checked~label {
            color: #ffcc00;
            transform: scale(1.1);
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }

            .rating label {
                font-size: 24px;
            }
        }
    </style>

</head>
