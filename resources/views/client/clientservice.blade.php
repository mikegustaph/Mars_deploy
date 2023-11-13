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
                <li class="active"><strong>Assign Service</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if (session('error'))
                        <div id="error-message" class="alert alert-danger alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>

                                <li><strong>Oohps! </strong>{{ session('error') }}</li>

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
            <!--Form Start-->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Manage Client Service
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if (!empty($clients))
                                <div class="member-entry">
                                    <div class="member-details">
                                        <h4>
                                            <a href="javascript:void(0)">{{ $clients->name }}</a>
                                        </h4>
                                        <!-- Details with Icons -->
                                        <div class="row info-list">
                                            <div class="col-sm-3">
                                                <i class="entypo-user"></i>
                                                <a href="javascript:void(0)">{{ $clients->contactPeople->first_name ?? null }}
                                                </a>
                                            </div>
                                            @if ($clients->status == 'Active')
                                                <div class="col-sm-3" style="color:green;">
                                                    <i class="entypo-record" href="javascript:void(0)"></i>
                                                    Status: <a href="javascript:void(0)" style="color:green;">Active</a>
                                                </div>
                                            @elseif ($clients->status == 'Inactive')
                                                <div class="col-sm-3" style="color:grey;">
                                                    <i class="entypo-record"></i>
                                                    Status: <a href="javascript:void(0)"
                                                        style="color:grey;">Inactive</a>
                                                </div>
                                            @endif
                                            <div class="col-sm-3">
                                                <i class="entypo-mail"></i>
                                                <a href="javascript:void(0)">{{ $clients->email }}</a>
                                            </div>
                                            <div class="col-sm-3 text-right">

                                            </div>
                                            <div class="col-sm-3">
                                                <a onclick="jQuery('#modal-1').modal('show')" type="button"
                                                    class="btn btn-info btn-sm btn-icon icon-left">
                                                    <i class="entypo-info"></i>
                                                    Assign Service
                                                </a>
                                            </div>

                                            <div class="clear"></div>
                                            <div class="col-sm-3">
                                                <i class="entypo-location"></i>
                                                <a href="javascript:void(0)">{{ $clients->address1 }}</a>
                                            </div>
                                            <div class="col-sm-3">
                                                <i class="glyphicon glyphicon-earphone"></i>
                                                <a href="javascript:void(0)">{{ $clients->phone_number }}</a>
                                            </div>
                                            <div class="col-sm-2">
                                                <i class="entypo-doc-text"></i>
                                                TIN: <a href="javascript:void(0)">{{ $clients->tin_number }}</a>
                                            </div>
                                            <div class="col-sm-2">
                                            </div>
                                            <div class="col-sm-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <br>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped datatable" id="table-2">
                                        <thead>
                                            <tr>

                                                <th><strong>Service Name</strong></th>
                                                <th><strong>Status</strong></th>
                                                <th><strong>Action</strong></th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($result as $row)
                                                <tr>
                                                    <td>{{ $row->service_name }}</td>
                                                    <td>
                                                        @if ($row->status == 'Activate')
                                                            <span style="color:green;"><strong> Active </strong><span>
                                                                @elseif ($row->status == 'Deactivate')
                                                                    <span
                                                                        style="color:rgb(123, 123, 123);"><strong>Inactive</strong></span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-primary dropdown-toggle"
                                                                data-toggle="dropdown">
                                                                Action <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-primary" role="menu">
                                                                <li><a href="">Disable</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('common.footer')
        </div>
    </div>

    <!------ Modal Here -------------->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> Assign Service </h4>
                </div>
                <form id="assignForm" action="{{ route('client.addservice') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12" style="padding:43px;">
                                <div class="form-group" style="display: none;">
                                    <label for="field-1" class="control-label">Client</label>
                                    <select name="client" class="selectboxit">
                                        <optgroup label="Clients">
                                            <option value="{{ $clients->id }}">{{ $clients->name }}</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="icheck-list">
                                                @php
                                                    $halfCount = ceil(count($services) / 2);
                                                @endphp
                                                @foreach ($services as $index => $row)
                                                    @if ($index < $halfCount)
                                                        <li>
                                                            <input tabindex="5" value="{{ $row->id }}"
                                                                name="client_service[]" type="checkbox"
                                                                class="icheck"
                                                                id="minimal-checkbox-{{ $row->id }}">
                                                            <label
                                                                for="minimal-checkbox-{{ $row->id }}">{{ $row->service_name }}</label>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="icheck-list">
                                                @php
                                                    $halfCount = ceil(count($services) / 2);
                                                @endphp
                                                @foreach ($services as $index => $row)
                                                    @if ($index >= $halfCount)
                                                        <li>
                                                            <input tabindex="5" value="{{ $row->id }}"
                                                                name="client_service[]" type="checkbox"
                                                                class="icheck"
                                                                id="minimal-checkbox-{{ $row->id }}">
                                                            <label
                                                                for="minimal-checkbox-{{ $row->id }}">{{ $row->service_name }}</label>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                        <button type="submit" name="submit" class="btn submitBtn btn-info">Submit</button>

                    </div>
                </form>
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
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <!--Footer-->
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

</body>

</html>
