<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Report </title>

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
                <li class="active"><strong>Tasks</strong></li>

            </ol>

            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Tasks</h2>
                </div>

                <div class="col-md-3 col-sm-5"></div>
            </div>
            <!--Main Content Start-->
            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                A Form to Update a Task
                            </div>

                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form role="form" method="post" action="{{ route('task.createTask') }}"
                                class="form-horizontal form-groups-bordered">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-3" style="padding-left:40px;">

                                    </div>
                                    <div class="col-md-3" style="padding-left:40px;">
                                        <h5><strong>KPI to Receive Documents</strong></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Client </label>
                                            <div class="col-sm-8">
                                                <select name="clients_id" id="client" class="selectboxit">
                                                    <optgroup label="Select Client">
                                                        <option value="">Select Client</option>
                                                        <option value=""></option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Client Service </label>
                                            <div class="col-sm-8">
                                                <select name="service" id="assignedservice" class="clientService"
                                                    style="width:100%;padding:10px;"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Start Date </label>
                                            <div class="col-sm-8">
                                                <input type="date" id="start_date" name="start_date"
                                                    min="{{ date('Y-m-d') }}" class="form-control" id="field-1"
                                                    placeholder="Enter Start date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">End Date </label>
                                            <div class="col-sm-8">
                                                <input type="date" name="end_date" class="form-control"
                                                    id="field-1" placeholder="End Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Assign Staff </label>
                                            <div class="col-sm-8">
                                                <select name="employees" id="assignedEmployee" class="selectboxit">
                                                    <option value=""><strong>Select Staff</strong></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Track KPI </label>
                                            <div class="col-sm-8">
                                                <select name="job_kpi_enabled" class="selectboxit">
                                                    <option><strong>Enable KPI</strong></option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-5 control-label"> Target Days </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="kpi_complete_target_day"
                                                    class="form-control" id="field-1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-5 control-label"> Early Points
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="kpi_complete_early_points"
                                                    class="form-control" id="field-1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-5 control-label"> Late Points </label>
                                            <div class="col-sm-3">
                                                <input type="text" name="kpi_complete_late_points"
                                                    class="form-control" id="field-1" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-right:14px;">
                                    <div class="col-sm-12">
                                        <button type="submit" style="float:right;"
                                            class="btn btn-primary btn-icon icon-right">
                                            Add Task <i class="entypo-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
            <!--Main Content Start-->

            <link type="stylesheet" href="">
            <script>
                document.getElementById("start_date").min = new Date().toISOString().split("T")[0];
            </script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#client').on('change', function() {
                        var clientId = this.value;
                        $('#assignedservice').html('');
                        $.ajax({
                            url: '{{ route('getService') }}?clients_id=' + clientId,
                            type: 'get',
                            success: function(res) {
                                $('#assignedservice').html('<option value="">Select Service</option>');
                                $.each(res, function(key, value) {
                                    $('#assignedservice').append('<option value="' + value
                                        .id + '">' + value.service_name + '</option>');
                                });
                            }
                        });
                    });
                });
            </script>
            <script type="text/javascript">
                /*$(document).ready(function() {
                                                                                        $('#taskCreateForm').submit(function(event) {
                                                                                           // Prevent the default form submission

                                                                                            // Retrieve specific form data
                                                                                            var client = $('#client').val();
                                                                                            var service = $('#assignedservice').val();
                                                                                            var employee = $('#assignedEmployee').val();

                                                                                            // Prepare the data object
                                                                                            var formData = {
                                                                                                client: client,
                                                                                                service: service,
                                                                                                employee: employee
                                                                                            };

                                                                                            // Send data via Ajax
                                                                                            $.ajax({
                                                                                            url: '{{ route('task.tasks') }}?'+formData,
                                                                                            method: 'GET', // or 'GET' depending on your server-side implementation
                                                                                            data: formData,
                                                                                            success: function(response) {
                                                                                                console.log(formData);
                                                                                            },
                                                                                            error: function(error) {
                                                                                                // Handle errors
                                                                                            }
                                                                                            });
                                                                                        });
                                                                                    });*/
            </script>
            @include('common.footer')
        </div>
    </div>
    <!-- Imported styles on this page -->
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

</body>

</html>
