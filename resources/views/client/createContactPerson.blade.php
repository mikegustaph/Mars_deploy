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
                <li class="active"><strong>Add Contact Person</strong></li>

            </ol>
            <div class="row">
                <div class="col-md-4">
                    <h2>Create a Contact Person</h2>
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
            </div>
            <!--Form Start-->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                Form to Create Contact Person
                            </div>

                            <div class="panel-options">

                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="{{ route('client.createContactPerson') }}" method="POST" role="form"
                                class="form-horizontal form-groups-bordered" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="first_name" class="form-control"
                                                    id="field-1" placeholder="Enter first name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Middle Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="middle_name" class="form-control"
                                                    id="field-1" placeholder="Enter middle name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Last Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="last_name" class="form-control"
                                                    id="field-1" placeholder="Enter last name" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Mobile Number </label>
                                            <div class="col-sm-8">
                                                <input type="tel" name="phone" class="form-control"
                                                    id="field-1" placeholder="+25576589090" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Email </label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control"
                                                    id="field-1" placeholder="clientmail@mail.com" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> TIN </label>
                                            <div class="col-sm-8">
                                                <input type="number" max="999999999" name="tin"
                                                    class="form-control" data-mask="*** *** ***" id="numberInput"
                                                    placeholder="00-00-00-00" required>
                                            </div>
                                            <script>
                                                var numberInput = document.getElementById('numberInput');
                                                numberInput.addEventListener('input', function() {
                                                    var value = this.value;
                                                    if (value.length > 9) {
                                                        this.value = value.slice(0, 9);
                                                    }
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label">Tin
                                                Certificate</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="tin_cert" accept=".pdf"
                                                    class="form-control" id="field-1" placeholder="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> Nationality </label>
                                            <div class="col-sm-4">
                                                <input tabindex="5" type="radio" value="resident" class=""
                                                    id="minimal-radio-resi" onclick="toggleHide()" name="radio"
                                                    required>
                                                <label for="minimal-checkbox-1">Resident</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <input tabindex="5" type="radio" value="non-resident"
                                                    class="" id="minimal-radio-non-res"
                                                    onclick="toggleInputs()" name="radio" required>
                                                <label for="minimal-checkbox-1">Non-resident</label>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function toggleInputs() {
                                                var nonresident = document.querySelector("#minimal-radio-non-res");
                                                var passportNumber = document.querySelector("#passportNumber");
                                                var passportAttach = document.querySelector("#passportAttach");

                                                if (nonresident.checked) {
                                                    passportNumber.style.display = "block";
                                                    passportAttach.style.display = "block";
                                                    passportNumber.style.opacity = "0";
                                                    setTimeout(function() {
                                                        passportNumber.style.opacity = "1";
                                                    }, 0);
                                                } else {
                                                    passportNumber.style.opacity = "0";
                                                    setTimeout(function() {
                                                        passportNumber.style.display = "none";
                                                        passportAttach.style.display = "none";
                                                    }, 500);
                                                }
                                            }

                                            function toggleHide() {
                                                var nonresident = document.querySelector("#minimal-radio-resi");
                                                var passportNumber = document.querySelector("#passportNumber");
                                                var passportAttach = document.querySelector("#passportAttach");

                                                if (nonresident.checked) {
                                                    passportNumber.style.display = "none";
                                                    passportAttach.style.display = "none";
                                                    passportNumber.style.opacity = "0";
                                                    setTimeout(function() {
                                                        passportNumber.style.opacity = "1";
                                                    }, 0);
                                                } else {
                                                    passportNumber.style.opacity = "0";
                                                    setTimeout(function() {
                                                        passportNumber.style.display = "none";
                                                        passportAttach.style.display = "none";
                                                    }, 500);
                                                }
                                            }
                                        </script>
                                        <div class="form-group" id="passportNumber" style="display:none;">
                                            <label for="field-1" class="col-sm-3 control-label"> Passport Number
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="passport" class="form-control"
                                                    id="field-1" placeholder="Passport Number">
                                            </div>
                                        </div>
                                        <div class="form-group" id="passportAttach" style="display:none;">
                                            <label for="field-1" class="col-sm-3 control-label"> Passport
                                                Copy</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="passportcopy"
                                                    accept=".jpg,.jpeg,.pdf" id="field-file" placeholder="">
                                                @error('passportcopy')
                                                    <div class="alert alert-danger alert-dismissible text-center">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> National ID </label>
                                            <div class="col-sm-8">
                                                <input type="number" maxlength="20" name="nida"
                                                    class="form-control" id="nida"
                                                    placeholder="National-ID Number" required>
                                            </div>
                                            <script>
                                                var numberInput = document.getElementById('nida');
                                                numberInput.addEventListener('input', function() {
                                                    var value = this.value;
                                                    if (value.length > 20) {
                                                        this.value = value.slice(0, 20);
                                                    }
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="field-1" class="col-sm-3 control-label"> NIDA Copy</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="nidacopy"
                                                    accept=".jpg,.jpeg,.pdf" id="field-file" placeholder="" required>
                                                @error('nidacopy')
                                                    <div class="alert alert-danger alert-dismissible text-center">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="field-1" class="col-sm-7 control-label"> </label>
                        <div class="col-sm-5">
                            <button type="submit" id="submit-btn" style="float:right;" class="btn btn-success">
                                Add Contact Person <i class="entypo-user-add"></i>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--Footer-->
            @include('common.footer')
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
