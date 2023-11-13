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
                <a href="{{ URL::to('createTask') }}" style="float:right;" class="btn btn-primary btn-icon icon-right">
                    Create Task <i class="entypo-plus"></i>
                </a>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Tasks</h2>
                </div>

                <div class="col-md-3 col-sm-5"></div>
            </div>
            <!--Main Content-->
            <div class="row">
                <div class="col-md-12">

                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            var $table4 = jQuery("#table-4");

                            $table4.DataTable({
                                dom: 'Bfrtip',
                                buttons: [

                                ]
                            });
                        });
                    </script>
                    <table class="table table-bordered datatable" id="table-4">
                        <thead>
                            <tr>
                                <th>Clients</th>
                                <th>Deadline</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Senior</th>
                                <th>Junior</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $row)
                                <tr>
                                    <td>{{ $row->client->name }}</td>
                                    <td>{{ $row->end_date }}</td>
                                    <td>{{ $row->client->clientserv->serv->service_name }}</td>
                                    <td>
                                        @if ($row->job_status == 'Active')
                                            <span style="color:rgb(32, 112, 0);"><strong>Active</strong></span>
                                        @elseif ($row->job_status == 'Inactive')
                                            <span style="color: rgb(234, 234, 234), 0);"><strong>Active</strong></span>
                                        @endif
                                    </td>
                                    <td>{{ $row->userAssign->name }}</td>
                                    <td>{{ $row->juniorAssign->name ?? null }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-primary" role="menu">
                                                <li>
                                                    <a href="{{ URL::to('/tasksprogress/' . $row->id) }}">
                                                        View
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="{{ URL::to('/update/' . $row->id) }}">
                                                        Edit
                                                    </a>
                                                </li>
                                                @if (Auth::user()->role_id < 3)
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="{{ URL::to('/assignjunior/' . $row->id) }}">
                                                            Assign Junior
                                                        </a>
                                                    </li>
                                                @endif
                                                <li class="divider"></li>
                                                <li><a
                                                        href="{{ URL::to('/receiveDocument/' . $row->id) }}">Documents</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Clients</th>
                                <th>Deadline</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Senior</th>
                                <th>Junior</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>


            <!------ Modal Here -------------->
            <div class="modal fade" id="modal-1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Assign Service to Client</h4>
                        </div>

                        <div class="modal-body">
                            Cooming Soon!
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info">Save changes</button>
                        </div>
                    </div>
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
