<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Role</title>

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
                <li><a href="{{ URL::to('home') }}"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>View Service</strong></li>
            </ol>

            <div class="row">
                <div class="col-md-3">
                    <h2>{{ $service->service_name }}</h2>
                </div>
                <div class="col-md-6">
                    @if ($errors->any())
                        <div id="error-message" class="alert alert-danger alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
                <div class="col-md-3">
                </div>
            </div>
            <!--Main Content Start-->
            <div class="row">
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Service checklist
                        </div>
                        <div class="panel-options">
                            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered datatable" id="table-4">
                                    <thead>
                                        <tr>
                                            <th><strong>Prechecklist</strong></th>
                                            <th><strong>Actions</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($preData as $pre)
                                            <tr>
                                                <td>{{ $pre->note }}</td>
                                                <td>
                                                    <a style="cursor: pointer;"
                                                        href="{{ URL::to('/prechecklistDelete/' . $pre->id) }}"
                                                        type="button" class="btn yes-btn btn-danger tooltip-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete Checklist">
                                                        <i class="entypo-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered datatable" id="table-4">
                                    <thead>
                                        <tr>
                                            <th><strong>Postchecklist</strong></th>
                                            <th><strong>Actions</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($postData as $post)
                                            <tr>
                                                <td>{{ $post->note }}</td>
                                                <td>
                                                    <a style="cursor: pointer;" type="button"
                                                        class="btn yes-btn btn-danger tooltip-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete Checklist"
                                                        href="{{ URL::to('/postchecklistDelete/' . $post->id) }}">
                                                        <i class="entypo-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal For the Precheck-->
            <div class="modal fade" id="modal-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <div class="row" style="padding:30px;">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <h4 class="modal-title text-center">Are you sure you want to delete this checklist?
                                    </h4>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-1">
                                    @if (isset($pre))
                                        <a style="cursor: pointer;"
                                            href="{{ URL::to('/prechecklistDelete/' . $pre->id) }}" type="button"
                                            class="btn yes-btn btn-danger" href="">Yes</a>
                                    @endif
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
            <!--Modal For the Postcheck-->
            <div class="modal fade" id="modal-2">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <div class="row" style="padding:30px;">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <h4 class="modal-title text-center">Are you sure you want to delete this checklist?
                                    </h4>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-1">
                                    @if (isset($pre))
                                        <a style="cursor: pointer;" type="button" class="btn yes-btn btn-danger"
                                            href="{{ URL::to('/postchecklistDelete/' . $post->id) }}">Yes</a>
                                    @endif
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
            @include('common.footer')
        </div>
    </div>
    <!--Main Content End// -->
    <link rel="stylesheet" href="{{ url('assets/js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/selectboxit/jquery.selectBoxIt.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/icheck/skins/minimal/_all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/icheck/skins/square/_all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/icheck/skins/flat/_all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/icheck/skins/futurico/futurico.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/icheck/skins/polaris/polaris.css') }}">
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
</body>

</html>
