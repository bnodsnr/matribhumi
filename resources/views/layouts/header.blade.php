  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="navbar-brand brand-logo-mini" href="#" style="color:#fff"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width:175px;" /> </a>
        <a class="navbar-brand brand-logo" href="#" style="color:#fff"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="width:175px;" /> </a>
      </li>
      <li class="nav-item">
        <hr>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="#">
          <i class="fa fa-tachometer"></i>&nbsp;Dashboard 
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('category')}}">
        <i class="fa fa-camera"></i>&nbsp;Categories
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('dashboard')}}">
        <i class="fa fa-file-powerpoint-o"></i>&nbsp;Pages
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('news')}}">
        <i class="fa fa-tasks"></i>&nbsp;News Management
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('manage-ads')}}">
        <i class="fa fa-audio-description"></i>&nbsp;Advertisement
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('videos')}}">
        <i class="fa fa-video-camera"></i>&nbsp;Videos
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('dashboard')}}">
        <i class="fa fa-comments"></i>&nbsp;Comments
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('general-option')}}">
        <i class="fa fa-sliders"></i>&nbsp;General Option
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold active" href="{{route('dashboard')}}">
        <i class="fa fa-cog"></i>&nbsp;General Setting
        </a>
      </li>
      @can('view-user')
      <li class="nav-item">
        <a class="nav-link font-weight-bold" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="pages">
          <i class="fa fa-users"></i>&nbsp;Users
          &nbsp;<i class="fa fa-angle-down"></i>
        </a>
        <div class="collapse" id="pages">
          <ul class="nav flex-column sub-menu">
          @can('view-role')
            <li class="nav-item"> <a class="nav-link" href="{{ URL :: to('/roles') }}"><i class="fa fa-hand-o-right"></i>&nbsp; Role </a></li>
          @endcan
          @can('view-permission')
            <li class="nav-item"> <a class="nav-link" href="{{ route('modules') }}"><i class="fa fa-hand-o-right"></i>&nbsp; Permission </a></li>
          @endcan
          @can('view-user')
            <li class="nav-item"> <a class="nav-link" href="{{ URL :: to('/users') }}"> <i class="fa fa-hand-o-right"></i>&nbsp; Users </a></li>
          @endcan
          </ul>
        </div>
      </li>
    @endcan
    <li class="nav-item">
      <hr>
      <form method="POST" action="{{URL::to('logout')}}">
        @csrf
        <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-power-off"></i> &nbsp; Logout</button>
      </form>
    </li>
    </ul>
    <hr>
  </nav>