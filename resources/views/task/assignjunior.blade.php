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
                <li class="active"><strong>Assign Junior</strong></li>

            </ol>

            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Assign Junior</h2>
                </div>

                <div class="col-md-3 col-sm-5"></div>
            </div>
            <!--Main Content Start-->
            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                A Form to Assign Junior
                            </div>

                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form role="form" method="post" action="{{ url('/assignjunior/' . $task->id) }}"
                                class="form-horizontal form-groups-bordered">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Client </label>
                                            <div class="col-sm-8">
                                                <input type="text" id="client" name="client"
                                                    value="{{ $task->client->name }}" class="form-control"
                                                    id="field-1" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Service</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="service" name="service"
                                                    value="{{ $task->client->clientserv->serv->service_name }}"
                                                    class="form-control" id="field-1" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Junior Staff</label>
                                            <div class="col-sm-8">
                                                <select name="junior" id="assignedEmployee" class="select2"
                                                    data-allow-clear="true">
                                                    <option><strong>Select Staff</strong></option>
                                                    @foreach ($junior as $user)
                                                        @if ($user->role_id == 4)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Start Date </label>
                                            <div class="col-sm-8">
                                                <input type="date" id="start_date" name="start_date"
                                                    min="{{ date('Y-m-d') }}" class="form-control" id="field-1"
                                                    value="{{ $task->start_date }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">End Date </label>
                                            <div class="col-sm-8">
                                                <input type="date" name="end_date" class="form-control"
                                                    id="field-1" value="{{ $task->start_end }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Track KPI </label>
                                            <div class="col-sm-8">
                                                <input type="text" id="kpi" name="kpi"
                                                    value="{{ $task->job_kpi_enabled }}" class="form-control"
                                                    id="field-1" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" style="float:right;" class="btn btn-success">
                                Assign Task
                            </button>
                        </div>
                    </div>
                    </form>
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

    <!-- Imported scripts on this page -->
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
