@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom">
        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Videos</span></span></li>
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
        <a class="btn btn-sm btn-dark" href="#frmadd" data-toggle="modal" data-url="{{ route('create-videos') }}" data-id=""><i class="fa fa-plus-circle"></i> Add New</a>
      </div><br>
        <table class="rtable">
          <thead>
            <tr>
              <th>SN</th>
              <th>Videos</th>
              <th>Headline</th>
              <th>Is Feature?</th>
              <th>Status</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @if (!empty($videos))
            @php $i=1; @endphp
            @foreach($videos as $key => $videos)
            @php $video_id = explode("?v=", $videos->url);
            $video_id = !empty($video_id[1]) ? $video_id[1]:'';
            $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
            @endphp
            <tr>
              <td>{{ $i++ }}</td>
              <td><a href="{{$videos->url}}" target = "_blank"><img src = "{{ $thumbnail }}" style="width:100px;height:100px"></a></td>
              <td>{{$videos->headline}}</td>
              <td><span class ="badge badge-{{ $videos->is_feature == 1 ? 'warning':'danger'}}">{{ $videos->is_feature == 1? 'yes':'no' }}</span></td>
              <td><span class ="badge badge-{{ $videos->status == 1 ? 'success':'danger'}}">{{ $videos->status == 1? 'publish':'' }}</span></td>
              <td>
                <a class="btn btn-sm btn-info" href="#frmedit" data-toggle="modal" data-url="{{route('edit-videos')}}" data-id="{{ $videos->id }}">
                  <i class="fa fa-pencil"></i>
                </a>
                <a class="btn btn-sm btn-danger" href="{{route('delete-videos', $videos->id)}}">
                  <i class="fa fa-trash"></i>
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