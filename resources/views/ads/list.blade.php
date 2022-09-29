@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Advertisement List</span></span></li>
      </ol>
    </nav>
    <div class="card">
        <p class="card-description">
        <a class="btn btn-sm btn-dark" href="{{route('create-ads')}}"><i class="fa fa-plus-circle"></i> Add New</a>
        </p>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="table-responsive">

        <table id="order-listing" class="table dataTable no-footer">
          <thead>
            <tr>
              <th>SN</th>
              <th>Company Name</th>
              <th>Position</th>
              <th>Image</th>
              <th>Publish Date</th>
              <th>Status</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @php $i =1; @endphp @if(!empty($advertisements))
            @foreach($advertisements as $advertisement)
            <tr>
            <td>{{ $i++}}</td>
            <td>{{ $advertisement->company_name }}</td>
            <td><label class="badge badge-outline-danger">{{ $advertisement->position }}</label></td>
            <td><img src="{{asset('public/uploads/'.$advertisement->ads_image)}}" alt="profile image"></td>
            <td>{{ $advertisement->publish_date }}</td>
            <td>@if($advertisement->status == 1)<label class="badge badge-success">Published</label>@else <label class="badge badge-danger">Draft</label>@endif</td>
            <td><a href="{{route('edit-ads', $advertisement->id)}}" class="btn btn-info btn-sm ml-2"><i class="fa fa-pencil"></i></a><a href="" class="btn btn-danger btn-sm ml-2"><i class="fa fa-times"></i></a></td>
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