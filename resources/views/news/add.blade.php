@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="{{ URL :: to('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a
              href="">News</a></li>
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
  <form  method="POST" action = "{{ route('save-news') }}" enctype="multipart/form-data" >
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
                <label for="title">News Title</label>
                <input type="text" class="form-control" id="title" name="news_title" placeholder="Enter News Title">
              </div>
              <div class="form-group">
                <label for=""></label>
                <textarea class="editor" id="editor" name="news_description" rows="10"></textarea>
              </div>
              <div class="form-group">
                <label for="author">Author</label>
                <select class="form-control" name="author_id"><option value="">--select author--</option>
                  @if(!empty($authors))
                  @foreach($authors as $author)
                  <option value="{{$author->id}}">{{$author->name}}</option>
                  @endforeach
                  @endif
                </select>
                <!-- <input type="password" class="form-control" id="author" placeholder="Password"> -->
              </div>

              <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea class="form-control" id="excerpt" rows="4" name="excerpt"></textarea>
              </div>
          </div>
        </div>
      </div>
      <div class="col-4 grid-margin stretch-card">
        <div class="card">
          <h4 class="card-header">Category</h4>
          <div class="card-body">
            <div class="form-group">
              @if(!empty($categories))
              @foreach($categories as $category)
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="category_slug[]" value="{{ $category->category_slug }}">
                  {{ $category->category_name }}
                <i class="input-helper"></i></label>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 grid-margin stretch-card">
        <div class="card">
          <h4 class="card-header">SEO Contents</h4>
          <div class="card-body">
              <div class="form-group">
                  <label for="tags">Meta Tags</label>
                  <input type="text" class="form-control" id="tags" name="meta_tag" placeholder="Enter News Tags">
                </div>
              <div class="form-group">
                <label>Meta Contents</label>
                <textarea class ="form-control" rows="5" name="meta_content"></textarea>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="is_feature" value="1">
                  Is Feature?
                <i class="input-helper"></i></label>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
              <div class="form-group">
                <label>Set Feature Image</label>
                <input type="file" name="feature_image" class="form-control">
                <!-- <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled="" placeholder="upload feature image max size 2MB">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div> -->
              </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status"><option value="">--select--</option><option value="1">Publish</option><option value="2">Draft</option></select>
              </div>
              <div class="form-group">
                <label>Publish Date</label>
                <input type="text" class="form-control" name="publish_date" id="nepali_datepicker" placeholder="Publish Date" value="{{ convertDate(date('Y-m-d'))}}">
              </div>
              <hr>
              <button type="submit" class="btn btn-primary mr-2 mt-3">Submit</button>
              <a href="{{route('news')}}" class="btn btn-danger mr-2 mt-3">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</div>
 



<script src="{{ asset('assets/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

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
 <script>
    CKEDITOR.replace( 'editor', {
        fullPage: true,
        allowedContent: true,
    });

</script>
@endsection