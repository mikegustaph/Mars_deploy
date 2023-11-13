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

<body class="page-body  page-fade" data-url="http://neon.dev">

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
                <li class="active"><strong>View Dispatch</strong></li>
                <a href="{{ URL::to('createDisp') }}" type="button" style="float:right;"
                    class="btn btn-primary btn-icon icon-right">
                    View Dispatch <i class="entypo-user-add"></i>
                </a>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>View Dispatch</h2>
                </div>
                <div class="col-md-3 col-sm-5">
                    <form method="get" role="form" class="search-form-full">
                        <div class="form-group">
                            <input type="text" class="form-control" name="s" id="search-input"
                                placeholder="Search..." />
                            <i class="entypo-search"></i>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <!-- Bottom scripts (common) -->
            <script src="{{ url('assets/js/gsap/TweenMax.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap.js') }}"></script>
            <script src="{{ url('assets/js/joinable.js') }}"></script>
            <script src="{{ url('assets/js/resizeable.js') }}"></script>
            <script src="{{ url('assets/js/neon-api.js') }}"></script>
            <!-- Imported scripts on this page -->
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>
            <!-- JavaScripts initializations and stuff -->
            <script src="{{ url('assets/js/neon-custom.js') }}"></script>
            <!-- Demo Settings -->
            <script src="{{ url('assets/js/neon-demo.js') }}"></script>
            <!-- Imported styles on this page -->
            <script src="{{ url('assets/js/select2/select2.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap-tagsinput.min.js') }}"></script>
            <script src="{{ url('assets/js/typeahead.min.js') }}"></script>
            <script src="{{ url('assets/js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap-datepicker.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap-timepicker.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ url('assets/js/moment.min.js') }}"></script>
            <script src="{{ url('assets/js/daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ url('assets/js/jquery.multi-select.js') }}"></script>
            <script src="{{ url('assets/js/icheck/icheck.min.js') }}"></script>
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>
