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
                <li class="active"><strong>Edit Service</strong></li>

            </ol>

            <div class="row">
                <div class="col-md-3">
                    <h2>Edit Service</h2>
                </div>
                <div class="col-md-6">
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
                    @if (session('error'))
                        <div id="flash-message" class="alert alert-danger alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Oohps! </strong>{{ session('error') }}
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
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                A Form to Edit Service
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ url('/serviceupdate/' . $service->id) }}"
                                class="form-horizontal form-groups-bordered">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-3" style="padding-left:40px;">
                                        <h5><strong>KPI to Complete Job</strong></h5>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Service Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="{{ $service->service_name }}"
                                                    name="service_name" class="form-control" id="field-1"
                                                    placeholder="Enter service name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Description </label>
                                            <div class="col-sm-8">
                                                <input type="text" value="{{ $service->description }}"
                                                    name="description" class="form-control" id="field-1"
                                                    placeholder="Enter Description">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Due Date </label>
                                            <div class="col-sm-8">
                                                <input type="number" value="{{ $service->duedate }}" name="duedate"
                                                    class="form-control" id="field-1" placeholder="Enter due date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Approver </label>
                                            <div class="col-sm-8">
                                                <select name="role" class="selectboxit">
                                                    <option><strong>Select Role</strong></option>
                                                    <option value="Super Admin">Super Admin</option>
                                                    <option value="Coordinator">Coordinator</option>
                                                    <option value="Senior">Senior</option>
                                                    <option value="Junior">Junior</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Repeat </label>
                                            <div class="col-sm-8">
                                                <select name="repeat" class="selectboxit">
                                                    <optgroup label="Repeat">
                                                        <option>Select Repeat</option>
                                                        <option value="none">none</option>
                                                        <option value="daily">Daily</option>
                                                        <option value="weekly">Weekly</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="annually">Annually</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Track KPI </label>
                                            <div class="col-sm-8">
                                                <select name="service_kpi" class="selectboxit">
                                                    <optgroup label="Track KPI">
                                                        <option>Select Track KPI</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-5 control-label"> Target Days </label>
                                            <div class="col-sm-4">
                                                <input type="text" value="{{ $service->kpi_complete_target_day }}"
                                                    name="kpi_complete_target_day" class="form-control"
                                                    id="field-1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-5 control-label"> Early Points
                                            </label>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                    value="{{ $service->kpi_complete_early_points }}"
                                                    name="kpi_complete_early_points" class="form-control"
                                                    id="field-1" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-5 control-label"> Late Points </label>
                                            <div class="col-sm-4">
                                                <input type="text"
                                                    value="{{ $service->kpi_complete_late_points }}"
                                                    name="kpi_complete_late_points" class="form-control"
                                                    id="field-1" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <script type="text/javascript">
                                    jQuery(window).load(function() {
                                        var $table2 = jQuery("#table-2");

                                        // Initialize DataTable
                                        $table2.DataTable({
                                            "sDom": "tip",
                                            "bStateSave": false,
                                            "iDisplayLength": 8,
                                            "aoColumns": [{
                                                    "bSortable": false
                                                },
                                                null,
                                                null,
                                                null,
                                                null
                                            ],
                                            "bStateSave": true
                                        });

                                        // Highlighted rows
                                        $table2.find("tbody input[type=checkbox]").each(function(i, el) {
                                            var $this = $(el),
                                                $p = $this.closest('tr');

                                            $(el).on('change', function() {
                                                var is_checked = $this.is(':checked');

                                                $p[is_checked ? 'addClass' : 'removeClass']('highlight');
                                            });
                                        });

                                        // Replace Checboxes
                                        $table2.find(".pagination a").click(function(ev) {
                                            replaceCheckboxes();
                                        });
                                    });

                                    var addformRow = $('#formRow').ready(function() {

                                    });
                                </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" style="float:right;" class="btn btn-success btn-icon icon-right">
                        Add Service <i class="entypo-plus"></i>
                    </button>
                </div>
            </div>
            </form>
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
