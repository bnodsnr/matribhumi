@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="{{ URL :: to('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a
              href="">Manage Ads</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Add New</span></li>
      </ol>
    </nav>
  </div>
</div>
<!-- <div class="row">
  <div class="col-12">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

  </div>
</div> -->
  
<div class="row">
<div class="col-12">
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
  @endif
  <form  method="POST" action = "{{ route('save-ads') }}" enctype="multipart/form-data" >
    @csrf
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> Add New Post</h4>
            <p class="card-description">
            please fill all * marked fields.
            </p>
            
              <div class="form-group">
                <label for="title">Company Name</label>
                <input type="text" class="form-control" id="title" name="company_name" placeholder="Enter Company Name">
              </div>
              <div class="form-group">
                <label for="author">Position</label>
                <select class="form-control select2" name="position"><option value="">--select position--</option>
                  <option value="header-ads">header-widget</option>
                  <option value="banner-1">banner-widget-1</option>
                  <option value="banner-2">banner-widget-2</option>
                  <option value="banner-3">banner-widget-3</option>
                  <option value="banner-4">banner-widget-4</option>
                  <option value="banner-5">banner-widget-5</option>
                  <option value="banner-6">banner-widget-6</option>
                  <option value="banner-7">banner-widget-7</option>
                  <option value="banner-8">banner-widget-8</option>
                  <option value="right-widget-1">right-widget-1</option>
                  <option value="right-widget-2">right-widget-2</option>
                  <option value="right-widget-3">right-widget-3</option>
                  <option value="right-widget-4">right-widget-4</option>
                  <option value="right-widget-5">right-widget-5</option>
                  <option value="right-widget-6">right-widget-6</option>
                  <option value="right-widget-7">right-widget-7</option>
                  <option value="right-widget-8">right-widget-8</option>
                  <option value="right-widget-9">right-widget-9</option>
                  <option value="right-widget-10">right-widget-10</option>
                  <option value="right-widget-11">right-widget-11</option>
                  <option value="middle-widget-1">middle-widget-1</option>
                  <option value="middle-widget-2">middle-widget-2</option>
                  <option value="middle-widget-3">middle-widget-3</option>
                  <option value="middle-widget-4">middle-widget-4</option>
                  <option value="middle-widget-5">middle-widget-5</option>
                  <option value="middle-widget-6">middle-widget-6</option>
                  <option value="middle-widget-7">middle-widget-7</option>
                  <option value="middle-widget-8">middle-widget-8</option>
                  <option value="middle-widget-9">middle-widget-9</option>
                  <option value="middle-widget-10">middle-widget-10</option>
                  <option value="middle-widget-11">middle-widget-11</option>
                </select>
              </div>
              <div class="form-group">
                <label>Set Feature Image</label>
                <input type="file" name="ads_image" class="form-control">
              </div>
              <div class="form-group">
                <label>Publish Date</label>
                <input type="text" class="form-control" name="publish_date" id="nepali_datepicker" placeholder="Publish Date" value="{{ convertDate(date('Y-m-d'))}}">
              </div>
              <hr>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-2">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="status" id="status1" value="1" checked="">
                      Publish
                    <i class="input-helper"></i></label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="status" id="status2" value="2">
                      Draft
                    <i class="input-helper"></i></label>
                  </div>
                </div>
              </div>
              <hr>
              <button type="submit" class="btn btn-primary mr-2 mt-3">Submit</button>
              <a href="{{route('manage-ads')}}" class="btn btn-danger mr-2 mt-3">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</div>
 



<script src="{{ asset('assets/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
<script src="{{ asset('assets/js/editorDemo.js')}}"></script>
<script src="{{ asset('assets/nepali-date-picker/js/nepali.datepicker.v3.7.min.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function() {
  /* Initialize Datepicker with options */
  $('#nepali_datepicker').nepaliDatePicker({
    ndpYear: true,
    ndpMonth: true,
  });
});
</script>
@endsection