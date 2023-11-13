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
                <li><a href="index.html"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>Employee</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Employees</h2>
                </div>
                <div class="col-md-3 col-sm-5">

                </div>
            </div>
            <!-- Member Entries -->

            <!-- Single Member -->
            @if (count($employees) > 0)
                @foreach ($employees as $employee)
                    <div class="member-entry">
                        <a href="javascript:void(0);" class="member-img">
                            <img src="{{ Storage::url('images/' . $employee->images) }}" alt="Image">
                        </a>
                        <div class="member-details">
                            <h4>
                                <a href="javascript:void(0);" style="text-transform: capitalize;">{{ $employee->name }}
                                    @if (empty($employee->employeeUser->last_name))
                                        <span class="badge badge-danger badge-roundless" style="border-radius:3px;">
                                            Incomplete</span>
                                    @endif
                                </a>
                            </h4>
                            <!-- Details with Icons -->
                            <div class="row info-list">
                                <div class="col-sm-3">
                                    <i class="entypo-briefcase"></i>
                                    Position: <a href="javascript:void(0)">{{ $employee->position }}</a>
                                </div>
                                <div class="col-sm-3">
                                    <i class="glyphicon glyphicon-phone"></i>
                                    <a href="javascript:void(0)">{{ $employee->phone }}</a>
                                </div>
                                <div class="col-sm-3">
                                    <i class="entypo-doc"></i>
                                    <a href="javascript:void(0)">{{ $employee->nssf }}</a>
                                </div>
                                <div class="col-sm-3">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-primary" role="menu">
                                            <li>
                                                <a href="{{ URL::to('/viewemployee/' . $employee->id) }}">Profile</a>
                                            </li>
                                            <li class="divider"></li>
                                            @if (empty($employee->user_id))
                                                <li><a
                                                        href="{{ URL::to('/createEmployee') . '?userId=' . $employee->id . '&roleId=' . $employee->role_id }}">Edit</a>
                                                </li>
                                            @else
                                                <li><a href="{{ URL::to('/editemployee/' . $employee->id) }}">Edit</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                @if ($employee->status == 'Active')
                                    <div class="col-sm-3" style="color:green;">
                                        <i class="entypo-record" href="javascript:void(0)"></i>
                                        Status: <a href="javascript:void(0)" style="color:green;">Active</a>
                                    </div>
                                @elseif ($employee->status == 'Suspended')
                                    <div class="col-sm-3" style="color:red;">
                                        <i class="entypo-record"></i>
                                        Status: <a href="javascript:void(0)" style="color:red;">Suspended</a>
                                    </div>
                                @elseif ($employee->status == 'Retired')
                                    <div class="col-sm-3" style="color:rgb(123, 123, 123);">
                                        <i class="entypo-record"></i>
                                        Status: <a href="javascript:void(0)"
                                            style="color:rgb(123, 123, 123);">Retired</a>
                                    </div>
                                @endif
                                <div class="col-sm-3">
                                    <i class="entypo-mail"></i>
                                    Email: <a href="javascript:void(0)">{{ $employee->email }}</a>
                                </div>

                                <div class="col-sm-3">
                                    <i class="entypo-doc-text"></i>
                                    TIN: <a href="javascript:void(0)">{{ $employee->tin }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
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
                                    <h4 class="modal-title">Are you sure you want to delete this user?</h4>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-1">
                                    <a style="cursor: pointer;" type="button" class="btn btn-danger"
                                        href="{{ URL::to('/deleteEmployee/' . $employee->id) }}">Yes</a>
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

            <!-- Pager for search results -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="pager">
                        @if ($employees->previousPageUrl())
                            <li><a href="{{ $employees->previousPageUrl() }}"><i class="entypo-left-thin"></i>
                                    Previous</a></li>
                        @endif
                        @if ($employees->nextPageUrl())
                            <li><a href="{{ $employees->nextPageUrl() }}">Next <i class="entypo-right-thin"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>


            <script>
                document.querySelector('.entypo-record').style.setProperty('hover', 'none');
            </script>
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
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>
