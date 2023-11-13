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
                <li><a href="{{ url('/home') }}"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>Assign Contact Person</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-4">
                    <h2>Assign Contact Person</h2>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">

                </div>

                <div class="col-md-8">
                    @if ($errors->any())
                        <div id="error-message" class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><strong>Oohps! </strong>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('message'))
                        <div id="flash-message" class="alert alert-success alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Well done! </strong>{{ session('message') }}
                        </div>
                        <script>
                            $(document).ready(function() {
                                setTimeout(function() {
                                    $('#flash-message').fadeOut('slow');
                                    $('#error-message').fadeOut('slow');
                                }, 5000); // Adjust the timeout value (in milliseconds) as needed
                            });
                        </script>
                    @endif
                </div>
            </div>
            <!--Form Start-->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                Assign Contact Person
                            </div>

                            <div class="panel-options">

                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">

                            <form action="{{ url('/contactPerson') }}" method="POST" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-md-6">
                                        <div class="form-group clientname" id="clientname">
                                            <label for="field-1" class="col-sm-4 control-label">Contact Person</label>
                                            <div class="col-sm-7">
                                                <select name="contactPerson" class="select2" data-allow-clear="true">

                                                    <optgroup label="">
                                                        <option>Select Contact Person</option>
                                                        <option value="">John</option>
                                                        <option value="">Musa</option>
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group" style="text-align: center; padding-left:25px;">
                                            <h6>I can't found contact person? <a style="color: rgb(101, 132, 255)"
                                                    href="{{ URL::to('createContactPerson') }}"><strong>Add
                                                        new</strong>
                                                </a></h6>
                                            <!-- <label for="field-1" class="col-sm-4 control-label"> Email </label>
                                                                                                                                                        <div class="col-sm-7">
                                                                                                                                                            <input type="email" class="form-control" name="email" id="field-1"
                                                                                                                                                                placeholder="clientmail@mail.com" required>
                                                                                                                                                        </div>-->
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                </div>
                                <div class="row" style="padding-right:63px;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" id="submit-btn" style="float:right;"
                                                class="btn btn-success">
                                                Add Client <i class="entypo-user-add"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!------ Modal Here -------------->

            <div class="modal fade" id="modal-1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <div class="row" style="padding:30px;">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <h4 class="modal-title">Are you sure you want to create a New Company?</h4>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-1">
                                    <a style="cursor: pointer;" type="button" class="btn btn-danger"
                                        href="#">Yes</a>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                                <div class="col-sm-5"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
             <!--Footer-->
             @include('common.footer')
            <!--End Modal-->
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
