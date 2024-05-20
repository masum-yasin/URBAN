<!DOCTYPE html>
<!-- saved from url=(0088)http://localhost/urban_pathshala/admin/personal_info/personal_info_create?page_group=dev -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="W50kCrIwzP4s6GN8s8IxZdn8WCGVlNOoDs9QYlHh">
    <meta name="description" content="School Management System Admin Panel">
    <title>Pathshala School and College | School Management System</title>

    <link rel="shortcut icon" type="image/x-icon"
        href="http://localhost/urban_pathshala/admin/personal_info/files/favicon/thumbnail/e12a595623be64947bc9d11e392eba1c6cbdf1e1.png">
    <link href="{{ asset('') }}assets/style.css" rel="stylesheet">
    <link rel="preload" href="{{ asset('') }}assets/admin-template-1.css" as="style">
    <link rel="stylesheet" href="{{ asset('') }}assets/admin-template-1.css">

    <link rel="stylesheet" href="{{ asset('') }}assets/jquery.fileupload.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/bootstrap-select.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/blueimp-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/jquery.datetimepicker.css">

    <script src="{{ asset('') }}assets/jquery.min.js.download"></script>
    <script src="{{ asset('') }}assets/popper.min.js.download"></script>
    <script src="{{ asset('') }}assets/bootstrap.js.download"></script>
    <script src="{{ asset('') }}assets/spectrum.js.download"></script>
    <script src="{{ asset('') }}assets/bootstrap-select.js.download"></script>
    <script src="{{ asset('') }}assets/jquery-ui.min.js.download"></script>
    <script src="{{ asset('') }}assets/jquery.datetimepicker.full.min.js.download"></script>

    <style>
        .modal-header .close {
            border-radius: 50%;
            padding: 4px 7px !important;
            margin: 0px;
            opacity: 1;
        }

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #content {
            width: 100%;
            min-height: 100vh;
            transition: all 0.3s;
        }

        .dropdown-menu {
            transform: translate3d(0px, 50px, 0px) !important;
            z-index: 1400;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #sidebarCollapse span {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="bg-primary">
            <!--  -->
            <div class="w-100 p-2 left-nav-user border-0 border-facebookm">
                <div class="media ">
                    <img class="rounded-circle" src="{{ asset('') }}assets/user.png" alt="" width="50">
                    <div class="media-body pl-2" role="button">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <h6 class="mb-0">admin</h6> system_analist_admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"
                                    href="http://localhost/urban_pathshala/admin/users/users_edit/2">
                                    <i class="fas fa-user-edit"></i> Edit Profile
                                </a>
                                <a class="dropdown-item"
                                    href="http://localhost/urban_pathshala/admin/users/change_password/2">

                                    <i class="fas fa-key"></i> Change Password
                                </a>
                                <a class="dropdown-item" href="http://localhost/urban_pathshala/admin/login/logout">
                                    <i class="fas fa-sign-out-alt"></i> Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav lavel-one flex-column p-0 pb-2 ">
                <li class="nav-item menu-one bg-facebookm  border-bottom border-facebookm">
                    <a class="nav-link text-white pl-2"
                        href="http://localhost/urban_pathshala/admin/dashboard">Dashboard</a>
                </li>


            </ul>

        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-md navbar-dark bg-header border-bottom">
                <button type="button" id="sidebarCollapse" class="btn btn-primary d-md-none">
                    <i class="fas fa-list"></i>
                    <span>Toggle Sidebar</span>
                </button>


                <div class="media">
                    <a class="navbar-brand text-primary font-weight-bold"
                        href="http://localhost/urban_pathshala/admin/dashboard">
                        <img class="mr-0"
                            src="{{ asset('') }}assets/162e8d1e85af4bae115e15960702f5599258cc64.png" alt="logo"
                            width="40">
                    </a>
                    <div class="media-body font-weight-bold">
                        <h5 class="mt-0 mb-0 header-color">Pathshala School and College</h5>
                        <p class="project_name"> School Management System</p>
                    </div>
                </div>


                <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse"
                    data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse  " id="navbarsExample02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link"
                                href="http://localhost/urban_pathshala/admin/personal_info/personal_info_create?page_group=dev#">
                                <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <ul class="nav justify-content-center ">
                        <li class="nav-item active">
                            <a class="nav-link"
                                href="http://localhost/urban_pathshala/admin/personal_info/personal_info_create?page_group=dev#">
                                <span class="sr-only">(current)</span></a>
                        </li>


                        <li class="nav-item py-1 bg-light border rounded-circle mr-2">

                            <a href="http://localhost/urban_pathshala/admin/admin_panel_settings/admin_panel_settings_edit/1?page_group=system_setup"
                                class="nav-link text-success"><i class="fas fa-cog zt-1 "></i> </a>
                        </li>
                        <li class="nav-item py-1 bg-light border rounded-circle mr-2">
                            <a class="nav-link text-danger"
                                href="http://localhost/urban_pathshala/admin/personal_info/personal_info_create?page_group=dev#"><i
                                    class="far fa-comment-dots zt-1 blink_me "></i> <span
                                    class="badge badge-danger badge-pill mt-n2 position-absolute">0</span></a>
                        </li>
                        <li class="nav-item py-1 bg-light border rounded-circle">
                            <a class="nav-link text-secondary"
                                href="http://localhost/urban_pathshala/admin/personal_info/personal_info_create?page_group=dev#"><i
                                    class="far fa-bell zt-1 swingimage"></i><span
                                    class="badge badge-danger badge-pill mt-n2 position-absolute">0</span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <style>
                .inh {
                    transform: inherit !important;
                }

                .menu-bg {
                    background: yellow;
                }

                .menu-text * {
                    color: red;
                }

                .navbar-toggler {
                    border-color: red;
                }

                .navbar-toggler-icon {
                    color: red;
                }

                /**/
                .navbar-nav li:hover>ul.dropdown-menu {
                    display: block;
                }

                .dropdown-submenu {
                    position: relative;
                }

                .dropdown-submenu>.dropdown-menu {
                    top: 0;
                    left: 100%;
                    margin-top: -6px;
                }

                /* rotate caret on hover */
                .dropdown-menu>li>a:hover:after {
                    text-decoration: underline;
                    transform: rotate(-90deg);
                }
            </style>
            <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top border-bottom shadow-sm ">
                <a class="navbar-brand pb-2 text-primary"
                    href="http://localhost/urban_pathshala/admin/admin_page_group/admin_page_group_all/dev">Dev</a>
                <button class="navbar-toggler btn btn-primary text-white" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav d-flex flex-wrap">
                        <li class="text-dark nav-item  dropdown"><a class="text-dark nav-link   dropdown-toggle "
                                id="navbarDropdownMenuLink">Software Version</a>
                            <ul class="dropdown-menu  inh mt-0" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="http://localhost/urban_pathshala/admin/software_version/software_version_create?page_group=dev"
                                        class="text-dark dropdown-item ">Software Version Create</a></li>
                                <li><a href="http://localhost/urban_pathshala/admin/software_version/software_version_all?page_group=dev"
                                        class="text-dark dropdown-item ">Software Version List</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="modal fade modal-container" role="dialog">
                <div class="modal-dialog modal-xl icon-container" role="document">
                </div>
            </div>
            <div class="col-md-12 bg-light p-4">
                <div class="card border-primary shadow-sm border-0">
                    <div class="card-header py-1  clearfix bg-gradient-primary text-dark">
                        <h5 class="card-title font-weight-bold mb-0  float-left mt-1">CV</h5>
                        <div class="card-title font-weight-bold mb-0  float-right">
                            <a href="http://localhost/urban_pathshala/admin/personal_info/personal_info_list?page_group=dev"
                                class="btn btn-sm btn-info">Back to Personal info List</a>
                        </div>
                    </div>
                    <div class="alert alert-warning mb-0 mx-4 mt-4 text-danger font-weight-bold" role="alert">
                        (<small><sup><i class="text-danger fas fa-star"></i></sup></small>) field required
                    </div>
                    <div class="card-body ">
                        <div>
                            <h4>Biodata List</h4>
                            <a href="{{route('biodata.create')}}" class="btn btn-sm btn-success p-3 mt-2 mb-3" style="font-size:20px width:300px">ADD<i class="fa fa-plus" style="font-size:15px"></i></a>
                        </div>
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th>#Sl</th>
                                    <th>First Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($myInformation as $key =>$item)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$item->first_name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <a href="{{route('biodata.edit', $item->id)}}" class="btn btn-sm btn-info">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>


</body>
</html>
