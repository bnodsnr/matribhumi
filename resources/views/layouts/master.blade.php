<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>MatriBhumi Sandesh</title>
  <link rel="stylesheet" href="{{asset('assets/css/materials_icons.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/summernote/dist/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css') }}">
  <link href="{{asset('assets/nepali-date-picker/css/nepali.datepicker.v3.7.min.css') }}" rel="stylesheet"
    type="text/css" />
  <link rel="shortcut icon" href="{{asset('assets/images/fav.png') }}" />
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
</head>

<body class="sidebar-fixed">
  <!-- <div id="loader" class="lds-dual-ring overlay"></div> -->
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button> -->
          <div class="welcome-message d-lg-flex d-none" style="color:#fff">मातृभूमि संचार नेटवर्क हजुरलाई स्वागत छ!!</div>
        </div>
        <ul class="navbar-nav mr-lg-2 align-items-right">
          <li class="nav-item nav-search d-none d-lg-block pull-right" style="color:#fff">
          <i class="fa fa-calendar"></i> {{convertedNum(get_current_day())}}, {{getNepaliMonthName(get_current_month())}} , {{convertedNum(get_current_year()) }}, {{ currentDay() }} <i class="fa fa-clock-o"></i> <span id ="clock"></span>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon text-center rounded-circle">
                    <i class="mdi mdi-calendar text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject mb-1">Event today</h6>
                  <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon text-center rounded-circle">
                    <i class="mdi mdi-settings text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject mb-1">Settings</h6>
                  <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon text-center rounded-circle">
                    <i class="mdi mdi-link-variant text-warning"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject mb-1">Launch Admin</h6>
                  <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <p class="p-3 mb-0 text-center">See all notifications</p>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="mailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-email-open mx-0"></i>
              <span class="count">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="mailDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text mb-0">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text mb-0">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text mb-0">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      @include('layouts.header')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
      </div>
    </div>
  </div>


<div class="modal fade" id="frmadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>

<div class="modal fade" id="frmedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>
 

</body>
<script src="{{ asset('assets/js/modal.js') }}"></script>

<script type="text/javascript">
    function startTime() {
        var today = new Date();
        var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var t = month[today.getMonth()];
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
      }; // add zero in front of numbers < 10
    return i;
    }
$(document).ready(function()
{
   setInterval('startTime()', 1000);
});
</script>
</html>