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
                <li class="active"><strong>General Settings</strong></li>

            </ol>

            <div class="row">
                <div class="col-md-9">
                    <h2>General Settings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @if ($errors->any())
                        <div id="error-message" class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><strong> Oohps! </strong>{{ $error }}</li>
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
            <!-- General Settings -->
            <div class="row">
                <div class="panel panel-primary" data-collapsed="0">

                    <div class="panel-heading">
                        <div class="panel-title" style="text-align: left;">
                            A Form to Change General Settings
                        </div>

                        <div class="panel-options">
                            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{ url('/settingupdate/' . $setting->id) }}" method="POST" role="form"
                            class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Company Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control"
                                                value="{{ $setting->site_name }}" name="site_name" id="field-1"
                                                placeholder="Enter Company Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Phone Number</label>
                                        <div class="col-sm-7">
                                            <input type="tel" class="form-control" value="{{ $setting->phone }}"
                                                name="phone" id="field-1" placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" value="{{ $setting->email }}"
                                                name="email" id="field-1" placeholder="Enter Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label">Logo</label>
                                        <div class="col-sm-7">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail"
                                                    style="width: 150px; height: 60px;" data-trigger="fileinput">
                                                    <img src="http://placehold.it/150x60" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                    style="max-width: 200px; max-height: 150px"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="logo" accept="image/*">
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists"
                                                        data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label"> Favicon</label>
                                        <div class="col-sm-7">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail"
                                                    style="width: 40px; height: 40px;" data-trigger="fileinput">
                                                    <img src="http://placehold.it/40x40" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                    style="max-width: 200px; max-height: 150px"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="favicon" accept="image/*">
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists"
                                                        data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label"> Footer </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control"
                                                value="{{ $setting->footer }}" name="footer" id="field"
                                                placeholder="Footer Text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-4 control-label"> Address</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control"
                                                value="{{ $setting->address }}" name="address"
                                                placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" id="submit-btn" style="float:right;" class="btn btn-success">
                            Save Changes <i class="entypo-user-add"></i>
                        </button>
                    </div>
                </div>
            </div>
            </form>
            @include('common.footer')
        </div>
    </div>
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="{{ url('assets/js/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/js/select2/select2.css') }}">

    <!-- Bottom scripts (common) -->
    <script src="{{ url('assets/js/select2/select2.min.js') }}"></script>
    <script src="{{ url('assets/js/gsap/TweenMax.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/js/joinable.js') }}"></script>
    <script src="{{ url('assets/js/resizeable.js') }}"></script>
    <script src="{{ url('assets/js/neon-api.js') }}"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="{{ url('assets/js/neon-custom.js') }}"></script>
    <script src="{{ url('assets/js/jquery.multi-select.js') }}"></script>
    <!-- Demo Settings -->
    <script src="{{ url('assets/js/neon-demo.js') }}"></script>
</body>

</html>
