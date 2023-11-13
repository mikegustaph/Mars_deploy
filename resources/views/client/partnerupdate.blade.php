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
                <li class="active"><strong>Add Clients</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-4">
                    <h2>Partnership Client Update</h2>
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
                    @if (session('error'))
                        <div id="flash-message" class="alert alert-danger alert-dismissible text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Oohps! </strong>{{ session('error') }}
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
                                Partnership Company Details
                            </div>

                            <div class="panel-options">

                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">

                            <form action="{{ url('/partnership/' . $client->id) }}" method="POST" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group compnyname" id="compnyname">
                                            <label for="field-1" class="col-sm-4 control-label">Company Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" value="" class="form-control"
                                                    value="{{ $client->name }}" name="name" id="field-1"
                                                    placeholder="Enter Company Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Company Address
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" value="{{ $client->address1 }}"
                                                    class="form-control" name="address1" id="field-1"
                                                    placeholder="Enter Street Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"></label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="plot"
                                                    id="field-1" placeholder="Plot No">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="block"
                                                    id="field-1" placeholder="Block">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="house"
                                                    id="field-1" placeholder="House">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"></label>
                                            <div class="col-sm-7">
                                                <input type="text" value="{{ $client->city }}"
                                                    class="form-control" name="city" id="field-1"
                                                    placeholder="Enter City" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Phone </label>
                                            <div class="col-sm-7">
                                                <input type="tel" value="{{ $client->phone_number }}"
                                                    class="form-control" name="phone_number" id="field-1"
                                                    placeholder="+255756540000" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Email </label>
                                            <div class="col-sm-7">
                                                <input type="email" value="{{ $client->email }}"
                                                    class="form-control" name="email" id="field-1"
                                                    placeholder="clientmail@mail.com" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> TIN </label>
                                            <div class="col-sm-7">
                                                <input type="number" value="{{ $client->tin_number }}"
                                                    class="form-control" data-mask="*** *** ***" name="tin_number"
                                                    id="field-1" placeholder="000-000-000" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> TIN Certificate
                                            </label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control" name="tincert"
                                                    accept=".pdf" id="field-file" placeholder="Placeholder">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->tinCert) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">VRN is Available?
                                            </label>
                                            <div class="col-sm-1">
                                                <input id="vrn" type="checkbox" onclick="toggleInputs()"
                                                    class="form-control" name="vrnAvailable" id="field-file">
                                            </div>
                                        </div>
                                        <div class="form-group" id="vrnNum" style="display: none;">
                                            <label for="field-1" class="col-sm-4 control-label">VRN </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="vrn"
                                                    accept=".pdf" id="field-file" placeholder="Enter VRN">
                                            </div>
                                        </div>
                                        <div class="form-group" id="vrnAttach" style="display: none;">
                                            <label for="field-1" class="col-sm-4 control-label">Certificate of
                                                VAT</label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control" name="certVat"
                                                    accept=".pdf" id="field-file">
                                            </div>
                                        </div>
                                        <script>
                                            var checkbox = document.querySelector("#vrn");
                                            var vrnInputs = document.querySelector("#vrnNum");
                                            var vrnFileInput = document.querySelector("#vrnAttach");

                                            function toggleInputs() {
                                                if (checkbox.checked) {
                                                    vrnInputs.style.display = "block";
                                                    vrnFileInput.style.display = "block";
                                                    vrnInputs.style.opacity = "0";
                                                    setTimeout(function() {
                                                        vrnInputs.style.opacity = "1";
                                                    }, 0);
                                                } else {
                                                    vrnInputs.style.opacity = "0";
                                                    setTimeout(function() {
                                                        vrnInputs.style.display = "none";
                                                        vrnFileInput.style.display = "none";
                                                    }, 500);
                                                }
                                            }
                                        </script>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Tax Region </label>
                                            <div class="col-sm-7">
                                                <select name="taxRegion" class="select2" data-allow-clear="true"
                                                    data-placeholder="Select Tax Region">
                                                    <option></option>
                                                    <optgroup label="Select Tax Region">
                                                        <option value="">Ilala
                                                        </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Certificate of Reg
                                            </label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control"
                                                    value="{{ $client->certReg }}" name="certReg" accept=".pdf"
                                                    id="field-file" placeholder="Placeholder">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->CertofReg) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Certificate of
                                                Extract</label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control"
                                                    value="{{ $client->certExtr }}" name="certExtr" accept=".pdf"
                                                    id="field-file" placeholder="">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->CertExtr) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Partnership
                                                Deed</label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control" name="partnershipDeed"
                                                    accept=".pdf" id="field-file">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->partnershipDeed) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
                                        </div>

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Fiscal Year </label>
                                            <div class="col-sm-7">
                                                <select name="fiscalYear" class="select2" data-allow-clear="true">
                                                    <option></option>
                                                    <optgroup label="Fiscal">
                                                        <option value="">Jan to Dec</option>
                                                        <option value="">July to June</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>Assign Contact Person</h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <button onclick="jQuery('#modal-1').modal('show')" type="button"
                                                    style="float:right;" class="btn btn-primary">
                                                    Add Shareholder
                                                </button>
                                            </div>
                                        </div>
                                        <table class="table table-bordered datatable" id="table-4">
                                            <thead>
                                                <th><strong>Name</strong></th>
                                                <th><strong>Percentage</strong></th>
                                                <th><strong>Action</strong></th>
                                            </thead>
                                            <tbody>
                                                @foreach ($assignContactPerson as $row)
                                                    <tr>
                                                        <td>{{ $row->contactPersonPtr->first_name }}</td>

                                                        <td id="sharePercent">{{ $row->share_percent }}<span>%</span>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                    class="btn btn-primary dropdown-toggle"
                                                                    data-toggle="dropdown">
                                                                    Action <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-primary"
                                                                    role="menu">
                                                                    <li><a style="cursor: pointer"
                                                                            onclick="jQuery('#modal-3').modal('show');">Edit</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li><a style="cursor: pointer"
                                                                            onclick="jQuery('#modal-2').modal('show');">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <th><strong>Total</strong></th>
                                                <th><strong></strong></th>
                                                <th><strong></strong></th>
                                            </tfoot>
                                        </table>
                                        <script type="text/javascript"></script>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" id="submit-btn" style="float:right;" class="btn btn-success">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--Footer-->
            @include('common.footer')
        </div>
    </div>
    <!------ Modal Here For Assign Contact Person-------------->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> Add Shareholder </h4>
                </div>
                <form action="{{ route('client.set-Contact-Person') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Select Contact Person</label>
                                    <div class="col-sm-5">
                                        <select name="contactPerson" class="selectboxit" data-first-option="false"
                                            data-allow-clear="true" data-placeholder="Select Contact Person...">
                                            <option>Select Contact Person</option>
                                            @foreach ($contactPer as $person)
                                                <option value="{{ $person->id }}">{{ $person->first_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="field-1" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-7">
                                        <input type="text" value="{{ $client->id }}" class="form-control"
                                            name="client" id="field-1">
                                    </div>
                                </div>

                                <br /><br />
                                <div class="form-group">
                                    <label for="field-2" class="col-sm-4 control-label">Percent %</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="sharePercent" min="0" max="100"
                                            step="0.01" class="sharepercent form-control" id="field-2"
                                            placeholder="Enter Percent of share">
                                        <span id="share_error" style="color:red;font-size:10px;"></span>
                                    </div>
                                </div>
                            </div>


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
    <!------ Modal Here For Edit Contact Person-------------->
    <div class="modal fade" id="modal-3">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> Edit Shareholder </h4>
                </div>
                <form action="{{ url('edit-Contact-Person') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-4 control-label">Selected Contact
                                        Person</label>
                                    <div class="col-sm-7">
                                        <input type="text" value="" class="form-control"
                                            name="edit-contact-person" id="field-1" disabled>
                                    </div>
                                </div>
                                <div class="form-group" style="display: none;">
                                    <label for="field-1" class="col-sm-4 control-label"></label>
                                    <div class="col-sm-7">
                                        <input type="text" value="{{ $client->id }}" class="form-control"
                                            name="client" id="field-1">
                                    </div>
                                </div>
                                <br /><br />
                                <div class="form-group">
                                    <label for="field-2" class="col-sm-4 control-label">Percent %</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="sharePercent" min="0" max="100"
                                            step="0.01" class="shareholderperc form-control" id="field-2"
                                            placeholder="Enter Percent of share">
                                    </div>
                                </div>
                            </div>
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
    <!------ Modal Here Delete-------------->
    <div class="modal fade" id="modal-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row" style="padding:30px;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <h4 class="modal-title">Are you sure you want to delete this user?</h4>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-1">
                            <a style="cursor: pointer;" type="button" class="btn btn-danger"
                                href="{{ URL::to('/deleteuser') }}">Yes</a>
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
    <!-- Imported styles on this page -->
    <script>
        $(document).ready(function() {
            $('.sharepercent').on('input', function() {
                if ($(this).val() >= 100) {
                    $('#share_error').text('Value is more than 100%');
                    $('.sharepercent').css('border', '1px solid red');

                } else {
                    $('#share_error').text('');
                    $('.sharepercent').css('');
                }
            });
        });
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
</body>

</html>
