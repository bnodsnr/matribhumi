@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>News List</span></span></li>
      </ol>
    </nav>
    <div class="card">
     
        <p class="card-description">
        
        </p>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="table-responsive">

        <table id="order-listing" class="table dataTable no-footer">
          <thead>
            <tr style="background:#dfdfed ">
              <th><input type="text" class="form-control"></th>
              <th><input type="text" class="form-control"></th>
              <th><input type="text" class="form-control"></th>
              <th><input type="text" class="form-control"></th>
              <th><input type="text" class="form-control"></th>
              <th><button class="btn btn-block btn-info"><i class="fa fa-search"></i>Filter</button></th>
            </tr>
            <tr>
              <th colspan ="6"><a class="btn btn-success" href="{{route('create-news')}}"><i class="fa fa-plus-circle"></i> Add New</a></th>
            </tr>
            <tr>
              <th>SN</th>
              <th>Title</th>
              <th>Author</th>
              <th>Category Slug</th>
              <th>Publish Date</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @php $i =1; @endphp @if(!empty($news))
            @foreach($news as $new)
            <tr>
            <td>{{ $i++}}</td>
            <td>{{ $new->news_title }}</td>
            <td>{{ $new->author->name }}</td>
            <td>{{ $new->category_slug }}</td>
            <td>{{ $new->created_at }}</td>
            <td><a href="{{route('edit-news', $new->id)}}" class="btn btn-info btn-sm ml-2"><i class="fa fa-pencil"></i></a><a href="" class="btn btn-success btn-sm ml-2"><i class="fa fa-eye"></i></a><a href="" class="btn btn-danger btn-sm ml-2"><i class="fa fa-times"></i></a></td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<!-- content-wrapper ends -->
@endsection