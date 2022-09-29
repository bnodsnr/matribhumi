@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-danger">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">General Option</li>
      </ol>
    </nav>
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true"><i class="fa fa-navicon"></i> Header Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false"><i class="fa fa-address-book"></i> Contact Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ count($errors) ? '' : 'active show' }}" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false"><i class="fa fa-th-large"></i> Social Media</a>
          </li>
        </ul>
        <hr>
        <div class="tab-content">
          <!-- header menu setting -->
          <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
            <div id="dragula-right" class="py-2">
              @if(!empty($menus))
              <div class="card rounded border mb-2">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <ul id="sortable">
                        @php $i = 1; @endphp
                        @foreach($menus as $menu)
                        <li class="list-group-item" id="{{$menu->category_slug}}_{{$menu->id}}_{{$i++}}"><span class="mdi mdi-apps icon-sm text-success align-self-center mr-3"></span>{{ $menu->category_name }}</li>
                        @endforeach
                      </ul>
                    </div>                              
                  </div> 
                </div>
              </div>
              @endif
            </div>
          </div>
          <!-- contact details setting -->
          <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
            
            <div class="card-body">
              <div id="success_message"></div>
              <form class=" cmxform general_option" id="commentForm" action = "{{ route('save-general-option')}}" method="post" >
                @csrf
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-info-circle"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="company_name" placeholder="Company Name" aria-label="company name ">
                  </div>
                  <span id = "company_name" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-address-book"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Address" name="address" aria-label="address">
                  </div>
                  <span id = "address" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-phone-square"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="phone_no" placeholder="Phone No" aria-label="">
                  </div>
                  <span id = "phone_no" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-phone"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Contact for Ads" aria-label="" name="ads_phone_no">
                  </div>
                  <span id = "ads_phone_no" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-envelope-open"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" placeholder="Email" name="company_email">
                  </div>
                  <span id = "company_email" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-info-circle"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" placeholder="सूचना विभाग दर्ता नं" aria-label="registration_no" name="registration_no">
                  </div>
                  <span id = "registration_no" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-user-circle-o"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" placeholder="अध्यक्ष तथा प्रबन्ध निर्देशक" aria-label="Recipient's president" name="president">
                  </div>
                  <span id = "president" class="text-danger mt-2"></span>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-user-circle-o"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" placeholder="सम्पादक" aria-label="Recipient's editor" name="editor">
                  </div>
                  <span id = "editor" class="text-danger mt-2"></span>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
          <!-- social media -->
          <div class="tab-pane fade " id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
            <div class="card-body">
              <form class="forms-sample" action="{{route('save-social-media')}}" method ="post">
                @csrf
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-facebook-square"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="face_book" placeholder="facebook" aria-label="Recipient's username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-instagram"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram" aria-label="Recipient's username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-linkedin-square"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="linkendin" placeholder="linkendin" aria-label="Recipient's username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-twitter-square"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="twitter" placeholder="twitter" aria-label="Recipient's username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark btn-icon-text" type="button">
                        <i class="fa fa-youtube-square"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="youtube" placeholder="youtube" aria-label="Recipient's username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="input-group">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-dark" type="button">
                        <i class="fa fa-google-plus-square"></i>
                      </button>
                    </div>
                    <input type="text" class="form-control" name="google_plus" placeholder="Google+" aria-label="Recipient's username">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="{{asset('assets/js/general_option.js')}}"></script>
<script>
  $(document).ready(function() {
    $('#sortable').sortable({
      axis: 'y',
      update: function (event, ui) {
        var result = $(this).sortable("toArray");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          data: {result:result},
          type: 'POST',
          url: 'reorder-menu',
          success : function(data){
           alert(data.message);
           location.reload();
          }
        });
      }
    });
  });
</script>
@endsection