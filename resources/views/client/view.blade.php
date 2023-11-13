<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | view</title>

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
                <li><a href="{{ url('/home') }}"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>View</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-3"></div>
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
                            <strong>Well done!</strong>{{ session('message') }}
                        </div>
                        <script>
                            $(document).ready(function() {
                                setTimeout(function() {
                                    $('#flash-message').fadeOut('slow');
                                    $('#error-message').fadeOut('slow');
                                }, 5000);
                                // Adjust the timeout value (in milliseconds) as needed
                            });
                        </script>
                    @endif
                </div>
                <div class="col-md-3"></div>
            </div>
            <!--Form Start-->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                View Client
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if (!empty($client))
                                <div class="member-entry">
                                    <div class="member-details">
                                        <h4>
                                            <a href="#">{{ $client->name }}</a>
                                        </h4>
                                        <!-- Details with Icons -->
                                        <div class="row info-list">
                                            <div class="col-sm-3">
                                                <i class="entypo-user"></i>
                                                @foreach ($contactPerson as $r)
                                                    <a href="javascript:void(0)"
                                                        style="text-transform: capitalize;">{{ $r->personContact->first_name }}
                                                    </a>
                                                @endforeach
                                            </div>
                                            @if ($client->status == 'Active')
                                                <div class="col-sm-3" style="color:green;">
                                                    <i class="entypo-record" href="javascript:void(0)"></i>
                                                    Status: <a href="javascript:void(0)" style="color:green;">Active</a>
                                                </div>
                                            @elseif ($client->status == 'Inactive')
                                                <div class="col-sm-3" style="color:grey;">
                                                    <i class="entypo-record"></i>
                                                    Status: <a href="javascript:void(0)"
                                                        style="color:grey;">Inactive</a>
                                                </div>
                                            @endif
                                            <div class="col-sm-3">
                                                <i class="entypo-mail"></i>
                                                <a href="#">{{ $client->email }}</a>
                                            </div>
                                            <div class="col-sm-3 text-right"></div>
                                            <div class="col-sm-3">
                                                <a onclick="jQuery('#modal-1').modal('show')" type="button"
                                                    class="btn btn-danger btn-sm">Suspend Client
                                                </a>
                                            </div>

                                            <div class="clear"></div>
                                            <div class="col-sm-3">
                                                <i class="entypo-location"></i>
                                                <a href="#">{{ $client->address1 }}</a>
                                            </div>
                                            <div class="col-sm-3">
                                                <i class="glyphicon glyphicon-earphone"></i>
                                                <a href="#">{{ $client->phone_number }}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <i class="entypo-doc-text"></i>
                                                TIN: <a href="#">{{ $client->tin_number }}</a>
                                            </div>
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Recent Activities
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <table class="table table-bordered table-striped datatable" id="table-2">
                                        <thead>
                                            <tr>
                                                <th><strong>Service Name</strong></th>
                                                <th><strong>Start Date</strong></th>
                                                <th><strong>End Date</strong></th>
                                                <th><strong>Repeat</strong></th>
                                                <th><strong>Status</strong></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-bordered table-striped datatable" id="table-2">
                                        <thead>
                                            <tr>
                                                <th><strong>File Name</strong></th>
                                                <th><strong>Action</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Certificate of Incoporation</td>
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-primary btn-sm btn-icon icon-left"
                                                        target="_blank">
                                                        <i class="entypo-info"></i> View </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

                // Sample Function to add new row
                var giCount = 1;

                function fnClickAddRow() {
                    jQuery('#table-2').dataTable().fnAddData([
                        '<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount +
                        ".2", giCount + ".3", giCount + ".4"
                    ]);
                    replaceCheckboxes(); // because there is checkbox, replace it
                    giCount++;
                }
            </script>
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
                                    <h4 class="modal-title text-center">Are you sure you want to suspend a this client?
                                    </h4>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-1">
                                    <a style="cursor: pointer;" type="button" class="btn yes-btn btn-danger"
                                        href="#">Yes</a>
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
            <!--Footer-->
            @include('common.footer')
        </div>
    </div>
    <!-- Imported scripts on this page -->
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
