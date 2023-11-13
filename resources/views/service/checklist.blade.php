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
                <li><a href="{{ URL::to('home') }}"><i class="fa-home"></i>Home</a></li>
                <li class="active"><strong>checklist</strong></li>
            </ol>

            <div class="row">
                <div class="col-md-3">
                    <h2>Checklist</h2>
                </div>
                <div class="col-md-6">
                    @if ($errors->any())
                        <div id="error-message" class="alert alert-danger">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                A form to add checklist
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="assignForm" action="{{ route('service.checklist') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6" style="text-align: right;">
                                        <a id="addrowbtn" class="btn btn-success"><i class="entypo-plus"></i> Add
                                            Row</a>
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
                                                    <td><input type="text" name="note[]"
                                                            class="form-control col-sm-2" id="field-2"
                                                            placeholder="Check Note" required></td>
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
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" id="submit-btn" style="float:right;" class="btn btn-success">
                            Add Checklist <i class="entypo-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            </form>
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
    <script src="{{ url('assets/js/jquery.multi-select.js') }}"></script>
    <script src="{{ url('assets/js/icheck/icheck.min.js') }}"></script>
    <script src="{{ url('assets/js/neon-chat.js') }}"></script>
</body>

</html>
