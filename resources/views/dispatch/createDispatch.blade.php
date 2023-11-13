<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Dispatch</title>

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
                <li class="active"><strong>Dispatch</strong></li>
            </ol>

            <h2>Dispatch</h2>
            <br />

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Form to Create a New Dispatch
                            </div>

                            <div class="panel-options">
                                <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1"
                                    class="bg"><i class="entypo-cog"></i></a>

                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>

                            </div>
                        </div>


                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('pdf.dispatch') }}"
                                class="form-horizontal form-groups-bordered">
                                @csrf
                                <!--First Row-->
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Select Client</label>
                                            <div class="col-sm-5">
                                                <select id="clientSelected" class="select2" data-allow-clear="true"
                                                    data-placeholder="Select client...">
                                                    <option></option>
                                                    <optgroup label="Clients">
                                                        @foreach ($clients as $client)
                                                            <option value="{{ $client->id }}">
                                                                {{ $client->name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Date</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="date_of_disp"
                                                    class="form-control datepicker" data-start-view="1"
                                                    placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" style="display:none;">
                                        <div class="form-group">
                                            <input id="clientAddress" class="form-control" type="text"
                                                name="client_address" value="{{ $client->address1 }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="display:none;">
                                        <div class="form-group">
                                            <input id="clientName" class="form-control" type="text"
                                                name="selected_client" value="{{ $client->name }}">
                                        </div>
                                    </div>
                                </div>
                                <!--Second Row-->
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <h3>Documents</h3>
                                    </div>
                                    <div class="col-md-4 text-right">

                                    </div>
                                </div>
                                <div class="panel panel-primary" data-collapsed="0"
                                    style="background-color:#f0f0f0;padding-bottom:8px;">
                                    <div class="row">

                                        <div class="col-sm-2" style="padding-left:20px;">
                                            <label for="field-3" class="control-label">Date Received</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="field-3" class="control-label">Description</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="field-3" class="control-label">Qty</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="field-3" class="control-label">Checkout</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="field-3" class="control-label">Narration</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="displayDocRec" id="docFromTask">

                                </div>
                                <br />
                                <hr />
                                <br />
                                <!--Custom Dispatch-->
                                <div class="panel panel-primary" data-collapsed="0"
                                    style="background-color:#f0f0f0;padding-bottom:8px;padding-right:12px;">
                                    <div class="row">
                                        <div class="col-sm-5" style="padding-left:20px;">
                                            <label for="field-3" class="control-label">Custom Dispatch</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="field-3" class="control-label"> Checkout</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="field-3" class="control-label"> Narration</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <input type="text" name="cust_disp_desc" class="form-control"
                                            placeholder="Add Description">
                                    </div>

                                    <div class="col-sm-3">
                                        <input type="text" name="cust_disp_checkout" class="form-control"
                                            placeholder="Checkout">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="cust_disp_narration" class="form-control"
                                            placeholder="Add Narration">
                                    </div>


                                </div>

                                <div class="row" style="padding:20px;">
                                    <div class="">
                                        <label for="field-3" class="control-label">Note</label>
                                        <textarea rows="3" name="dispatch_note" class="form-control autogrow" placeholder="Enter your note"></textarea>
                                    </div>
                                </div>

                                <div class="row" style="padding:20px;">
                                    <div class="">
                                        <button type="submit" style="float:right;"
                                            class="btn btn-primary btn-icon icon-right">
                                            Add Dispatch <i class="entypo-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#clientSelected').on('change', function() {
                        var client = this.value;
                        $.ajax({
                            type: 'get',
                            url: '{{ route('dispatch.docs') }}?id=' + client,
                            success: function(response) {
                                $.each(response, function(key, value) {
                                    $('#docFromTask').append(`
                            <div class="row" style="margin-bottom:5px;">
                            <div class="col-sm-2" style="padding-left:20px;">
                                <input type="text" name="date_doc_receive[]" value="${value.dateReceived}" class="form-control" style="pointer-events:none;">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="disp_doc_desc[]" value="${value.note}" class="form-control" style="pointer-events:none;">
                            </div>
                            <div class="col-sm-1">
                                <input type="text" name="disp_doc_qty[]" value="${value.quantity}" class="form-control" style="pointer-events:none;">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="disp_doc_chckout[]" class="form-control" placeholder="Checkout">
                            </div>
                            <div class="col-sm-3" style="padding-right:15px;">
                                <input type="text" name="disp_doc_narration[]" class="form-control" placeholder="Add Narration">
                            </div>
                            </div>
                            `);
                                });
                            },
                            error: function(error) {
                                alert("hello mission fail");
                            }
                        });
                        $.ajax({
                            type: 'GET',
                            url: '{{ route('dispatch.client') }}?id=' + client,
                            success: function(response) {
                                $.each(response, function(key, value) {
                                    $('#clientAddress').val(value.address1);
                                    $('#clientName').val(value.name);
                                })
                            },
                            error: function(response) {
                                alert('error occured');
                            }
                        });
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
