<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Employee Profile</title>

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
                <li class="active"><strong>Profile</strong></li>
            </ol>
            <hr />
            <div class="profile-env">
                <header class="row">
                    <div class="col-sm-2">
                        <a href="#" class="profile-picture">
                            <img src="{{ url('assets/images/profile-picture.png') }}"
                                class="img-responsive img-circle" />
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <ul class="profile-info-sections">
                            <li>
                                <div class="profile-name">
                                    <strong>
                                        <a href="#">{{ $user->first_name ?? null }}</a>
                                        <a href="#" class="user-status is-online tooltip-primary"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
                                        <!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->
                                    </strong>
                                    <span><a href="#">{{ $user->position ?? null }}</a></span>
                                </div>
                            </li>
                            <li>

                            </li>
                            <li>
                                <div class="profile-stat">
                                    <h3>108</h3>
                                    <span><a href="#">Tasks</a></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">

                    </div>
                </header>

                <section class="profile-info-tabs">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-6">
                            <ul class="user-details">
                                <li>
                                    <a href="#">
                                        <i class="entypo-location"></i>
                                        Prishtina
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-suitcase"></i>
                                        Works as <span>{{ $user->position ?? null }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-calendar"></i>
                                        16 October
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-sm-offset-2 col-sm-6">
                            <ul class="user-details">
                                <li>
                                    <a href="#">
                                        <i class="entypo-mail"></i>
                                        {{ $user->email ?? null }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-phone"></i>
                                        {{ $user->phone ?? null }}
                                    </a>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!-- user Settings -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title" style="text-align: left;">
                                User Details
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action=" " method="POST" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">CV</label>
                                            <div class="col-sm-8">
                                                <a type="button" id="" class="btn btn-primary">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Constract</label>
                                            <div class="col-sm-8">
                                                <a type="button" id="" class="btn btn-primary">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Offer letter</label>
                                            <div class="col-sm-4">
                                                <a type="button" id="" class="btn btn-primary">
                                                    View
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Joining Date
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control"
                                                    value="{{ $user->joining_date ?? null }}" name="footer"
                                                    id="field" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> TIN Number</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control"
                                                    value="{{ $user->tin ?? null }}" name="footer" id="field"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Nida</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control"
                                                    value="{{ $user->nida ?? null }}" name="footer" id="field"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main Content Start-->
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
