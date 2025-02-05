@extends('layouts.frontend.layout')
{{--  ★★★★★ --}}

@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .review-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .review-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .review-rating {
            color: #ffcc00;
            font-size: 18px;
        }

        .review-date {
            font-size: 14px;
            color: #777;
        }

        .review-content {
            margin-top: 10px;
            font-size: 16px;
        }

        .review-name {
            font-weight: bold;
            margin-top: 10px;
            font-size: 18px;
        }
    </style>

    <style>
        .pagination-container {
            margin-top: 40px;
            text-align: center;
            /* Ensures the pagination is centered */
        }

        .pagination {
            display: flex;
            /* Use flexbox for horizontal layout */
            justify-content: center;
            /* Center the items horizontally */
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem;
        }

        .pagination .page-item {
            margin-left: 5px;
            /* Adds space between the pagination items */
        }

        .pagination .page-link {
            color: #007bff;
            padding: 8px 16px;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .pagination .page-link:hover {
            background-color: #007bff;
            color: white;
        }

        .pagination .disabled .page-link {
            color: #6c757d;
            pointer-events: none;
        }

        .pagination .active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
    </style>













@endsection

@section('content')

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="review-card text-center">
                            <!-- Updated placeholder image URL -->
                            <img src="https://placehold.co/150" alt="User Image">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <div class="review-date">
                                January 27, 2025, 12:30 PM
                            </div>
                            <div class="review-content">
                                This product exceeded my expectations! The quality is outstanding, and the customer service
                                was excellent.
                            </div>
                            <div class="review-name">
                                Aryan Chaurasia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-card text-center">
                            <!-- Updated placeholder image URL -->
                            <img src="https://placehold.co/150x150" alt="User Image">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <div class="review-date">
                                January 27, 2025, 12:30 PM
                            </div>
                            <div class="review-content">
                                This product exceeded my expectations! The quality is outstanding, and the customer service
                                was excellent.
                            </div>
                            <div class="review-name">
                                Aryan Chaurasia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-card text-center">
                            <!-- Updated placeholder image URL -->
                            <img src="https://placehold.co/150x150" alt="User Image">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <div class="review-date">
                                January 27, 2025, 12:30 PM
                            </div>
                            <div class="review-content">
                                This product exceeded my expectations! The quality is outstanding, and the customer service
                                was excellent.
                            </div>
                            <div class="review-name">
                                Aryan Chaurasia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-card text-center">
                            <!-- Updated placeholder image URL -->
                            <img src="https://placehold.co/150" alt="User Image">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <div class="review-date">
                                January 27, 2025, 12:30 PM
                            </div>
                            <div class="review-content">
                                This product exceeded my expectations! The quality is outstanding, and the customer service
                                was excellent.
                            </div>
                            <div class="review-name">
                                Aryan Chaurasia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-card text-center">
                            <!-- Updated placeholder image URL -->
                            <img src="https://placehold.co/150" alt="User Image">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <div class="review-date">
                                January 27, 2025, 12:30 PM
                            </div>
                            <div class="review-content">
                                This product exceeded my expectations! The quality is outstanding, and the customer service
                                was excellent.
                            </div>
                            <div class="review-name">
                                Aryan Chaurasia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-card text-center">
                            <!-- Updated placeholder image URL -->
                            <img src="https://placehold.co/150" alt="User Image">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <div class="review-date">
                                January 27, 2025, 12:30 PM
                            </div>
                            <div class="review-content">
                                This product exceeded my expectations! The quality is outstanding, and the customer service
                                was excellent.
                            </div>
                            <div class="review-name">
                                Aryan Chaurasia
                            </div>
                        </div>
                    </div>
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
                        <form  id="reviewForm" action="{{ route('frontend.reviews.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>

                            <label for="review">Message:</label>
                            <textarea id="message" name="message" required></textarea>

                            <label for="review">Your Image:</label>
                            <input type="file" id="image" name="image" required></input>

                            <br><br>
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
    $(document).ready(function () {
        // Attach a submit event listener to the form
        $('#reviewForm').on('submit', function (e) {
            e.preventDefault(); // Prevent the default form submission


            var formData = new FormData(this);

            // Send the form data via AJAX
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    // toastr.success("Review save Successfully. Your Review show with-in 24 hour.");
                    location.reload();

                    $('#reviewModal').modal('hide');
                    $('#reviewForm')[0].reset();
                },
                error: function (xhr, status, error) {
                    // Handle errors if any
                    toastr.error("{{ session('error') }}");
                }
            });
        });
    });
</script>

<script>
    // Display toast message if it exists in the session
    @if(session('success'))
        toastr.success("Review save Successfully.");
    @endif

</script>


@endsection
