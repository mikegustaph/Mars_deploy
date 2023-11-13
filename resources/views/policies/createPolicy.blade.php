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
                <li class="active"><strong>New Policies</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <h2>Add New Policy</h2>
                </div>
            </div>
            <!--Main Content-->
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-bordered table-striped datatable" id="table-2">
                        <thead>
                            <tr>
                                <th>
                                    <div class="checkbox checkbox-replace">
                                        <input type="checkbox" id="chk-1">
                                    </div>
                                </th>
                                <th>Policies Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>
                                    <div class="checkbox checkbox-replace">
                                        <input type="checkbox" id="chk-1">
                                    </div>
                                </td>

                                <td>Employee Policy </td>
                                <td>
                                    <a href="#" class="btn btn-default btn-sm btn-icon icon-left">
                                        <i class="entypo-pencil"></i>
                                        View
                                    </a>

                                    <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                                        <i class="entypo-info"></i>
                                        Manage
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

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
