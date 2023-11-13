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
                <div class="col-md-3">
                    <h2>Limited Client Update</h2>
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
            <!--Form Start-->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                Limited Company Details
                            </div>

                            <div class="panel-options">

                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="{{ url('/limited/' . $client->id) }}" method="POST" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group compnyname" id="compnyname">
                                            <label for="field-1" class="col-sm-4 control-label">Company Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="{{ $client->name }}"
                                                    name="name" id="field-1" placeholder="Enter Company Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label">Company Address
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control"
                                                    value="{{ $client->address1 }}" name="address1" id="field-1"
                                                    placeholder="Enter Street Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"></label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" value="{{ $client->plot }}"
                                                    name="plot" id="field-1" placeholder="Plot No">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control"
                                                    value="{{ $client->block }}" name="block" id="field-1"
                                                    placeholder="Block">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control"
                                                    value="{{ $client->house }}" name="house" id="field-1"
                                                    placeholder="House">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"></label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control"
                                                    value="{{ $client->city }}" name="city" id="field-1"
                                                    placeholder="Enter City" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Phone </label>
                                            <div class="col-sm-7">
                                                <input type="tel" class="form-control"
                                                    value="{{ $client->phone_number }}" name="phone_number"
                                                    id="field-1" placeholder="+255756540000" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Email </label>
                                            <div class="col-sm-7">
                                                <input type="email" class="form-control"
                                                    value="{{ $client->email }}" name="email" id="field-1"
                                                    placeholder="clientmail@mail.com" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> TIN </label>
                                            <div class="col-sm-7">
                                                <input type="number" class="form-control"
                                                    value="{{ $client->tin_number }}" name="tin_number"
                                                    min="0" max="999999999" id="tinumber"
                                                    placeholder="000-000-000" required>
                                            </div>
                                            <script>
                                                var numberInput = document.getElementById('tinumber');
                                                numberInput.addEventListener('input', function() {
                                                    var value = this.value;
                                                    if (value.length > 9) {
                                                        this.value = value.slice(0, 9);
                                                    }
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> TIN Certificate
                                            </label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control"
                                                    value="{{ $client->tinCert }}" name="tincert" accept=".pdf"
                                                    id="field-file" placeholder="Placeholder">
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
                                                    class="" name="vrnAvailable" id="field-file">
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
                                            <label for="field-1" class="col-sm-4 control-label"> Certificate of
                                                Incorporation</label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control"
                                                    value="{{ $client->certExtr }}" name="certIncorporation"
                                                    accept=".pdf" id="field-file" placeholder="">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->CertExtr) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
                                        </div>
                                        <div class="form-group forlimited">
                                            <label for="field-1" class="col-sm-4 control-label"> MEMARTS</label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control"
                                                    value="{{ $client->memart }}" name="memart" accept=".pdf"
                                                    id="field-file" placeholder="">

                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->CertIncorp) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-4 control-label"> Fiscal Year </label>
                                            <div class="col-sm-7">
                                                <select name="fiscalYear" class="select2" data-allow-clear="true">
                                                    <optgroup label="Fiscal">
                                                        <option value="Jan_to_Dec">Jan to Dec</option>
                                                        <option value="July_to_June">July to June</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <br />
                                        <hr />
                                        <br />
                                        <div class="form-group forlimited">
                                            <label for="field-1" class="col-sm-3 control-label"> Authorised Shares
                                            </label>
                                            <div class="col-sm-3">
                                                <input type="number" id="authorised" class="form-control"
                                                    name="authorised_share" id="field-file"
                                                    value="{{ $client->authorised_share }}"
                                                    placeholder="Enter Authorized">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" id="authorised_value" class="form-control"
                                                    name="authorised_value" id="field-file"
                                                    value="{{ $client->authorised_value }}" placeholder="Value">
                                            </div>
                                            <div class="col-sm-3" style="pointer-events: none;">
                                                <input type="text" id="authorised_total" class="form-control"
                                                    name="authorised_total" id="field-file"
                                                    value="{{ $client->authorised_total }}" placeholder="Total">
                                            </div>
                                        </div>
                                        <div class="form-group forlimited">
                                            <label for="field-1" class="col-sm-3 control-label"> Paid up
                                                Shares</label>
                                            <div class="col-sm-3">
                                                <input type="text" id="paidup_share" class="form-control"
                                                    name="paidup_share" id="field-file"
                                                    value="{{ $client->paidup_share }}" placeholder="Enter Paid-up">
                                                <span id="share_error" style="color:red;font-size:10px;"></span>
                                            </div>
                                            <div class="col-sm-2" style="pointer-events: none;">
                                                <input type="text" value="{{ $client->paidup_value }}"
                                                    id="paidup_value" class="form-control" name="paidup_value"
                                                    id="field-file" placeholder="Value">
                                            </div>
                                            <div class="col-sm-3" style="pointer-events: none;">
                                                <input type="text" value="{{ $client->paidup_total }}"
                                                    id="paidup_total" class="form-control" name="paidup_total"
                                                    id="field-file" placeholder="Total">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var paidShareValue = $('#authorised_value');
                                        paidShareValue.on('input', function() {
                                            var paidShareValueResult = $('#paidup_value').val(paidShareValue.val());
                                        });

                                        $('#authorised, #authorised_value').on('input', function() {
                                            var authorisedValue = parseFloat($('#authorised').val()) || 0;
                                            var authorisedValueToMultiply = parseFloat($('#authorised_value').val()) || 0;
                                            var result = authorisedValue * authorisedValueToMultiply;
                                            $('#authorised_total').val(result);

                                        });
                                        $('#paidup_share,#paidup_value').on('input', function() {
                                            var authorisedValue = $('#authorised').val();
                                            var paidShare = parseFloat($('#paidup_share').val()) || 0;

                                            if (authorisedValue < paidShare) {
                                                $('#share_error').text('Value exceeds Authorized shares!');
                                                $('#paidup_share').css('border', '1px solid red');
                                            } else {
                                                var paidShareToMultiply = parseFloat($('#paidup_value').val()) || 0;
                                                var paidResult = paidShare * paidShareToMultiply;
                                                $('#paidup_total').val(paidResult);
                                                $('#share_error').text('');
                                            }
                                        });
                                    });
                                </script>
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
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Number of Share</th>
                                                <th>Percentage</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($assignContactPersonltd as $item)
                                                    <tr>
                                                        <td>{{ $item->contactPersonltd->first_name }}</td>
                                                        <td>{{ $item->position }}</td>
                                                        <td>{{ $item->number_shares }}</td>
                                                        <td>{{ $item->share_percent }}<span>%</span></td>
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
                                        </table>

                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
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
            <!------ Modal Here for Assign the Shareholder -------------->
            <div class="modal fade" id="modal-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title"> Add Shareholder </h4>
                        </div>
                        <form action="{{ route('client.set-Contact-Person-Limited') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12" style="padding:43px;">
                                        <div class="form-group">
                                            <label class="control-label">Select Contact Person</label>
                                            <select name="contactPerson" class="selectboxit"
                                                data-first-option="false" data-allow-clear="true"
                                                data-placeholder="Select Contact Person...">
                                                <option>Select Contact Person</option>
                                                @foreach ($contactPer as $person)
                                                    <option value="{{ $person->id }}">{{ $person->first_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Select Contact Person</label>
                                            <select name="position" class="selectboxit" data-first-option="false"
                                                data-allow-clear="true" data-placeholder="Select Position...">
                                                <option>Select Contact Person</option>
                                                <option value="director">Director
                                                </option>
                                                <option value="shareholder">Shareholder
                                                </option>
                                                <option value="other role">Other Role
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-2" class="control-label col-sm-12">Number
                                                Shares</label>
                                            <input type="number"id="shareholder" name="numberShare" step="0.01"
                                                class="form-control" id="field-2"
                                                placeholder="Enter Percent of share">
                                            <span id="shareholder_err" style="color: red; font-size:10px;"></span>
                                        </div>
                                        <br>
                                        <div class="form-group" style="display: none;">
                                            <label for="field-1" class="col-sm-4 control-label"></label>
                                            <div class="col-sm-7">
                                                <input type="text" value="{{ $client->id }}"
                                                    class="form-control" name="client" id="field-1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-2" class="control-label col-sm-12">Shareholding
                                                %</label>
                                            <input type="number" id="shareholder_per" name="shareholding"
                                                min="0" max="100" step="0.01" class="form-control"
                                                id="field-2" placeholder="" disabled>
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
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title"> Edit Shareholder </h4>
                        </div>
                        <form action="{{ url('edit-Contact-Person') }}" method="post"
                            enctype="multipart/form-data">
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
                                                <input type="text" value="{{ $client->id }}"
                                                    class="form-control" name="client" id="field-1">
                                            </div>
                                        </div>
                                        <br /><br />
                                        <div class="form-group">
                                            <label for="field-2" class="col-sm-4 control-label">Percent %</label>
                                            <div class="col-sm-5">
                                                <input type="number" name="sharePercent" min="0"
                                                    max="100" step="0.01"
                                                    class="shareholderperc form-control" id="field-2"
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
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
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
            <!--Footer-->
            @include('common.footer')
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#shareholder').on('input', function() {
                var paidShare = parseFloat($('#paidup_share').val()) ||
                    0; // Get the current value of 'paidup_share'
                var shareholder = parseFloat($(this).val()) || 0; // Get the current value of 'shareholder'

                if (shareholder > paidShare) {
                    $('#shareholder_err').text('Value exceeds Paid-up shares!');
                    $('#shareholder').css('border', '1px solid red');
                } else {
                    $('#shareholder_err').text(''); // Clear the error message
                    $('#shareholder').css('border', ''); // Clear the red border
                    var res = (shareholder / paidShare) * 100;
                    $('#shareholder_per').val(res.toFixed(2))
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

</body>

</html>
