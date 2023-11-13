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
                <li class="active"><strong>Edit Client</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-4">
                    <h2>Sole Proprietor Update</h2>
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
                                Sole Proprietor Details
                            </div>

                            <div class="panel-options">

                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">

                            <form action="{{ url('/soleproprietor/' . $client->id) }}" method="POST" role="form"
                                class="form-horizontal form-groups-bordered">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group clientname" id="clientname">
                                            <label for="field-1" class="col-sm-4 control-label">Client Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="{{ $client->name }}"
                                                    name="clientname" id="field-1" placeholder="Enter Client Name">
                                            </div>
                                        </div>
                                        <div class="form-group clientname">
                                            <label for="field-1" class="col-sm-4 control-label">Trading As</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control"
                                                    value="{{ $client->tradeas }}" name="tradeas" id="field-1"
                                                    placeholder="Enter Trade Name">
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
                                                    id="field-1" placeholder="000-000-000" required>
                                            </div>
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
                                                    class="form-control" name="vrnAvailable" id="field-file">

                                            </div>
                                        </div>
                                        <div class="form-group" id="vrnNum" style="display: none;">
                                            <label for="field-1" class="col-sm-4 control-label">VRN </label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control"
                                                    value="{{ $client->vrn }}" name="vrn" id="field-file"
                                                    placeholder="Enter VRN">
                                            </div>
                                        </div>
                                        <div class="form-group" id="vrnAttach" style="display: none;">
                                            <label for="field-1" class="col-sm-4 control-label">Certificate of
                                                VAT</label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control"
                                                    value="{{ $client->certVat }}" name="certVat" accept=".pdf"
                                                    id="field-file">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->certVat) }}"
                                                class="btn btn-primary btn-sm btn-icon icon-left" target="_blank">
                                                <i class="entypo-info"></i> View </a>
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
                                                    value="{{ $client->CertofReg }}" name="certReg" accept=".pdf"
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
                                                    value="{{ $client->CertofReg }}" name="certExtr" accept=".pdf"
                                                    id="field-file" placeholder="">
                                            </div>
                                            <a href="{{ Storage::url('public/uploads/' . $client->CertofReg) }}"
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
                                        <hr />
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Select Contact Person</label>
                                            <div class="col-sm-7">
                                                <select name="contactPerson" class="select2" data-allow-clear="true"
                                                    data-placeholder="Select Contact Person" multiple>
                                                    <option></option>
                                                    <optgroup label="Contact Person">
                                                        @foreach ($contactPer as $person)
                                                            <option value="{{ $person->id }}">
                                                                {{ $person->first_name }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            <!--Footer-->
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
