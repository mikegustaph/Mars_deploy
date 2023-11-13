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
                <li><a href="index.html"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>Services</strong></li>
                <a href="{{ URL::to('createService') }}" type="button" style="float:right;"
                    class="btn btn-success btn-icon icon-right">
                    Add Service <i class="entypo-user-add"></i>
                </a>
            </ol>
            <div class="row">
                <div class="col-md-3">
                    <h2>Services</h2>
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
                <div class="col-md-3"></div>
            </div>

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
            <!--Main Content-->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered datatable" id="table-4">
                        <thead>
                            <tr>
                                <th><strong>Service Name</strong></th>
                                <th><strong>Due Date</strong></th>
                                <th><strong>Role</strong></th>
                                <th><strong>Repeat</strong></th>
                                <th><strong>Actions</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->duedate }}</td>
                                        <td>{{ $service->role }}</td>
                                        <td>{{ $service->repeat }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown">
                                                    Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li><a
                                                            href="{{ URL::to('/serviceview/' . $service->id) }}">View</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="{{ URL::to('/servicedit/' . $service->id) }}">Edit</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="{{ URL::to('/serviceDelete/' . $service->id) }}"
                                                            style="color: red;"><strong>Delete</strong></a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a
                                                            href="{{ URL::to('/checklist/' . $service->id) }}">Checklist</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><strong>Service Name</strong></th>
                                <th><strong>Due Date</strong></th>
                                <th><strong>Role</strong></th>
                                <th><strong>Repeat</strong></th>
                                <th><strong>Actions</strong></th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

            @include('common.footer')
        </div>
    </div>
    <!--Modal here one-->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row" style="padding:30px;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <h4 class="modal-title text-center">Are you sure you want to delete this service?</h4>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-1">
                            <a style="cursor: pointer;" type="button" class="btn yes-btn btn-danger"
                                href="{{ URL::to('/serviceDelete/' . $service->id) }}">Yes</a>
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
    <!--Modal here two-->
    <div class="modal fade" id="modal-2">
        <div class="modal-dialog" style="width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> Checklist </h4>
                </div>
                <form id="assignForm" action="{{ route('service.checklist') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <a id="addrowbtn" class="btn btn-success"><i class="entypo-plus"></i> Add Row</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="padding-top:7px;">
                                <!-- Checklist Service Input-->
                                <table class="table table-bordered table-striped datatable" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Note</th>
                                            <th>Multiple Uploads</th>
                                            <th>Mandatory</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select name="name[]" class="selectboxit">
                                                    <optgroup label="Checklist">
                                                        <option value="PostCheck">Post Check</option>
                                                        <option value="PreCheck">Pre Check</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td><input type="text" name="note[]" class="form-control col-sm-2"
                                                    id="field-2" placeholder="Check Note" required></td>
                                            <td>
                                                <select name="multiple_upload[]" class="selectboxit">
                                                    <optgroup label="Multiple Uploads">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="mandatory[]" class="selectboxit">
                                                    <optgroup label="Mandatory">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="description[]" class="form-control"
                                                    id="field-2" placeholder="Description" required>
                                            </td>
                                            <td>
                                                <a class="btn btn-default btn-sm btn-icon icon-left">
                                                    <i class="entypo-cancel"></i>Cancel</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;">
                            <input type="text" name="service_id" value="{{ $service->id }}"
                                class="form-control" id="field-1" placeholder="Enter service name">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
                <script>
                    $(document).ready(function() {
                        // Add row function
                        $('#addrowbtn').click(function() {
                            var newRow = `
                                    <tr>
                                        <td>
                                            <select name="name[]" class="form-select">
                                                <optgroup label="Checklist">
                                                    <option value="PostCheck">Post Check</option>
                                                    <option value="PreCheck">Pre Check</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td><input type="text" name="note[]" class="form-control col-sm-2" placeholder="Check Note"></td>
                                        <td>
                                            <select name="multiple_upload[]" class="form-select">
                                                <optgroup label="Multiple Uploads">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="mandatory[]">
                                                <optgroup label="Mandatory">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="description[]" class="form-control" placeholder="Description">
                                        </td>
                                        <td>
                                            <a class="removeRowBtn btn btn-default btn-sm btn-icon icon-left">
                                                <i class="entypo-cancel"></i> Cancel
                                            </a>
                                        </td>
                                    </tr>`;
                            $('#table-2 tbody').append(newRow);
                        });
                        // Remove row function
                        $(document).on('click', '.removeRowBtn', function() {
                            $(this).closest("tr").remove();
                        });
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $("").submit(function() {
                            var formData = $(this).serialize();
                            $.ajax({
                                type: "POST",
                                url: "{{ route('client.addservice') }}",
                                data: formData,
                                success: function(response) {
                                    if (response.status == "success") {
                                        $('modal-1').modal('hide');
                                    }
                                    //error: function(){
                                    //    console.log('Error: ', response);
                                    //  }
                                }
                            });
                        });
                    });
                </script>
            </div>
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
