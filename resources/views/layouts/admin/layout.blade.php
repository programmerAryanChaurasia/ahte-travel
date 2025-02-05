@include('layouts.admin.head')

<body>
    @include('layouts.admin.header')


    @include('layouts.admin.sidebar')

    <main role="main">

        <section class="panel important">

            <h2 style="float: left;">
                <li>@yield('page-name')</li>
            </h2>
            <span style="float: right; margin-top:20px;" class="p-3"> @yield('back-page') </span>

        </section>

        @yield('content')

    </main>


    {{-- jquery --}}
    <script src="{{ asset('vender/jquery-3.7.1.min.js') }}"></script>

    {{-- Data table --}}






    {{-- CK Editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/super-build/ckeditor.js"></script>
    <script src="{{ asset('admins/vender/ckeditor.js') }}"></script>

    <script>
        $(document).ready(function() {

            $("#change-category").change(function() {

                var cat_id = $(this).val();



                $.ajax({
                    url: '/admin/post/get-sub-category',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        cat_id: cat_id
                    },
                    success: function(response) {
                        // Handle success (e.g., update UI, close modal, etc.)

                        $("#change-category-then-subcategory").empty();
                        $.each(response, function(key, value) {
                            // console.log("key = "+key,"value = "+value.id);
                            $("#change-category-then-subcategory").append(
                                '<option value="' + value.id + '">' + value
                                .sub_category + '</option>')

                        });

                        $.each(response, function(key, value) {
                            console.log("key2 = " + key, "value = " + value
                                .sub_category);

                        });
                        // console.log(response);
                    },
                    error: function(error) {
                        // Handle error (e.g., display error message)
                        console.log(error);
                    }
                });

            });

        });
    </script>


    @yield('js')

    {{-- Data Table --}}

<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    className: 'btn btn-copy',
                    text: '<i class="fas fa-copy"></i> Copy'
                },
                {
                    extend: 'excel',
                    className: 'btn btn-excel',
                    text: '<i class="fas fa-file-excel"></i> Excel'
                },
                {
                    extend: 'csv',
                    className: 'btn btn-csv',
                    text: '<i class="fas fa-file-csv"></i> CSV'
                },
                {
                    extend: 'pdf',
                    className: 'btn btn-pdf',
                    text: '<i class="fas fa-file-pdf"></i> PDF'
                },
                {
                    extend: 'print',
                    className: 'btn btn-print',
                    text: '<i class="fas fa-print"></i> Print'
                }
            ]
        });
    });
</script>
</body>

</html>
