<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Contact Person</title>

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

<body class="page-body  page-fade" data-url="http://clix.co.tz">

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
                <li class="active"><strong>Reminder</strong></li>
                <a href="{{ URL::to('calendar') }}" type="button" style="float:right;margin-left:4px;"
                    class="btn btn-primary btn-icon icon-right">
                    Calender <i class="entypo-calendar"></i>
                </a>
                <a href="{{ URL::to('createreminder') }}" type="button" style="float:right;"
                    class="btn btn-primary btn-icon icon-right">
                    Add Reminder<i class="entypo-user-add"></i>
                </a>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Reminder</h2>
                </div>
                <div class="col-md-3 col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            var $table4 = jQuery("#table-4");

                            $table4.DataTable({
                                dom: 'Bfrtip',
                                buttons: [
                                    'copyHtml5',
                                    'excelHtml5',
                                    'csvHtml5',
                                    'pdfHtml5'
                                ]
                            });
                        });
                    </script>
                    <table class="table table-bordered datatable" id="table-4">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reminders as $r)
                                <tr>
                                    <td>{{ $r->name }}</td>
                                    <td>{{ $r->description }}</td>
                                    <td>{{ $r->date }}</td>
                                    <td> @php
                                        $reminderDate = $r->date;
                                        $reminderTime = $r->time;
                                    @endphp
                                        @if ($reminderDate > $dateNow || ($reminderDate == $dateNow && $reminderTime > $timeNow))
                                            <span class="badge badge-info badge-roundless" style="border-radius:3px;">
                                                Upcoming</span>
                                        @else
                                            <span class="badge badge-danger badge-roundless"
                                                style="border-radius:3px;">Reached</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-primary" role="menu">
                                                <li><a onclick="jQuery('#modal-2').modal('show')">Edit</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="{{ url('/passwrdupdate/' . $r->id) }}">
                                                        Complete
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="{{ url('/remiderdelete/' . $r->id) }}">
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!------ Modal one create reminder here -------------->
            <div class="modal fade" id="modal-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Create Reminder </h4>
                        </div>
                        <form id="reminderForm" method="post" action="{{ route('reminder.reminder') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8" style="padding:43px;">

                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Title</label>
                                            <input type="text" name="name" class="form-control" id="field-1"
                                                placeholder="Reminder Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Description</label>
                                            <textarea name="description" class="form-control" id="field-ta" placeholder="Reminder Description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="field-2" class="control-label">Date</label>
                                                    <input type="date" min="{{ date('Y-m-d') }}" name="date"
                                                        style="z-index:1600 !important;" class="form-control"
                                                        id="field-2" placeholder="DD/MM/YYYY">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="field-2" class="control-label">Time </label>
                                                    <input type="time" name="time" class="form-control"
                                                        id="field-2" id="field-2" min="00:00" max="24:00"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-2" class="control-label">Repeat</label>
                                            <select name="frequency" class="selectboxit">
                                                <optgroup label="Please Select">
                                                    <option value="none">Never</option>
                                                    <option value="daily">Daily</option>
                                                    <option value="weekly">Weekly</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="yearly">Yearly</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Footer-->
            @include('common.footer')

            <!-- Imported styles on this page -->
            <link rel="stylesheet" href="{{ url('assets/js/datatables/datatables.css') }}">
            <link rel="stylesheet" href="{{ url('assets/js/select2/select2-bootstrap.css') }}">
            <link rel="stylesheet" href="{{ url('assets/js/select2/select2.css') }}">

            <!-- Bottom scripts (common) -->
            <script src="{{ url('assets/js/gsap/TweenMax.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap.js') }}"></script>
            <script src="{{ url('assets/js/joinable.js') }}"></script>
            <script src="{{ url('assets/js/resizeable.js') }}"></script>
            <script src="{{ url('assets/js/neon-api.js') }}"></script>


            <!-- Imported scripts on this page -->
            <script src="{{ url('assets/js/datatables/datatables.js') }}"></script>
            <script src="{{ url('assets/js/select2/select2.min.js') }}"></script>
            <script src="{{ url('assets/js/neon-chat.js') }}"></script>


            <!-- JavaScripts initializations and stuff -->
            <script src="{{ url('assets/js/neon-custom.js') }}"></script>


            <!-- Demo Settings -->
            <script src="{{ url('assets/js/neon-demo.js') }}"></script>
