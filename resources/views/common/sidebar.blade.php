<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <h1 class="" style="color:white;font-weight:bold;">Mars</h1>
                <!--   <a href="index.html">
                        <img src="assets/images/logo@2x.png" width="120" alt="" />
                    </a> -->
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="active opened active">
                <a href="{{ URL::to('home') }}">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="entypo-users"></i>
                    <span class="title">Clients</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ URL::to('clients') }}">
                            <span class="title">Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('createClient') }}">
                            <span class="title">Add Client</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('createContactPerson') }}">
                            <span class="title">Add Contact Person</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ URL::to('tasks') }}">
                    <i class="glyphicon glyphicon-tasks"></i>
                    <span class="title">Tasks</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('services') }}">
                    <i class="glyphicon glyphicon-th-large"></i>
                    <span class="title">Services</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('dispatches') }}">
                    <i class="entypo-monitor"></i>
                    <span class="title">Dispatch</span>
                    <span class="badge badge-secondary">8</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('reminder') }}">
                    <i class="glyphicon glyphicon-time"></i>
                    <span class="title">Reminder</span>
                </a>
            </li>

            <li>
                <a href="{{ URL::to('policies') }}">
                    <i class="glyphicon glyphicon-list"></i>
                    <span class="title">Policies</span>
                </a>
            </li>

            <li>
                <a href="{{ URL::to('template') }}">
                    <i class="glyphicon glyphicon-file"></i>
                    <span class="title">Template</span>
                    <span class="badge badge-info badge-roundless" style="border-radius:3px;">New
                        Items</span>
                </a>
            </li>

            <li>
                <a href="{{ URL::to('employees') }}">
                    <i class="entypo-users"></i>
                    <span class="title">Employees</span>
                </a>
            </li>

            <li class="">
                <a href="javascript:void(0)">
                    <i class="entypo-users"></i>
                    <span class="title">Users</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ URL::to('userlist') }}">
                            <span class="title">User List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('adduser') }}">
                            <span class="title">Add User</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="javascript:void(0)">
                    <i class="entypo-briefcase"></i>
                    <span class="title">Reports</span>
                </a>
                <ul>


                    <li>
                        <a href="{{ URL::to('document-received') }}">
                            <span class="title">Document Received</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('daily') }}">
                            <span class="title">Daily Reports</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('weekly') }}">
                            <span class="title">Weekly Reports</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('monthly') }}">
                            <span class="title">Monthly Reports</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('yearly') }}">
                            <span class="title">Yearly Reports</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="">
                <a href="javascript:void(0)">
                    <i class="glyphicon glyphicon-cog"></i>
                    <span class="title">Settings</span>
                </a>
                <ul>

                    <li>
                        <a href="{{ URL::to('/role-permission') }}">
                            <span class="title">Role Permission</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('profilesetting') }}">
                            <span class="title">Profile Settings</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('generalsetting') }}">
                            <span class="title">General Settings</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('modulesetting') }}">
                            <span class="title">Module Settings</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('hrmsetting') }}">
                            <span class="title">HRM Settings</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</div>
