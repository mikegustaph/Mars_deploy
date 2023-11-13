<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Permission</title>

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
                <li class="active"><strong> permission </strong></li>
            </ol>
            <div class="row">
                <div class="col-md-5">
                    <h2>Change Role Permissions</h2>
                </div>
                <div class="col-md-6">
                    @if ($errors->any())
                        <div id="error-message" class="alert alert-danger alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
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
            <!-- General Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title" style="text-align: center;">Admin Group Permission</div>
                            <div class="panel-options">
                                <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1"
                                    class="bg"><i class="entypo-cog"></i></a>
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                                <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('role.setPermission') }}" role="form"
                        class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered table-responsive">
                            <div class="form-group" style="display: none;">
                                <input tabindex="5" value="{{ $role_data->id }}" name="role_id" type="checkbox"
                                    class="icheck" id="minimal-checkbox-2" checked>
                            </div>

                            <thead>
                                <tr>
                                    <th><strong>Module Name</strong></th>
                                    <th><strong></strong></th>
                                    <th><strong></strong></th>
                                    <th><strong></strong></th>
                                    <th><strong></strong></th>
                                    <th><strong></strong></th>
                                    <th><strong></strong></th>
                                    <th><strong></strong></th>

                                </tr>
                            </thead>

                            <tbody>
                                <!-- Client Module Start-->
                                <tr>
                                    <td>Client</td>
                                    <td>
                                        @if (in_array('client-view', $all_permission))
                                            <input tabindex="5" value="1" name="client-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> View</span>
                                        @else
                                            <input tabindex="5" value="1" name="client-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> View</span>
                                        @endif

                                    </td>
                                    <td>
                                        @if (in_array('client-add', $all_permission))
                                            <input tabindex="5" value="1" name="client-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="client-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('client-edit', $all_permission))
                                            <input tabindex="5" value="1" name="client-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="client-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('client-contact-person', $all_permission))
                                            <input tabindex="5" value="1" name="client-contact-person"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Contact Person</span>
                                        @else
                                            <input tabindex="5" value="1" name="client-contact-person"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span> Contact
                                                Person</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('assign-service', $all_permission))
                                            <input tabindex="5" value="1" name="assign-service"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Assign service</span>
                                        @else
                                            <input tabindex="5" value="1" name="assign-service"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span> Assign
                                                service</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('portal-password', $all_permission))
                                            <input tabindex="5" value="1" name="portal-password"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Portal password</span>
                                        @else
                                            <input tabindex="5" value="1" name="portal-password"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span> Portal
                                                password</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('new-company', $all_permission))
                                            <input tabindex="5" value="1" name="new-company" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> New
                                                company</span>
                                        @else
                                            <input tabindex="5" value="1" name="new-company" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> New complany</span>
                                        @endif
                                    </td>
                                </tr>
                                <!-- Client Module End-->
                                <tr>
                                    <!-- Task Module Start-->
                                    <td>Tasks</td>
                                    <td>
                                        @if (in_array('task-view', $all_permission))
                                            <input tabindex="5" value="1" name="task-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> View</span>
                                        @else
                                            <input tabindex="5" value="1" name="task-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('task-add', $all_permission))
                                            <input tabindex="5" value="1" name="task-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="task-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('task-edit', $all_permission))
                                            <input tabindex="5" value="1" name="task-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="task-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('task-delete', $all_permission))
                                            <input tabindex="5" value="1" name="task-delete" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span>Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="task-delete" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Delete</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('assign-staff', $all_permission))
                                            <input tabindex="5" value="1" name="assign-staff" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span>Assign
                                                staff</span>
                                        @else
                                            <input tabindex="5" value="1" name="assign-staff" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Assign Staff</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('receive-document', $all_permission))
                                            <input tabindex="5" value="1" name="receive-document"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Receive documents</span>
                                        @else
                                            <input tabindex="5" value="1" name="receive-document"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span> Receive
                                                documents</span>
                                        @endif
                                    </td>
                                </tr>
                                <!--Task Module End //-->
                                <tr>
                                    <!-- Service Module Start //-->
                                    <td>Services</td>
                                    <td>
                                        @if (in_array('service-view', $all_permission))
                                            <input tabindex="5" value="1" name="service-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> View</span>
                                        @else
                                            <input tabindex="5" value="1" name="service-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('service-add', $all_permission))
                                            <input tabindex="5" value="1" name="service-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="service-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('service-edit', $all_permission))
                                            <input tabindex="5" value="1" name="service-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="service-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('service-delete', $all_permission))
                                            <input tabindex="5" value="1" name="service-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="service-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Delete</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('service-checklist', $all_permission))
                                            <input tabindex="5" value="1" name="service-checklist"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Checklist</span>
                                        @else
                                            <input tabindex="5" value="1" name="service-checklist"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Checklist</span>
                                        @endif
                                    </td>
                                </tr>
                                <!--Service Module End-->
                                <tr>
                                    <!-- Dispatch Module Start -->
                                    <td>Dispatch</td>
                                    <td>
                                        @if (in_array('dispatch-view', $all_permission))
                                            <input tabindex="5" value="1" name="dispatch-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                View</span>
                                        @else
                                            <input tabindex="5" value="1" name="dispatch-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('dispatch-add', $all_permission))
                                            <input tabindex="5" value="1" name="dispatch-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="dispatch-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('dispatch-edit', $all_permission))
                                            <input tabindex="5" value="1" name="dispatch-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="dispatch-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('dispatch-delete', $all_permission))
                                            <input tabindex="5" value="1" name="dispatch-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="dispatch-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Delete</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('dispatch-dispatch', $all_permission))
                                            <input tabindex="5" value="1" name="dispatch-dispatch"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Dispatch</span>
                                        @else
                                            <input tabindex="5" value="1" name="dispatch-dispatch"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Dispatch</span>
                                        @endif
                                    </td>
                                    <!--Dispatch End-->
                                </tr>
                                <tr>
                                    <!--Reminder Module Start-->
                                    <td>Reminder</td>
                                    <td>
                                        @if (in_array('reminder-view', $all_permission))
                                            <input tabindex="5" value="1" name="reminder-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                View</span>
                                        @else
                                            <input tabindex="5" value="1" name="reminder-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('reminder-add', $all_permission))
                                            <input tabindex="5" value="1" name="reminder-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="reminder-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('reminder-edit', $all_permission))
                                            <input tabindex="5" value="1" name="reminder-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="reminder-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('reminder-delete', $all_permission))
                                            <input tabindex="5" value="1" name="reminder-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="reminder-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Delete</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('reminder-complete', $all_permission))
                                            <input tabindex="5" value="1" name="reminder-complete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Complete</span>
                                        @else
                                            <input tabindex="5" value="1" name="reminder-complete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Complete</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <!--Policy Module Start-->
                                    <td>Policies</td>
                                    <td>
                                        @if (in_array('policies-view', $all_permission))
                                            <input tabindex="5" value="1" name="policies-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                View</span>
                                        @else
                                            <input tabindex="5" value="1" name="policies-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('policies-add', $all_permission))
                                            <input tabindex="5" value="1" name="policies-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="policies-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('policies-edit', $all_permission))
                                            <input tabindex="5" value="1" name="policies-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="policies-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('policies-delete', $all_permission))
                                            <input tabindex="5" value="1" name="policies-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="policies-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Delete</span>
                                        @endif
                                    </td>
                                </tr>
                                <!--Policy End //-->
                                <tr>
                                    <!--Template Module Start-->
                                    <td>Template</td>
                                    <td>
                                        @if (in_array('template-view', $all_permission))
                                            <input tabindex="5" value="1" name="template-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                View</span>
                                        @else
                                            <input tabindex="5" value="1" name="template-view"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('template-add', $all_permission))
                                            <input tabindex="5" value="1" name="template-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="template-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('template-edit', $all_permission))
                                            <input tabindex="5" value="1" name="template-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="template-edit"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('template-delete', $all_permission))
                                            <input tabindex="5" value="1" name="template-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="template-delete"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Delete</span>
                                        @endif
                                    </td>
                                </tr>
                                <!--Template End //-->
                                <tr>
                                    <!--People Module Start-->
                                    <td>People</td>
                                    <td>
                                        @if (in_array('user-view', $all_permission))
                                            <input tabindex="5" value="1" name="user-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> View</span>
                                        @else
                                            <input tabindex="5" value="1" name="user-view" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> View</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('user-add', $all_permission))
                                            <input tabindex="5" value="1" name="user-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Add</span>
                                        @else
                                            <input tabindex="5" value="1" name="user-add" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Add</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('user-edit', $all_permission))
                                            <input tabindex="5" value="1" name="user-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Edit</span>
                                        @else
                                            <input tabindex="5" value="1" name="user-edit" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Edit</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('user-delete', $all_permission))
                                            <input tabindex="5" value="1" name="user-delete" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Delete</span>
                                        @else
                                            <input tabindex="5" value="1" name="user-delete" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Delete</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Reports</td>
                                    <td>
                                        @if (in_array('daily-report', $all_permission))
                                            <input tabindex="5" value="1" name="daily-report" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> Daily</span>
                                        @else
                                            <input tabindex="5" value="1" name="daily-report" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> Daily</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('weekly-report', $all_permission))
                                            <input tabindex="5" value="1" name="weekly-report"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Weekly</span>
                                        @else
                                            <input tabindex="5" value="1" name="weekly-report"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Weekly</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('monthly-report', $all_permission))
                                            <input tabindex="5" value="1" name="monthly-report"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Monthly</span>
                                        @else
                                            <input tabindex="5" value="1" name="monthly-report"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Monthly</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('yearly-report', $all_permission))
                                            <input tabindex="5" value="1" name="yearly-report"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Annually</span>
                                        @else
                                            <input tabindex="5" value="1" name="yearly-report"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Annually</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Settings</td>
                                    <td>
                                        @if (in_array('role-permission', $all_permission))
                                            <input tabindex="5" value="1" name="role-permission"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Role permission</span>
                                        @else
                                            <input tabindex="5" value="1" name="role-permission"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span> Role
                                                permission</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('general-setting', $all_permission))
                                            <input tabindex="5" value="1" name="general-setting"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                General </span>
                                        @else
                                            <input tabindex="5" value="1" name="general-setting"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span> General
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('profile-setting', $all_permission))
                                            <input tabindex="5" value="1" name="profile-setting"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                profile</span>
                                        @else
                                            <input tabindex="5" value="1" name="profile-setting"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Profile</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('module-setting', $all_permission))
                                            <input tabindex="5" value="1" name="module-setting"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2" checked><span>
                                                Module seting</span>
                                        @else
                                            <input tabindex="5" value="1" name="module-setting"
                                                type="checkbox" class="icheck" id="minimal-checkbox-2"><span>
                                                Module</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (in_array('hrm-setting', $all_permission))
                                            <input tabindex="5" value="1" name="hrm-setting" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked><span> HR </span>
                                        @else
                                            <input tabindex="5" value="1" name="hrm-setting" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2"><span> HR setting</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="row" style="padding-right:0;">
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" id="submit-btn" style="float:right;" class="btn btn-success">
                            Save Changes
                        </button>
                    </div>

                    </form>
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
    <script src="{{ url('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ url('assets/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/js/daterangepicker/daterangepicker.js') }}"></script>

</body>

</html>
