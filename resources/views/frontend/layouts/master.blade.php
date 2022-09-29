<!DOCTYPE html>
<html>
<head>
  <title>मातृभूमि संचार नेटवर्क</title>
  <meta name="google" content="notranslate">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css')}}">
  <!-- Scrollbar -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/scrollbar.css')}}">
  <!-- Font Icon -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css')}}">
  <!-- Custom -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>
<body>
  <!-- Responsive Menu Markup -->
  <div class="body-inactive fixed cover"></div>
    <div class="offcanvas">
      <div class="coff absolute">
        <a href="">
          <img src="assets/images/csb.svg" width="22">
        </a>
      </div>
      <div class="nano">
        <div class="nano-content">
          <!-- Dynamic Cloing of Navigation For Mobile -->
        </div>
      </div>
    </div>
  <header class="header">
    <div class="top-header">
      <div class="container">
        <div class="mytable">

          <div class="table-cell va-middle">
            <div class="pull-left">
              <!-- <span class="time">
                <i class="fa fa-clock-o"></i> १० : ३९ : ३५ मध्यान्ह 
              </span> -->
              <span class="date">
                @php 
                $month = explode("-", convertDate(date('Y-m-d')));
                @endphp
                <i class="fa fa-calendar"></i> {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }}, {{currentDay()}}
              </span>
            </div>
          </div>

          <!-- <div class="table-cell va-middle pull-right">
              <a class="lang" href="">English</a>
          </div> -->

        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="container">
          <div class="logo">
            <a href="{{route('home')}}">
              <img src="{{asset('frontend/assets/images/Asset-10.png') }}" alt="" width="306px" class="img-responsive">
            </a>
          </div>
          <div class="ad">
            <a href=""><img class="img-fluid" src="{{asset('public/uploads/'.widgetsAds('header-ads'))}}"></a>
          </div>
      </div>
    </div>
    <div class="header-menu">
      <div class="container">
        <div class="mynav clearfix">
          <ul class="floated-list">
            <li class=""><a href="{{route('home')}}">गृहपृष्ठ</a></li>
            @if(!empty($menus))
            @foreach($menus as $menu)
            <li><a href="{{ route('articles', $menu->category_slug)}}">{{ $menu->category_name }}</a></li>
            @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
    <div class="toggle">
      <a href="">
        <img src="assets/images/toggle.svg">
      </a>
    </div>
  </header>
  <main>
  @yield('content')
  </main>

<footer>
      <div class="container">
          <div class="footer-wrap relative clearfix">
              <div class="row row-flex-wrap row-flex">
                  <div class="col-sm-6 col-md-6">
                      <div class="f-widget flex-col">
                          <a href="" class="f-logo">
                              <img src="{{asset('frontend/assets/images/Asset-10.png') }}" alt="" width="306px" class="img-responsive">
                          </a>

                          <div class="f-contact mt-30 font20px">
                            <span class="c-address">मातृभूमि संचार नेटवर्क<br>
                              का म न पा – २९,अनामनगर , काठमाडौं
                            </span>

                            <span class="c-phone">फोन : ९८४१५०९९४२</span>

                            <span class="c-phone">विज्ञापनका लागि सम्पर्क: ९८४१५०९९४२, ९८४७९००७७२</span>

                            <span class="c-email">इमेल : matribhumisandesh2074@gmail.com</span>
                            <span class="c-info">सूचना विभाग दर्ता नं. : १६०७/०७६-७७</span>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-3">
                      <div class="f-widget f-menu flex-col">
                          <h3 class="font24px weight-700 mt-0 mb-20" style="color:#fff">
                              लिङ्कहरू 
                          </h3>
                          <ul class="font20px">
                              <li><a href="">अन्तर्वार्ता</a></li>
                              <li><a href="">कला</a></li>
                              <li><a href="">खेलकुद</a></li>
                              <li><a href="">पैसा</a></li>
                              <li><a href="">प्रवास</a></li>
                              <li><a href="">भिडियो</a></li>
                              <li><a href="">मनोरञ्जन</a></li>
                          </ul>
                      </div>
                  </div>

                  <!-- <div class="col-sm-6 col-md-2">
                      <div class="f-widget flex-col">
                          <h3 class="font24px text-blue weight-700 mt-0 mb-20">
                              सोसल मिडिया 
                          </h3>
                          <ul class="soial-links">
                              <li>
                                <a href="">
                                  <span><i class="fa fa-facebook"></i></span> Like us on Facebook</a>
                              </li>
                              <li>
                                <a href="">
                                  <span style><i class="fa fa-twitter"></i></span> Follow us on Twitter</a>
                              </li>
                              <li>
                                <a href="">
                                  <span><i class="fa fa-youtube-play"></i></span> Subscribe YouTube Channel</a>
                              </li>
                              <li>
                                <a href="">
                                  <span><i class="fa fa-instagram"></i></span> Follow us on Instagram</a>
                              </li>
                              <li>
                                <a href="">
                                  <span><i class="fa fa-linkedin"></i></span> Follow us on LinkedIn</a>
                              </li>
                              <li>
                                <a href="">
                                  <span><i class="fa fa-google-plus"></i></span> Follow us on Google+</a>
                              </li>
                          </ul>
                      </div>
                  </div> -->

                  <div class="col-sm-6 col-md-3">
                      <div class="f-widget fb-page flex-col">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsarbochchamedia%2F&amp;tabs=timeline&amp;width=100%&amp;height=268&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="100%" height="268" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                      </div>
                  </div>
              </div>
              <!-- <div class="notification-icon">
                <a href="" class="notification-bell"><i class="fa fa-bell-o"></i></a>
              </div> -->
              <!-- <div class="to-top">
                <a href="#" onclick="topFunction()" id="myBtn" title="Go to top">
                  <img src="{{ asset('frontend/assets/images/to-top.png') }}">
                </a>
              </div> -->
          </div>
      </div>

       <div class="footer-last">
          <div class="container">
              <div class="footer-last-wrap">
                <div class="row">
                   
                    <div class="col-sm-4 col-md-3">
                       <a href="">अध्यक्ष तथा प्रबन्ध निर्देशक: प्रकाश शर्मा</a>
                    </div>
                    <div class="col-sm-4 col-md-3">
                       <a href=""> सम्पादकः माधव के. सी. </a>
                    </div>
                    <div class="col-sm-4 col-md-3">
                       <a href="">सूचना विभाग दर्ता नं. २१४ / ०७३–७४</a>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center">
                      <div class="ok-social-brands">
                          <a href=#"><i class="fa fa-facebook-f"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-youtube"></i></a>
                           © २००६-२०२२ सर्वाधिकार सुरक्षित
                      </div>
                     
                    </div>
                    
                </div>
              </div>
          </div>
      </div>
  </footer>

<!-- 
  <footer>
      <div class="container">
          <div class="footer-wrap relative clearfix">
              <div class="row row-flex-wrap row-flex">
                <div class="col-sm-6 col-md-4">
                  <div class="f-widget f-menu flex-col">
                      <h3 class="font24px text-blue weight-700 mt-0 mb-20">
                        सम्पर्क ठेगाना 
                      </h3>
                      <ul class="font20px">
                          <li>मातृभूमि संचार नेटवर्क</li>
                          <li>ठेगाना :  सुमार्गी बी कम्प्लेक्स, बबरमहल- ११, काठमाडौं, नेपाल</li>
                          <li>सम्पर्क :   +९७७-१- ४२६१९४१</li>
                          <li>बिज्ञापन सम्पर्क :   ९७७-१-४२६३४५४, ९८५१०७६३३६ (सञ्जय नेपाल)</li>
                          <li>समाचार विभाग इमेल:   matribhumisandesh2074@gmail.com</li>
                          <li>ईमेल :   matribhumisandesh2074@gmail.com</li>
                      </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="f-widget f-menu flex-col">
                      <h3 class="font24px text-blue weight-700 mt-0 mb-20">
                          लिङ्कहरू 
                      </h3>
                      <ul class="font20px">
                          <li><a href="">अन्तर्वार्ता</a></li>
                          <li><a href="">कला</a></li>
                          <li><a href="">खेलकुद</a></li>
                          <li><a href="">पैसा</a></li>
                          <li><a href="">प्रवास</a></li>
                          <li><a href="">भिडियो</a></li>
                          <li><a href="">मनोरञ्जन</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="f-widget f-menu flex-col">
                      <h3 class="font24px text-blue weight-700 mt-0 mb-20">
                          लिङ्कहरू 
                      </h3>
                      <ul class="font20px">
                          <li><a href="">अन्तर्वार्ता</a></li>
                          <li><a href="">कला</a></li>
                          <li><a href="">खेलकुद</a></li>
                          <li><a href="">पैसा</a></li>
                          <li><a href="">प्रवास</a></li>
                          <li><a href="">भिडियो</a></li>
                          <li><a href="">मनोरञ्जन</a></li>
                      </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>

       <div class="footer-last">
          <div class="container">
              <div class="footer-last-wrap">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                      <img src="assets/images/Asset-10.png" alt="" width="306px" class="img-responsive">
                    </div>
                    <div class="col-sm-4 col-md-2">
                       <a href="">अध्यक्ष तथा प्रबन्ध निर्देशक:<br>धर्मराज भुसाल</a>
                    </div>
                    <div class="col-sm-4 col-md-2">
                       <a href="">प्रधान सम्पादकः</br>शिव गाउँले</a>
                    </div>
                    <div class="col-sm-4 col-md-2">
                       <a href="">सूचना विभाग दर्ता नं.<br>२१४ / ०७३–७४</a>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center">
                      <div class="ok-social-brands">
                          <a href=#"><i class="fa fa-facebook-f"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-youtube"></i></a>
                      </div>
                      © २००६-२०२२ सर्वाधिकार सुरक्षित
                    </div>
                    
                </div>
              </div>
          </div>
      </div>
  </footer> -->

  <!-- Jquery Library -->
  <script type="text/javascript" src="{{ asset('assets/js/library.min.js') }}"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <!-- Scrollbar -->
  <script type="text/javascript" src="{{ asset('assets/js/scrollbar.js') }}"></script>

  <!-- Custom -->
  <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>

  <!-- Jquery Library -->
  <script type="text/javascript" src="{{ asset('assets/js/library.min.js') }}"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <!-- Scrollbar -->
  <script type="text/javascript" src="{{ asset('assets/js/scrollbar.js') }}"></script>

  <!-- Custom -->
  <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>