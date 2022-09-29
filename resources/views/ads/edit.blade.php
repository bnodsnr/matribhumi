@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="{{ URL :: to('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a
              href="">Manage Ads</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Edit Advertisement</span></li>
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
  <form  method="POST" action = "{{ route('update-ads', $row->id) }}" enctype="multipart/form-data" >
    @csrf
    <div class="row">
      <div class="col-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> Add New Post</h4>
            <p class="card-description">
            please fill all * marked fields.
            </p>
            
              <div class="form-group">
                <label for="title">Company Name</label>
                <input type="text" class="form-control" id="title" name="company_name" placeholder="Enter Company Name" value="{{ $row->company_name }}">
              </div>
              <div class="form-group">
                <label for="author">Position</label>
                <select class="form-control select2" name="position">
                  <option value="header-ads" {{ $row->position =="header-ads" ? 'selected':'' }}>header-widget</option>
                  <option value="banner-1" {{ $row->position =="banner-1" ? 'selected':'' }}>banner-widget-1</option>
                  <option value="banner-2" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-2</option>
                  <option value="banner-3" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-3</option>
                  <option value="banner-4" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-4</option>
                  <option value="banner-5" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-5</option>
                  <option value="banner-6" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-6</option>
                  <option value="banner-7" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-7</option>
                  <option value="banner-8" {{ $row->position =="banner-2" ? 'selected':'' }}>banner-widget-8</option>
                  <option value="right-widget-1" {{ $row->position =="right-widget-1" ? 'selected':'' }}>right-widget-1</option>
                  <option value="right-widget-2" {{ $row->position =="right-widget-2" ? 'selected':'' }}>right-widget-2</option>
                  <option value="right-widget-3" {{ $row->position =="right-widget-3" ? 'selected':'' }}>right-widget-3</option>
                  <option value="right-widget-4" {{ $row->position =="right-widget-4" ? 'selected':'' }}>right-widget-4</option>
                  <option value="right-widget-5" {{ $row->position =="right-widget-5" ? 'selected':'' }}>right-widget-5</option>
                  <option value="right-widget-6" {{ $row->position =="right-widget-6" ? 'selected':'' }}>right-widget-6</option>
                  <option value="right-widget-7" {{ $row->position =="right-widget-7" ? 'selected':'' }}>right-widget-7</option>
                  <option value="right-widget-8" {{ $row->position =="right-widget-8" ? 'selected':'' }}>right-widget-8</option>
                  <option value="right-widget-9" {{ $row->position =="right-widget-9" ? 'selected':'' }}>right-widget-9</option>
                  <option value="right-widget-10" {{ $row->position =="right-widget-10" ? 'selected':'' }}>right-widget-10</option>
                  <option value="right-widget-11" {{ $row->position =="right-widget-11" ? 'selected':'' }}>right-widget-11</option>
                  <option value="middle-widget-1" {{ $row->position =="middle-widget-1" ? 'selected':'' }}>middle-widget-1</option>
                  <option value="middle-widget-2" {{ $row->position =="middle-widget-2" ? 'selected':'' }}>middle-widget-2</option>
                  <option value="middle-widget-3" {{ $row->position =="middle-widget-3" ? 'selected':'' }}>middle-widget-3</option>
                  <option value="middle-widget-4" {{ $row->position =="middle-widget-4" ? 'selected':'' }}>middle-widget-4</option>
                  <option value="middle-widget-5" {{ $row->position =="middle-widget-5" ? 'selected':'' }}>middle-widget-5</option>
                  <option value="middle-widget-6" {{ $row->position =="middle-widget-6" ? 'selected':'' }}>middle-widget-6</option>
                  <option value="middle-widget-7" {{ $row->position =="middle-widget-7" ? 'selected':'' }}>middle-widget-7</option>
                  <option value="middle-widget-8" {{ $row->position =="middle-widget-8" ? 'selected':'' }}>middle-widget-8</option>
                  <option value="middle-widget-9" {{ $row->position =="middle-widget-9" ? 'selected':'' }}>middle-widget-9</option>
                  <option value="middle-widget-10" {{ $row->position =="middle-widget-10" ? 'selected':'' }}>middle-widget-10</option>
                  <option value="middle-widget-11" {{ $row->position =="middle-widget-11" ? 'selected':'' }}>middle-widget-11</option>
                </select>
              </div>
              <div class="form-group">
                <label>Set Feature Image</label>
                <input type="file" name="ads_image" class="form-control">
              </div>
              <div class="form-group">
                <label>Publish Date</label>
                <input type="text" class="form-control" name="publish_date" id="nepali_datepicker" placeholder="Publish Date" value="{{ $row->publish_date }}">
              </div>
          </div>
        </div>
      </div>
      <div class="col-4 grid-margin stretch-card">
        <div class="card">
          <h4 class="card-title"> Image</h4>
          <div class="card-body">
              <div class="form-group">
                <img src="{{asset('storage/'.$row->ads_image)}}" class="img-lg" alt="profile image">
              </div>
              <hr>
              <div class="form-group">
                <label>Status</label>
                <select class ="form-control" name="status"><option value=""></option><option value="1" {{ $row->status == 1 ? 'selected':''}}>Publish</option><option value="2" {{ $row->status == 2 ? 'selected':''}}>Draft</option></select>
              </div>
              <hr>
              <button type="submit" class="btn btn-primary mr-2 mt-3">Submit</button>
              <a href="{{route('manage-ads')}}" class="btn btn-danger mr-2 mt-3">Cancel</a>
            </div>
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