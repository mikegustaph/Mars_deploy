<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Employee</title>

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
                <li class="active"><strong>Create Employee</strong></li>

            </ol>

            <div class="row">
                <div class="col-md-4 col-sm-7">
                    <h2>Create Employee</h2>
                </div>

                <div class="col-md-8 col-sm-5">
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
            <!--Main Content Start-->
            @if (session('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif

            <div class="panel panel-primary" data-collapsed="0">
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-heading">
                    <div class="panel-title">
                        A Form to Create New Employee
                    </div>

                    <div class="panel-options">
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    </div>
                </div>

                <div class="panel-body">
                    <form action="{{ route('employee.createEmployee') }}" method="POST" role="form"
                        class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label">First Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="first_name" id="field-1"
                                            placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label">Middle Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="middle_name" id="field-1"
                                            placeholder="Middle Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label">Last Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="last_name" id="field-1"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Photo 128x128</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="images"
                                            accept=".png, .jpg, .jpeg" id="field-file" placeholder="Placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> CV </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="cv" accept=".pdf"
                                            id="field-file" placeholder="Placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Contract </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="contract" accept=".pdf"
                                            id="field-file" placeholder="Placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Application </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="application" accept=".pdf"
                                            id="field-file" placeholder="Placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Offer Letter </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="offerletter" accept=".pdf"
                                            id="field-file" placeholder="Placeholder">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Joining Date </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="joining_date"
                                            id="field-1" placeholder="mm/dd/yyyy" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Termination </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control datepicker" name="termination"
                                            id="field-1" placeholder="mm/dd/yyyy">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Phone </label>
                                    <div class="col-sm-8">
                                        <input type="tel" class="form-control" name="phone" id="field-1"
                                            placeholder="+255756540000" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Email </label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="email" id="field-1"
                                            placeholder="clientmail@mail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Position </label>
                                    <div class="col-sm-8">
                                        <select name="position" class="selectboxit">
                                            <optgroup label="Employee Position">
                                                <option value="Junior accountant">Junior Accountant</option>
                                                <option value="Senior accountant">Senior Accountant</option>
                                                <option value="Assistant auditor">Assistant Auditor</option>
                                                <option value="Senior auditor">Senior Auditor</option>
                                                <option value="tax manager">Tax Manager</option>
                                                <option value="tax associate">Tax Associate</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Contract Period(Years)
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="contract_period"
                                            id="field-1" placeholder="Select Your Contract Period">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> TIN Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="tin" id="field-1"
                                            placeholder="Enter TIN Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> NIDA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="tin" id="field-1"
                                            placeholder="Enter NIDA Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> NSSF Number </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nssf" id="field-1"
                                            placeholder="Enter NSSF Number">
                                    </div>
                                </div>

                                <div class="form-group" style="display: none;">
                                    <label for="field-1" class="col-sm-4 control-label"> User ID </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="userIdInput" name="user_id"
                                            value="" id="field-1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="field-1" class="col-sm-4 control-label"> Role </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="roleIdInput" name="role_id"
                                            value="" id="field-1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label"> Status </label>
                                    <div class="col-sm-8">
                                        <select name="status" class="selectboxit">
                                            <optgroup label="status">
                                                <option value="Active">Active</option>
                                                <option value="Retired">Retired</option>
                                                <option value="Inactive">Suspended</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-right:63px;">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit-btn" style="float:right;"
                                        class="btn btn-primary">
                                        Add Employee <i class="entypo-user-add"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Function to get the query parameter by name
                    function getQueryParam(name) {
                        const urlParams = new URLSearchParams(window.location.search);
                        return urlParams.get(name);
                    }
                    // Retrieve the 'userId' value from the URL query parameter
                    const userId = getQueryParam('userId');
                    const roleId = getQueryParam('roleId');
                    //console.log('userId:', userId); // Add this line to check if the value is retrieved
                    // Set the value of the input field
                    document.getElementById('userIdInput').value = userId;
                    document.getElementById('roleIdInput').value = roleId;
                });
            </script>
            <script>
                const urlParams = new URLSearchParams(window.location.search);

                // Get the 'userId' and 'roleId' query parameters
                const userId = urlParams.get('userId');
                const roleId = urlParams.get('roleId');

                document.getElementById('userIdInput').value = userId;
                document.getElementById('roleIdInput').value = roleId;
            </script>
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
