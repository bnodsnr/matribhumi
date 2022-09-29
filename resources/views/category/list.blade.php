@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Category</span></span></li>
      </ol>
    </nav>
    <div class="card">

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <div class="table-responsive">
        <div class="  ">
        <a class="btn btn-sm btn-dark" href="#frmadd" data-toggle="modal" data-url="{{ route('create-category') }}" data-id=""><i class="fa fa-plus-circle"></i> Add New</a>
      </div><br>
        <table class="rtable">
          <thead>
            <tr>
              <th>SN</th>
              <th>Category</th>
              <th>Slug</th>
              <th>Is Menu</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @if (!empty($categories))
            @php $i=1; @endphp
            @foreach($categories as $key => $category)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $category->category_name }}</td>
              <td>{{ $category->category_slug }}</td>
              <td>@if($category->is_menu == 1 )<i class="fa fa-check"></i>@else <i class="fa fa-times"></i>@endif</td>
              <td>
                <a class="btn btn-sm btn-info" href="#frmedit" data-toggle="modal" data-url="{{route('edit-category')}}" data-id="{{ $category->id }}">
                  <i class="fa fa-pencil"></i>
                </a>
              </td>
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