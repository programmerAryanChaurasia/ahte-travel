<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @include('layouts.admin.meta_tag') --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('admins/vender/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/css/custom.css') }}">

    {{-- Data table --}}
    <link href="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Add Font Awesome for icons -->

    <style>
        /* Custom Button Styles */
        .btn-copy {
            background-color: #6c757d !important;
            color: #fff !important;
        }

        .btn-copy:hover {
            background-color: #5a6268 !important;
        }

        .btn-excel {
            background-color: #28a745 !important;
            color: #fff !important;
        }

        .btn-excel:hover {
            background-color: #218838 !important;
        }

        .btn-csv {
            background-color: #17a2b8 !important;
            color: #fff !important;
        }

        .btn-csv:hover {
            background-color: #138496 !important;
        }

        .btn-pdf {
            background-color: #dc3545 !important;
            color: #fff !important;
        }

        .btn-pdf:hover {
            background-color: #c82333 !important;
        }

        .btn-print {
            background-color: #ffc107 !important;
            color: #000 !important;
        }

        .btn-print:hover {
            background-color: #e0a800 !important;
        }
    </style>
    <style>
        .datatable-thead-style {
            background: linear-gradient(45deg, #4e73df, #224abe);
            color: #fff;
            padding: 15px;
            text-align: center;
        }
    </style>

    <style>
        /* Table row hover effect */
        tbody tr {
            transition: background-color 0.3s ease;
        }

        tbody tr:hover {
            background-color: #f8f9fa;
            /* Light gray background on hover */
        }

        /* Alternating row colors */
        tbody tr:nth-child(even) {
            background-color: #f4f6f9;
            /* Light gray for even rows */
        }

        /* Padding and alignment for table cells */
        tbody td,
        tbody th {
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            /* Center content vertically */
        }

        /* Status badges */
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
        }

        .status-badge.bg-warning {
            background-color: #ffc107;
            /* Yellow for Pending */
            color: #000;
        }

        .status-badge.bg-info {
            background-color: #17a2b8;
            /* Blue for Contacted */
            color: #fff;
        }

        .status-badge.bg-success {
            background-color: #28a745;
            /* Green for Confirmed */
            color: #fff;
        }

        /* Action buttons */
        .action-buttons .btn {
            padding: 6px 12px;
            font-size: 14px;
            transition: transform 0.2s ease;
        }

        .action-buttons .btn:hover {
            transform: scale(1.1);
        }

        /* Empty state message */
        .empty-state {
            padding: 20px;
            font-size: 16px;
            color: #6c757d;
            /* Muted color for empty state */
        }
    </style>

    @yield('css')



</head>
