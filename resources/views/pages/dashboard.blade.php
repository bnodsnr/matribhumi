@extends('layouts.master')
@section('content')

@if ($message = Session::get('access'))
  <div class="row">
    <div class="col-12">
      <div class="alert alert-fill-danger" role="alert">
        <i class="fa fa-warning"></i>{{ $message }}
      </div>
    </div>
  </div>
@endif
<div class="row">
  <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-wrap">
            <i class="fa fa-university"></i>
          </div>
          <div class="flex-right-height">
            <h2 class="countnum ml-4">0</h2>
            <p class="font-weight-bold mb-1"><a href="">Published Ads</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-wrap">
            <i class="fa fa-user"></i>
          </div>
          <div class="flex-right-height">
            <h2 class="countnum"></h2>
            <p class="font-weight-bold mb-1"><a href="" style="margin-left:-15px">Total News</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-wrap">
            <i class="fa fa-user"></i>
          </div>
          <div class="flex-right-height">
            <h2 class="countnum"></h2>
            <p class="font-weight-bold mb-1 ml-2"><a href="" class="ml-1">Total Comments</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-wrap">
            <i class="fa fa-users"></i>
          </div>
          
          <div class="flex-right-height">
            <h2 class="countnum"></h2>
            <p class="font-weight-bold mb-1"><a href="">जम्मा शिक्षक संख्या</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-6 col-lg-6 col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-header cardhead">Recent Comments</div>
      <div class="card-body">
        <div class="table-responsive permanent-table">

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-6 col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-header cardhead"></div>
      <div class="card-body">
        <div class="table-responsive permanent-table">
          
        </div>
      </div>
    </div>
  </div>
</div>


@endsection