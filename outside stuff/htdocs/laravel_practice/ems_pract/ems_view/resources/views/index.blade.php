<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EMS | Dashboard -> @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
@section('wrapper')
<div class="wrapper">
 @section('preloader')
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.svg" alt="AdminLTELogo" height="60" width="60">
  </div>
 @show

 @section('main-header')
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light layout-fixed layout-navbar-fixed">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->
  @show

  @section('main-sidebar')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="dist/img/logo.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-bolder">EMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Junnatu Adan Rothi</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Employee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile Update History
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accounts
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin(MLSS)
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Call Center
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Corporate Marketing & Sales
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Experience
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.all')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Genusys Ltd
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Board
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notice
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attachment
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Policy
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Holiday
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Incident
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Job Description
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Leave
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave List
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>At a Glance
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Yearly Leave Report
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today's Leave
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Archive
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facility
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Note
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administration Privilege
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permission Privilege
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Office Time
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-moon"></i>
              <p>
                Ramadan Time
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Set Ramadan list
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-file-export"></i>
              <p>
                Attendance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today's Employee
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Late/Early Request
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Late/Early Request Pending
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Missing Att. Req. Pending
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Office Schedule
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roster Set
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employee-list.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roster Pending
                  </p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @show

  @section('content-wrapper')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @section('content-header')
      @yield('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @show

    @section('main-content')
    <!-- Main content -->
    <section class="content">
     
      @section('container-fluid')

      <div class="container-fluid">
      
      @section('row')
        <div class="row">
        @yield('content')
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Junnatu Adan Rothi</h3>

                <p class="text-muted text-center">Assistant Manager</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Last Login</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">2 Days Ago</span>
                </p>

                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Genuity Life</strong>

                <p class="text-muted">
                  (13 years 2 months 21 days)
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim
                  neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#information" data-toggle="tab">Information</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="information">
                    <table class="table table-borderless table-info">
                      <tr class="bg-gradient-gray">
                        <td colspan="2"><h5><i class="fas fa-user"></i> Information</h5></td>
                      </tr>
                      <tr>
                        <td>Employee ID</td>
                        <td>0146</td>
                      </tr>
                      <tr>
                        <td>Grade</td>
                        <td>null <a href="">change</a></td>
                      </tr>
                      <tr>
                        <td>Operational Designation</td>
                        <td>Assistant Manager</td>
                      </tr>
                      <tr>
                        <td> Department</td>
                        <td>HR & Admin</td>
                      </tr>
                      <tr>
                        <td>Joining Date</td>
                        <td>2009-01-22</td>

                      </tr>
                      <tr>
                        <td>Current Status</td>
                        <td>Permanent (on 2012-08-01) <a href="">Old Status</a></td>
                      </tr>
                    </table>

                    <table class="table table-borderless table-info">
                      <tr class="bg-gradient-gray">
                        <td colspan="2"><h5><i class="fas fa-mail-bulk"></i> Contact Information</h5></td>
                      </tr>
                      <tr>

                        <td>Mobile</td>
                        <td>01714020398</td>
                      </tr>
                      <tr>
                        <td>Home Phone</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>rothi@genusys.us</td>
                      </tr>
                      <tr>
                        <td>Present Address</td>
                        <td>Shakrail House, 62, East Rampura ,Khilgaon, Dhaka-1217</td>
                      </tr>
                      <tr>
                        <td>Permanent Address</td>
                        <td>Shakrail House, 62, East Rampura , Khilgaon, Dhaka-1217</td>
                      </tr>
                    </table>

                    <table class="table table-info table-borderless">
                      <tr class="bg-gradient-gray">
                        <td colspan="2">
                          <h5><i class="fas fa-school"></i> Educational Information</h5>
                        </td>
                      </tr>
                      <tr>
                        <td>Last Achievement</td>
                        <td>MBA(Major in HR)</td>
                      </tr>
                    </table>

                    <table class="table table-borderless table-info">
                      <tr class="bg-gradient-gray">
                        <td colspan="2"><h5>Experience</h5></td>
                      </tr>
                      <tr>
                        <td>Please Update your experience</td>
                        <td></td>
                      </tr>
                    </table>

                    <table class="table table-borderless table-info">
                      <tr class="bg-gradient-gray">
                        <td colspan="2"><h5>Personal Information</h5></td>
                      </tr>
                      <tr>
                        <td> Date of Birth</td>
                        <td> 19 December, 1985</td>
                      </tr>
                      <tr>
                        <td>Blood Group</td>
                        <td>B+</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                    </table>


                    <div class="btn-group-sm">
                      <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-lock-open">
                        </i>
                        Lock
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                      </a>
                    </div>
                  </div>


                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Genuity Life</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputGenuityLife" placeholder="Years">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      @show
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      @show
    </section>
    @show
    <!-- /.content -->
    
  </div>
  @show

  @section('main-footer')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://Powered By gPlex">Powered By gPlex</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
  @show

  @section('control-sidebar')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  @show
  <!-- /.control-sidebar -->
</div>
@show
<!-- ./wrapper -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
