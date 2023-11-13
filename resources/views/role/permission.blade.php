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
                <div class="col-md-9">
                    <h2>Change User Permissions</h2>
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
                    <form method="POST" action="" role="form" class="form-horizontal form-groups-bordered"
                        enctype="multipart/form-data">
                        <table class="table table-bordered datatable" id="table-4">
                            <form method="POST" action="" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                <thead>
                                    <tr>
                                        <th><strong>Module Name</strong></th>
                                        <th><strong>View</strong></th>
                                        <th><strong>Add</strong></th>
                                        <th><strong>Edit</strong></th>
                                        <th><strong>Delete</strong></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Client</td>
                                        <td>
                                            <input tabindex="5" type="checkbox" class="icheck" id="minimal-checkbox-2"
                                                checked>
                                        </td>
                                        <td>
                                            <input tabindex="5" type="checkbox" class="icheck" id="minimal-checkbox-2"
                                                checked>
                                        </td>
                                        <td>
                                            <input tabindex="5" type="checkbox" class="icheck" id="minimal-checkbox-2"
                                                checked>
                                        </td>
                                        <td>
                                            <input tabindex="5" type="checkbox" class="icheck" id="minimal-checkbox-2"
                                                checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck" id="minimal-checkbox-2"
                                                checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck" id="minimal-checkbox-2"
                                                checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Services</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" name="service-delete" type="checkbox"
                                                class="icheck" id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dispatch</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Reminder</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Policies</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Template</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>People</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td><strong>Daily Reports</strong></td>
                                        <td><strong>Weekly Report</strong></td>
                                        <td><strong>Monthly Report</strong> </td>
                                        <td><strong>Yearly Report</strong> </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Reports</td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                        <td>
                                            <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td></td>
                                        <td><strong>Role Permission</strong></td>
                                        <td><strong>General Setting</strong></td>
                                        <td><strong>Profile Setting </strong></td>
                                        <td><strong>Hrm Setting </strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Settings</td>
                                        <td><input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked></td>
                                        <td> <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked></td>
                                        <td> <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked></td>
                                        <td> <input tabindex="6" type="checkbox" class="icheck"
                                                id="minimal-checkbox-2" checked></td>
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
</body>

</html>
