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
                <li class="active"><strong>Profile Settings</strong></li>

            </ol>
            <hr />
            <div class="profile-env">

                <header class="row">

                    <div class="col-sm-2">

                        <a href="#" class="profile-picture">
                            <img src="assets/images/profile-picture.png" class="img-responsive img-circle" />
                        </a>

                    </div>

                    <div class="col-sm-7">

                        <ul class="profile-info-sections">
                            <li>
                                <div class="profile-name">
                                    <strong>
                                        <a href="#">Art Ramadani</a>
                                        <a href="#" class="user-status is-online tooltip-primary"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
                                        <!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->
                                    </strong>
                                    <span><a href="#">Co-Founder at Laborator</a></span>
                                </div>
                            </li>

                            <li>
                                <div class="profile-stat">
                                    <h3>643</h3>
                                    <span><a href="#">followers</a></span>
                                </div>
                            </li>

                            <li>
                                <div class="profile-stat">
                                    <h3>108</h3>
                                    <span><a href="#">following</a></span>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="col-sm-3">

                        <div class="profile-buttons">
                            <a href="#" class="btn btn-default">
                                <i class="entypo-user-add"></i>
                                Follow
                            </a>

                            <a href="#" class="btn btn-default">
                                <i class="entypo-mail"></i>
                            </a>
                        </div>
                    </div>

                </header>

                <section class="profile-info-tabs">

                    <div class="row">

                        <div class="col-sm-offset-2 col-sm-10">

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
                                        Works as <span>Laborator</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="entypo-calendar"></i>
                                        16 October
                                    </a>
                                </li>
                            </ul>


                            <!-- tabs for the profile links -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile-info">Profile</a></li>
                                <li><a href="#biography">Bio</a></li>
                                <li><a href="#profile-edit">Edit Profile</a></li>
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
                                A Form to Change Profile Settings
                            </div>

                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>


                        <div class="panel-body">
                            <form action="" method="POST" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="fname"
                                                    id="field-1" placeholder="Enter First Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Last Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="lname"
                                                    id="field-1" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" name="email"
                                                    id="field-1" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Phone</label>
                                            <div class="col-sm-8">
                                                <input type="tel" class="form-control" name="phone"
                                                    id="field-1" placeholder="Enter Phone Number" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Profile Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="profImage"
                                                    accept=".png, .jpg, .jpeg" id="field-file" placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div style="padding-left:20px;">
                                            <h4>Change Login Detail</h4>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Email </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="footer"
                                                    id="field" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Confirm
                                                Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="confirmPassword"
                                                    placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-right:63px;">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" id="submit-btn" style="float:right;"
                                                class="btn btn-primary">
                                                Save Changes <i class="entypo-user-add"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('common.footer')
        </div>
    </div>

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
    <script src="{{ url('assets/js/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ url('assets/js/neon-chat.js') }}"></script>
</body>

</html>
