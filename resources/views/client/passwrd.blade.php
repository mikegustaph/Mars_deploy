<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Password</title>

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
                <li class="active"><strong>Add Clients</strong></li>

            </ol>
            <!--Form Start-->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                Portals UserID & Password
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">

                            <form action="{{ route('client.passwrd') }}" method="POST" role="form"
                                class="form-horizontal form-groups-bordered">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Taxpayer Portal
                                                Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="tra_portal_name"
                                                    id="field-1" placeholder="Enter portal name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Taxpayer TIN</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="tra_portal_tin"
                                                    id="field-1" placeholder="Enter taxpayer tin" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Taxpayer Portal
                                                Password</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="tax_portal_passwrd"
                                                    id="field-1" placeholder="Enter portal password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Tax Payment TIN</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="tax_portal_tin"
                                                    id="field-1" placeholder="Enter tax payment tin" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Payment Password
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="payment_passwrd"
                                                    id="field-1" placeholder="Enter payment password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">BRELA Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="brela_name"
                                                    id="field-1" placeholder="Enter brela name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">BRELA UserID</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="brela_userid"
                                                    id="field-1" placeholder="Enter brela userid">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">BRELA
                                                Password</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="brela_passwrd"
                                                    id="field-1" placeholder="Enter brela password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">NSSF UserID</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="nssf_userid"
                                                    id="field-1" placeholder="Enter nssf userid">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">NSSF Password</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="nssf_passwrd"
                                                    id="field-1" placeholder="Enter nssf password">
                                            </div>
                                        </div>
                                        <div class="form-group" style="display:none;">
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control"
                                                    value="{{ $addClient->id }}" name="clientId" id="field-1"
                                                    placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Efin UserID </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="efin_userid"
                                                    id="field-1" placeholder="Enter EFIN" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Efin Password
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="efin_passwrd"
                                                    id="field-1" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">WCF UserID</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="wcf_userid"
                                                    id="field-1" placeholder="Enter wcf userid">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">WCF Password</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="wcf_passwrd"
                                                    id="field-1" placeholder="Enter wcf password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">WCF Incident
                                                Notification
                                                Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="wcf_ic_name"
                                                    id="field-1" placeholder="Enter wcf name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">WCF Incident
                                                Notification
                                                UserID</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="wcf_ic_userid"
                                                    id="field-1" placeholder="Enter wcf name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">WCF Incident
                                                Notification
                                                Password</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="wcf_ic_passwrd"
                                                    id="field-1" placeholder="Enter wcf name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Beneficial
                                                Ownership</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="bo_name"
                                                    id="field-1" placeholder="Enter name">
                                            </div>
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
                        <button type="submit" id="submit-btn" style="float:right;" class="btn btn-primary">
                            Add Details <i class="entypo-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            </form>
            <!--Footer-->
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
