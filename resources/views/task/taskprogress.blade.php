<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mars ERP" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ Storage::url('images/') }}">

    <title>{{ isset($title) ? $title : 'Default Title' }} | Report </title>

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
                <li class="active"><strong>Tasks update</strong></li>
            </ol>

            <div class="row">
                <div class="col-md-3">
                    <h2>Task update</h2>
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
                <div class="col-md-3">

                </div>
            </div>
            <!--Main Content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="member-entry">
                        <div class="member-details">
                            <h4>
                                Service name: <a href="javascript:void(0);" style="text-transform: capitalize;">
                                    {{ $mainTask->client->clientserv->serv->service_name }}</a>
                            </h4>
                            <!-- Details with Icons -->
                            <div class="row info-list">
                                <div class="col-sm-4">
                                    <i class="entypo-user" style="color: #1414ab; text-transform:capitalize;"></i>
                                    <strong> Senior:</strong><a href="javascript:void(0)"
                                        style="text-transform:capitalize;">
                                        {{ $mainTask->userAssign->name ?? null }}</a>
                                </div>
                                <div class="col-sm-4">
                                    <i class="entypo-user" style="color: #747474;"></i>
                                    <strong> Junior: </strong> <a href="javascript:void(0)"
                                        style="text-transform:capitalize;">
                                        {{ $mainTask->juniorAssign->name ?? null }}</a>
                                </div>
                                <div class="col-sm-4">
                                    <i class="entypo-doc"></i>
                                    <strong> Client:</strong><a href="javascript:void(0)"
                                        style="text-transform:capitalize;">
                                        {{ $mainTask->client->name }}</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Task Progress Bar-->
            @include('task.progressbar.progressbardata')
            <!--End Task Progess Bar -->

            <!--Task Pre and Post checklist -->
            <div class="row">
                <!--Pre check attactment-->
                @if ($completePre)
                    @if ($completePre->status == 'yes')
                        @include('task.checklist.complete_pre_checklist')
                    @else
                        @include('task.checklist.partial_pre_checklist')
                    @endif
                @endif

                <!-- Pre-check attachment -->
                @if ($completePost)
                    @if ($completePost->status == 'yes')
                        @include('task.checklist.complete_post_checklist')
                    @else
                        @include('task.checklist.partial_post_checklist')
                    @endif
                @endif


            </div>
            <!-- Task Comments and Notifications -->
            @include('task.comment.commentdata')


            <!------ Modal Here For Complete -------------->
            <div class="modal fade" id="modal-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Complete Task</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            Are you sure you want to complete this task?
                        </div>
                        <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-1">
                                <a style="cursor: pointer;" type="button" class="btn btn-success"
                                    href="#">Yes</a>
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
                        <br />
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
            <!------ Modal Here For Suspend -------------->
            <div class="modal fade" id="modal-3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Complete Task</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            Are you sure you want to suspend this task?
                        </div>
                        <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-1">
                                <a style="cursor: pointer;" type="button" class="btn btn-danger"
                                    href="#">Yes</a>
                            </div>
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
                        <br />
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
            <!--Task Progress Bar-->
            <script>
                $(document).ready(function() {
                    // Function to update progress
                    var user = @json($mainTask);
                    var progressLevel = @json($completePost);

                    function updateProgress($task, percent) {
                        $task.removeClass("active").addClass("completed");
                        $('.progress-indicator').css('width', percent + '%');
                    }
                    if (user.job_status === 'Active') {
                        updateProgress($('#task-start'), 0);
                    }
                    if (progressLevel) {
                        if (progressLevel.status === 'yes') {
                            updateProgress($('#task-mid'), 30);
                        }

                    }


                    // Initialize progress bar margin
                    var margin = '12%';
                    $('.progress-indicator').parent().css({
                        marginLeft: margin,
                        marginRight: margin
                    });
                });
            </script>
            <!--Sent Post to Database -->
            <script>
                $(document).ready(function() {
                    //var taskPost = mainPost;
                    $("#task-post-form").on('submit', function(e) {
                        e.preventDefault();
                        let formData = $(this).serialize();
                        let postData = $('#postData').val();
                        //var userID = $('#userId').val();
                        //var taskID = $('#taskId').val();

                        var newPost = '<p id="main-post">' + postData + '</p>';
                        //$('#main-post').append(newPost);
                        $(this)[0].reset();
                        $.ajax({
                            type: 'POST',
                            url: '/save-post',
                            data: formData,
                            success: function(response) {
                                /* $.each(response, function(key, value) {
                                     $('#main-post').append(value.post);
                                 });*/
                                $('#main-post').append(newPost);
                            },
                            error: function(error) {
                                alert("There are error");
                                console.error(error);
                            }
                        });
                    });
                });
            </script>

            @include('common.footer')
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
