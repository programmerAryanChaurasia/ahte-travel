<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>




<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/menumaker.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('frontend/js/sticky-header.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/multiple-carousel.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/js/date.js') }}"></script>
{{-- <script src="{{ asset('frontend/js/return-to-top.js') }}"></script> --}}
{{-- for modal --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


{{-- FAQ --}}
<script>
    $(document).ready(function() {
        $(".faq-question").click(function() {
            var icon = $(this).find(".toggle-icon");
            var answer = $(this).next(".faq-answer");

            // Toggle the answer visibility and icon
            answer.slideToggle();
            icon.text(icon.text() === "+" ? "-" : "+");
        });
    });
</script>


{{-- Toast Message --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": "5000",
        "positionClass": "toast-top-right"
    };
</script>
