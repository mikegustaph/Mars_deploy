<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Client</title>

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
            <!--Main Content-->
            <ol class="breadcrumb bc-3">
                <li><a href="{{ URL::to('home') }}"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>Clients</strong></li>
                <a href="{{ URL::to('createClient') }}" style="float:right;" class="btn btn-success">
                    <strong> Add Client</strong>
                </a>


            </ol>
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
                        <th>Name</th>
                        <th>Phone</th>
                        <th>TIN</th>
                        <th>Type</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $r)
                        <tr class="odd gradeX">
                            <td>{{ $r->name }}</td>
                            <td>{{ $r->phone_number }}</td>
                            <td>{{ $r->tin_number }}</td>
                            <td class="center">{{ $r->company_type }}</td>
                            <td class="center">{{ $r->email }}</td>
                            <td class="center">
                                @if ($r->isNew == 'Yes')
                                    <div class="col-sm-3">
                                        <a href="javascript:void(0)"
                                            style="color:rgb(240, 0, 0);"><strong>Pending</strong></a>
                                    </div>
                                @elseif ($r->isNew == 'No')
                                    @if ($r->status == 'Active')
                                        <div class="col-sm-3" style="color:green;">
                                            <a href="javascript:void(0)"
                                                style="color:green;"><strong>Active</strong></a>
                                        </div>
                                    @elseif ($r->status == 'Inactive')
                                        <div class="col-sm-3" style="color:grey;">
                                            <a href="javascript:void(0)"
                                                style="color:grey;"><strong>Inactive</strong></a>
                                        </div>
                                    @endif
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                        Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-primary" role="menu">
                                        <li><a href="{{ URL::to('/view/' . $r->id) }}">View</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="{{ URL::to('/edit/' . $r->id) }}">Edit</a>
                                        </li>
                                        <li class="divider"></li>
                                        @if ($r->isNew == 'Yes')
                                            <li> <a href="{{ URL::to('/passwrd') }}">Password</a> </li>
                                        @else
                                            <li> <a href="{{ URL::to('/passwrdupdate/' . $r->id) }}">Password</a> </li>
                                        @endif
                                        <li class="divider"></li>
                                        <li>
                                            <a href="{{ URL::to('/clientservice/' . $r->id) }}">
                                                Assign Service
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>TIN</th>
                        <th>Type</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

            <br />
            <!--Footer-->
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
