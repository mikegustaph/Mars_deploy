<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Contact Person</title>

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
                <li><a href="{{ URL::to('home') }}"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>Policies</strong></li>
                <a href="{{ URL::to('/createnewpolicy') }}" type="button" style="float:right;"
                    class="btn btn-primary btn-icon icon-right">
                    Add Policy<i class="entypo-user-add"></i>
                </a>
            </ol>

            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Policies</h2>
                </div>

                <div class="col-md-3 col-sm-5"></div>
            </div>

            <!--Main Content-->
            <div class="row">
                <div class="col-md-12">
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
                                <th>Policies Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($policies as $row)
                                <tr>
                                    <td>{{ $row->policy_name }}</td>
                                    <!-- onclick="openPdf('')" -->
                                    <td>
                                        <a href="{{ Storage::url('public/files/' . $row->file) }}"
                                            class="btn btn-default btn-sm btn-icon icon-left" target="_blank">
                                            <i class="entypo-newspaper"></i>
                                            View
                                        </a>
                                        <a href="{{ Storage::url('public/files/' . $row->file) }}"
                                            class="btn btn-primary btn-sm btn-icon icon-left" download>
                                            <i class="entypo-download"></i>
                                            Download
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Policies Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
            @include('common.footer')

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


            <!-- Imported scripts on this page -->
            <script src="{{ url('assets/js/datatables/datatables.js') }}"></script>
            <script src="{{ url('assets/js/select2/select2.min.js') }}"></script>
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>


            <!-- JavaScripts initializations and stuff -->
            <script src="{{ url('assets/js/neon-custom.js') }}"></script>


            <!-- Demo Settings -->
            <script src="{{ url('assets/js/neon-demo.js') }}"></script>
