<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Dispatch</title>

    <link rel="stylesheet" href="{{ url('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-icons/entypo/css/entypo.css') }}">
    <link rel="stylesheet" href="{{ url('//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/neon-core.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/neon-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/neon-forms.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <script src="{{ url('assets/js/jquery-1.11.3.min.js') }}"></script>
</head>

<body class="page-body  page-fade" data-url="http://clix.co.tz">

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
        <!--Side bar //-->
        @include('common.sidebar')
        <!--Side bar end//-->

        <div class="main-content">
            <!-- Header Start -->
            @include('common.header')
            <!--Header End //-->
            <hr />
            <ol class="breadcrumb bc-3">
                <li><a href="index.html"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>Dispatch</strong></li>
                <a href="{{ URL::to('createDispatch') }}" type="button" style="float:right;"
                    class="btn btn-success btn-icon icon-right">
                    Add Dispatch <i class="entypo-user-add"></i>
                </a>
            </ol>

            <div class="row">
                <div class="col-md-9">
                    <h2>Dispatch</h2>
                </div>

                <div class="col-md-3"></div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <!--New Table Start -->

                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            var $table4 = jQuery("#table-4");

                            $table4.DataTable({
                                dom: 'Bfrtip',
                                buttons: [

                                ]
                            });
                        });
                    </script>

                    <table class="table table-bordered datatable" id="table-4">
                        <thead>
                            <tr>
                                <th>Created Date</th>
                                <th>Dispatch Date</th>
                                <th>Clients</th>
                                <th>Quantity</th>
                                <th>Created By</th>
                                <th>Action</th>
                                <th>Upload</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($dispatch) > 0)
                                @foreach ($dispatch as $row)
                                    <tr class="odd gradeX">
                                        <td>{{ $row->created_at }}</td>
                                        <td>{{ $row->dispatch_date }}</td>
                                        <td></td>
                                        <td>{{ $row->quantity }}</td>
                                        <td>Salmaan</td>
                                        <td>
                                            <a href="{{ url('/viewdispatch/' . $row->id) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left">
                                                <i class="entypo-pencil"></i>
                                                View
                                            </a>
                                        </td>
                                        <td>
                                            <div class="checkbox checkbox-replace">
                                                <input type="checkbox" id="chk-1">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Created Date</th>
                                <th>Dispatch Date</th>
                                <th>Clients</th>
                                <th>Quantity</th>
                                <th>Created By</th>
                                <th>Action</th>
                                <th>Upload</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>

            <!-- Imported styles on this page -->
            <link rel="stylesheet" href="{{ url('assets/js/datatables/datatables.css') }}">
            <link rel="stylesheet" href="{{ url('assets/js/select2/select2-bootstrap.css') }}">
            <link rel="stylesheet" href="{{ url('assets/js/select2/select2.css') }}">
            <!-- Bottom scripts (common) -->
            <script src="{{ url('assets/js/gsap/TweenMax.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap.js') }}"></script>
            <script src="{{ url('assets/js/joinable.js') }}"></script>
            <script src="{{ url('assets/js/resizeable.js') }}"></script>
            <script src="{{ url('assets/js/neon-api.js') }}"></script>

            <script src="{{ url('assets/js/datatables/datatables.js') }}"></script>
            <script src="{{ url('assets/js/select2/select2.min.js') }}"></script>
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>
            <!-- Imported scripts on this page -->
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>
            <!-- JavaScripts initializations and stuff -->
            <script src="{{ url('assets/js/neon-custom.js') }}"></script>
            <!-- Demo Settings -->
            <script src="{{ url('assets/js/neon-demo.js') }}"></script>
