@extends('layouts.frontend.layout')


@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <style>
        .gallery-img {
            position: relative;
        }

        .image-text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background-color: rgba(238, 217, 217, 0.285);
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            visibility: hidden;
            /* Initially hidden */
            opacity: 0;
            transition: visibility 0.3s, opacity 0.3s;
        }

        .gallery-img:hover .image-text-overlay {
            visibility: visible;
            opacity: 1;
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
    <div class="">

        {{-- <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-caption">
                            <h1 class="page-title">Gallery   +</h1>
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
                                <h1 class="page-title ml-2">Gallery</h1>

                                <!-- Add Review Button -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#reviewModal"
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

        {{-- <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb20">
                        <div class="gallery-img position-relative">
                            <a href="{{ asset('/frontend/images/gallery_big_1.jpg') }}" class="image-link imghover"
                                title="gallery zoom image">
                                <img src="{{ asset('frontend/images/gallery_small_1.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="image-text-overlay">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni similique illo qui
                                        porro veniam dolores?</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb20">
                        <div class="gallery-img position-relative">
                            <a href="{{ asset('/frontend/images/gallery_big_2.jpg') }}" class="image-link imghover"
                                title="gallery zoom image">
                                <img src="{{ asset('frontend/images/gallery_small_2.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="image-text-overlay">
                                    <p>Image Caption 2</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb20">
                        <div class="gallery-img position-relative">
                            <a href="{{ asset('/frontend/images/gallery_big_3.jpg') }}" class="image-link imghover"
                                title="gallery zoom image">
                                <img src="{{ asset('frontend/images/gallery_small_3.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="image-text-overlay">
                                    <p>Image Caption 3</p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <!-- Add more images similarly -->
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
        </div> --}}


        <div class="content">
            <div class="container">
                <div class="row">
                    @foreach($galleries as $gallery)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb20">
                            <div class="gallery-img position-relative">
                                <a href="{{ asset('storage/' . $gallery->image) }}" class="image-link imghover" title="gallery zoom image">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->place_name }}" class="img-fluid">
                                    <div class="image-text-overlay">
                                        <p>{{ $gallery->text }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination-container text-center">
            <ul class="pagination">
                <!-- Previous Page Link -->
                <li class="page-item {{ $galleries->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $galleries->previousPageUrl() }}" tabindex="-1">&lt;</a>
                </li>

                <!-- Page Numbers -->
                @foreach($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $galleries->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Next Page Link -->
                <li class="page-item {{ $galleries->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $galleries->nextPageUrl() }}"> &gt; </a>
                </li>
            </ul>
    </div>

    </div>


    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="reviewModalLabel">Save Gallery</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        ✖
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-container">

                        <form id="reviewForm" action="{{ route('frontend.gallery.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="name">Your Name:</label>
                            <input type="text" id="name" name="your_name" required>

                            <label for="name">Image Place:</label>
                            <input type="text" id="place-name" name="place_name" required>

                            <label for="name">Phone:</label>
                            <input type="number" id="phone" name="phone" required>

                            <label for="name">Image:</label>
                            <input type="file" id="image" name="image" required>

                            <label for="review">About Image/Place:</label>
                            <textarea id="text" name="text" required></textarea>

                            <button type="submit" class="submit-btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popup-gallery.js') }}"></script>
    <script src="{{ asset('frontend/js/return-to-top.js') }}"></script>



    <script>
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response); // Log the response
                $('#reviewModal').modal('hide');
                $('#reviewForm')[0].reset();
                toastr.success(response.message);
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseJSON); // Log the error response
                var errors = xhr.responseJSON.errors;
                if (errors) {
                    for (var key in errors) {
                        toastr.error(errors[key][0]);
                    }
                } else {
                    toastr.error("An error occurred. Please try again.");
                }
            }
        });
    </script>

    <script>
        // Display toast message if it exists in the session
        @if (session('success'))
            toastr.success("Image save Successfully.");
        @endif
    </script>
@endsection
