@extends('frontend.layouts.master')
@section('content')
  <!-- Top ad -->
  <div class="container">
      <div class="ad ad-lg py-40">
        <!-- header news -->
        <a href=""><img class="img-fluid" src="{{asset('public/public/uploads/'.widgetsAds('banner-1'))}}"></a>
      </div>
  </div>

  <!-- Top News Section -->
  <section class="top-news">
    <div class="container">
        @if(!empty($bannerNews)) 
        @foreach($bannerNews as $key => $bannernews)
      
        <div class="media-box br-b pb-20 mb-20 text-center">
          <a href="{{ route('detail',$bannernews->news_slug) }}" class="headline headline-lg">
              {{ $bannernews->news_title}}
          </a>
          <div class="media-info">
              <a href="{{route('detail',$bannernews->news_slug)}}" class="n-author text-center font20px weight-700">- {{ $bannernews->author->name }} </a>
          </div>
          <div class="media-img my-20">
            <img src="{{ asset('public/public/uploads/'.$bannernews->feature_image) }}" class="img-fluid media-fullwidth">
          </div>
          <div class="media-text">
              <p>
               {{ $bannernews->excerpt }}
              </p>
          </div>
        </div>
        @endforeach
        @endif
        <!-- <div class="media-box br-b pb-20 mb-20 text-center">
          <a href="" class="headline headline-lg">
              विदेशमा अलपत्र परेकालाई अब सरकारी खर्चमा उद्धार गरिने 
          </a>
          <div class="media-info">
              <a href="" class="n-author text-center font20px weight-700">- सन्जिब बगाले </a>
          </div>
          <div class="media-img my-20">
            <img src="{{ asset('frontend/assets/images/kp-ba.jpg') }}" class="img-fluid">
          </div>
          <div class="media-text">
              <p>
                प्रधानमन्त्री तथा नेपाल कम्युनिष्ट पार्टीका अध्यक्ष केपी शर्मा ओलीले आफूनिकट नेताहरूलाई बिहीबार साँझ बालुवाटारमा बोलाएका छन्। दिउँसो अर्का अध्यक्ष पुष्पकमल दाहाल ‘प्रचण्ड’ र बरिष्ठ नेता माधवकुमार नेपालसँग भएको छलफल बिनानिष्कर्ष टुंगिएपछि प्रधानमन्त्री ओलीले आफूनिकट नेताहरूलाई साँझ बालुवाटार बोलाएका हुन्।
              </p>
          </div>
        </div>
        <div class="media-box br-b pb-20 mb-20 text-center">
            <a href="" class="headline headline-lg">
                विदेशमा अलपत्र परेकालाई अब सरकारी खर्चमा उद्धार गरिने 
            </a>
            <div class="media-info">
                <a href="" class="n-author text-center font20px weight-700">- सन्जिब बगाले </a>
            </div>
            <div class="media-img my-20">
              <img src="{{ asset('frontend/assets/images/kp-ba.jpg') }}" class="img-fluid">
            </div>
            <div class="media-text">
                <p>
                  प्रधानमन्त्री तथा नेपाल कम्युनिष्ट पार्टीका अध्यक्ष केपी शर्मा ओलीले आफूनिकट नेताहरूलाई बिहीबार साँझ बालुवाटारमा बोलाएका छन्। दिउँसो अर्का अध्यक्ष पुष्पकमल दाहाल ‘प्रचण्ड’ र बरिष्ठ नेता माधवकुमार नेपालसँग भएको छलफल बिनानिष्कर्ष टुंगिएपछि प्रधानमन्त्री ओलीले आफूनिकट नेताहरूलाई साँझ बालुवाटार बोलाएका हुन्।
                </p>
            </div>
        </div> -->
    </div>
  </section>
  <!-- Top ad -->
  <div class="container">
    <div class="ad ad-lg py-40">
      <img class="img-fluid" src="{{asset('public/public/uploads/'.widgetsAds('banner-2'))}}">
    </div>
  </div>
  <div class="content-main">
    <div class="container">
      <!-- Mukhya khabar and Samaj News Section -->
      <div class="row">
        <div class="col-md-8 clearfix">
          <!-- Top News Section -->
          <div class="news-list top-news">
              <div class="section-header mb-20 clearfix">
                <span class="news-cat">
                  <img src=" {{ asset('frontend/assets/images/news-icon.png') }}">
                  मुख्य समाचार
                </span>

              </div>

              <div class="row">
                  <!-- featured news -->
                  <div class="col-sm-7 col-md-7 br-r mb-20">
                    @if(!empty($mainFNews))
                    @foreach($mainFNews as $mainf)
                    <div class="media-box mb-10">
                          <div class="media-img media-img-md mb-10">
                            <a href="{{route('detail',$mainf->news_slug)}}">
                              <img src="{{ asset('public/public/uploads/'.$mainf->feature_image) }}" class="img-fluid media-mdwidth">
                            </a>
                          </div>
                          <div class="media-body">
                              <a href="{{route('detail',$mainf->news_slug)}}" class="headline headline-sm-blue text-blue">
                                {{$mainf->news_title}}
                              </a>
                              
                              <!-- <div class="media-post-time mt-10 text-gray-400 font15px">
                                  <span class="time">
                                    <i class="fa fa-clock-o"></i> १० : ३९ : ३५ मध्यान्ह 
                                  </span>
                                  &nbsp;&nbsp;
                                  <span class="date">
                                    <i class="fa fa-calendar"></i> २०७७ श्रावन १ बिहिवार 
                                  </span>
                              </div> -->
                            
                              <div class="media-text mt-10">
                                <p>
                                 {{ $mainf->excerpt}}
                                </p>
                              </div>
                          </div>
                      </div>
                    @endforeach
                    @endif
                  </div>

                  <!-- right side news list -->
                  <div class="col-sm-5 col-md-5">
                      <div class="f-news-list">
                          @if(!empty($mainNews))
                          @foreach($mainNews as $mainnews)
                          <div class="media-box">
                              <a href="{{route('detail',$mainnews->news_slug)}}" class="headline headline-xs">
                               {{ $mainnews->news_title}}
                              </a>
                              <div class="media-post-time mt-10 text-gray-400 font15px">
                                  <span class="time">
                                    <i class="fa fa-calendar" style="color:red"></i> {{ convertedNum($mainnews->publish_date)}} 
                                  </span>
                              </div>
                          </div>
                          @endforeach
                          @endif
                      </div>
                  </div>
              </div>

          </div>
          <div class="ad mt-20 mb-30">
            <!-- middle widget 1 -->
            <img src="{{asset('public/public/uploads/'.widgetsAds('middle-widget-1'))}}" class="img-fluid">
          </div>
        </div>

        <!-- Sidebar News Section -->
        <div class="col-md-4">
          <div class="sidebar">
            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-1'))}}" class="img-block"></a>
            </div>

            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-2'))}}" class="img-block"></a>
            </div>

            <div class="f-news-list samaj-news mb-20">
                <div class="section-header mb-20 clearfix">
                    <span class="news-cat">
                      <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                      समाज
                    </span>
                </div>
                <!--news list-->
                @if(!empty($samaj))
                @foreach($samaj as $samaj)
                <div class="media-box">
                    <div class="media-img-thumb">
                        <a href="{{route('detail',$samaj->news_slug)}}"><img src="{{ asset('public/public/uploads/'.$samaj->feature_image) }}"></a>
                    </div>
                    <a href="{{route('detail',$samaj->news_slug)}}" class="headline headline-xs">
                      {{ $samaj->news_title }}
                    </a>
                    
                    <div class="media-post-time text-gray-400 font15px">
                        <span class="time">
                          <i class="fa fa-calendar"></i>  
                            @php 
                            $month = explode("-", $samaj->publish_date);
                            @endphp
                            {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                        </span>
                    </div>
                </div>
                @endforeach
                @endif
                <!-- <div class="media-box">
                    <div class="media-img-thumb">
                        <a href=""><img src="{{ asset('frontend/assets/images/img-thumb.jpg') }}"></a>
                    </div>
                    <a href="" class="headline headline-xs">
                      प्रचण्ड र नेपालले प्रधानमन्त्रीलाई भने- राजीनामा दिनुस्,
                    </a>
                    
                    <div class="media-post-time text-gray-400 font15px">
                        <span class="time">
                          <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान 
                        </span>
                    </div>
                </div>
                <div class="media-box">
                    <div class="media-img-thumb">
                        <a href=""><img src="assets/images/img-thumb.jpg"></a>
                    </div>
                    <a href="" class="headline headline-xs">
                      प्रचण्ड र नेपालले प्रधानमन्त्रीलाई भने- राजीनामा दिनुस्,
                    </a>
                    
                    <div class="media-post-time text-gray-400 font15px">
                        <span class="time">
                          <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                        </span>
                    </div>
                </div>
                <div class="media-box">
                    <div class="media-img-thumb">
                        <a href=""><img src="{{ asset('frontend/assets/images/img-thumb.jpg') }}"></a>
                    </div>
                    <a href="" class="headline headline-xs">
                      प्रचण्ड र नेपालले प्रधानमन्त्रीलाई भने- राजीनामा दिनुस्,
                    </a>
                    
                    <div class="media-post-time text-gray-400 font15px">
                        <span class="time">
                          <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                        </span>
                    </div>
                </div> -->
            </div>

            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-3'))}}" class="img-block"></a>
            </div>

          </div>
        </div>
      </div>
      <!-- end of Mukhya khaber and samaj -->
      <!-- large ad 2 -->
      <div class="ad-lg mb-25 text-center">
        <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('banner-3'))}}" class="img-fluid"></a>
      </div>
      <!-- Rajniti and Prawas News Section -->
      <div class="row">
        <div class="col-md-8 clearfix">
          <div class="news-list top-news">
            <div class="section-header mb-20 clearfix">
                <span class="news-cat">
                    <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                    राजनीति
                </span>
            </div>
            <div class="row">
                <!-- rajniti featured news -->
                <div class="col-sm-6 col-md-6 br-r mb-20">
                    @if(!empty($rajnitiFNews))
                    @foreach($rajnitiFNews as $rajnitifnews)
                    <div class="media-box mb-10">
                        <div class="media-img media-img-md mb-10">
                          <a href="{{route('detail',$rajnitifnews->news_slug)}}">
                            <img src="{{ asset('public/public/uploads/'.$rajnitifnews->feature_image) }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="media-body">
                            <a href="{{route('detail',$rajnitifnews->news_slug)}}" class="headline headline-sm-blue text-blue">
                             {{ $rajnitifnews->news_title }}
                            </a>
                            
                            <div class="media-post-time mt-10 text-gray-400 font15px">
                                <!-- <span class="time">
                                  <i class="fa fa-clock-o"></i> १० : ३९ : ३५ मध्यान्ह 
                                </span>
                                &nbsp;&nbsp; -->
                                <!-- <span class="date">
                                  <i class="fa fa-calendar"></i> {{ $rajnitifnews->publish_date }} 
                                </span> -->
                            </div>
                          
                            <div class="media-text mt-10">
                              <p>
                                {{ $rajnitifnews->excerpt }}
                              </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <!-- right side news list -->
                <div class="col-sm-6 col-md-6">
                    <div class="f-news-list mb-10">
                      @if(!empty($rajnitiNews))
                      @foreach($rajnitiNews as $rajnitinews)
                      <!--news list-->
                      <div class="media-box">
                          <div class="media-img-thumb">
                              <a href="{{route('detail',$rajnitinews->news_slug)}}"><img src="{{ asset('public/public/uploads/'.$rajnitinews->feature_image) }}"></a>
                          </div>
                          <a href="{{route('detail',$rajnitinews->news_slug)}}" class="headline headline-xs">
                            {{ $rajnitinews->news_title}}
                          </a>
                          
                          <div class="media-post-time text-gray-400 font15px">
                              <span class="time">
                                <i class="fa fa-calendar-o"></i> {{ convertedNum($rajnitinews->publish_date) }}
                              </span>
                          </div>
                      </div>
                      @endforeach
                      @endif
                    </div>
                </div>
            </div>
          </div>
          <div class="ad mt-10 mb-30">
            <img src="{{asset('public/public/uploads/'.widgetsAds('middle-widget-2'))}}" class="img-fluid">
          </div>
        </div>
        <!-- prawas news section --> 
        <div class="col-md-4">
          <div class="sidebar">
            <div class="f-news-list prawas-news mb-20">
              <div class="section-header mb-20 clearfix">
                <span class="news-cat">
                  <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                  प्रवास
                </span>
              </div>
              <!--news list-->
                <!--news list-->
                @if(!empty($prabash))
                @foreach($prabash as $pn)
                <div class="media-box">
                    <div class="media-img-thumb">
                        <a href="{{route('detail',$pn->news_slug)}}"><img src="{{ asset('public/public/uploads/'.$pn->feature_image) }}"></a>
                    </div>
                    <a href="{{route('detail',$pn->news_slug)}}" class="headline headline-xs">
                      {{ $pn->news_title }}
                    </a>
                    
                    <div class="media-post-time text-gray-400 font15px">
                        <span class="time">
                          <i class="fa fa-calendar"></i>  
                            @php 
                            $month = explode("-", $pn->publish_date);
                            @endphp
                            {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                        </span>
                    </div>
                </div>
                @endforeach
                @endif
              <!-- <div class="media-box">
                  <div class="media-img-thumb">
                      <a href=""><img src="{{ asset('frontend/assets/images/img-thumb.jpg') }}"></a>
                  </div>
                  <a href="" class="headline headline-xs">
                    प्रचण्ड र नेपालले प्रधानमन्त्रीलाई भने- राजीनामा दिनुस्,
                  </a>
                  
                  <div class="media-post-time text-gray-400 font15px">
                      <span class="time">
                        <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                      </span>
                  </div>
              </div>
              <div class="media-box">
                  <div class="media-img-thumb">
                      <a href=""><img src="{{ asset('frontend/assets/images/img-thumb.jpg') }}"></a>
                  </div>
                  <a href="" class="headline headline-xs">
                    प्रचण्ड र नेपालले प्रधानमन्त्रीलाई भने- राजीनामा दिनुस्,
                  </a>
                  
                  <div class="media-post-time text-gray-400 font15px">
                      <span class="time">
                        <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                      </span>
                  </div>
              </div>
              <div class="media-box">
                  <div class="media-img-thumb">
                      <a href=""><img src="{{ asset('frontend/assets/images/img-thumb.jpg') }}"></a>
                  </div>
                  <a href="" class="headline headline-xs">
                    प्रचण्ड र नेपालले प्रधानमन्त्रीलाई भने- राजीनामा दिनुस्,
                  </a>
                  
                  <div class="media-post-time text-gray-400 font15px">
                      <span class="time">
                        <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                      </span>
                  </div>
              </div> -->
            </div>
            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-4'))}}" class="img-block"></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Rajniti and Prawas ENDS Section -->
      <!-- large ad -3 -->
      <div class="ad-lg mb-25 text-center">
        <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('banner-4'))}}" class="img-fluid"></a>
      </div>

      <!-- Interview News Section -->
      <div class="row">
        <div class="col-md-8 clearfix">
          <div class="news-list top-news">
            <div class="section-header mb-20 clearfix">
              <span class="news-cat">
                <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                  अन्तर्वार्ता
              </span>
            </div>
            <div class="row">
              @if(!empty($interviewFNews))
              @foreach($interviewFNews as $inewf)
              <!-- interview featured news -->
              <div class="col-sm-6 col-md-6">
                  <div class="media-box media-box-overlay mb-30">
                    <a href="{{route('detail',$inewf->news_slug)}}" class="relative">
                      <div class="media-img">
                          <img src="{{ asset('public/public/uploads/'.$inewf->feature_image) }} " class="img-block">
                      </div>
                      <div class="overlay"></div>
                      <h5 class="headline">
                        {{ $inewf->news_title }}
                      </h5>
                    </a>
                  </div>
              </div>
              @endforeach
              @endif
              @if(!empty($interviewNews))
              @foreach($interviewNews as $inews)
              <div class="col-sm-6 col-md-6">
                  <div class="media-box media-box-overlay mb-30">
                    <a href="{{route('detail',$inews->news_slug)}}" class="relative">
                      <div class="media-img">
                          <img src="{{ asset('public/public/uploads/'.$inews->feature_image) }}" class="img-block">
                      </div>
                      <div class="overlay"></div>
                      <h5 class="headline">
                        {{ $inews->news_title }}
                      </h5>
                    </a>
                  </div>
              </div>

              <div class="clearfix"></div>

              @endforeach
              @endif

             
            </div>
          </div>
        </div>
        <!-- ads section -->
        <div class="col-md-4">
          <div class="sidebar">

            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-5'))}}" class="img-block"></a>
            </div>

            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-6'))}}" class="img-block"></a>
            </div>

            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-7'))}}" class="img-block"></a>
            </div>

          </div>
        </div>
      </div>
      <!-- large ad 4-->
      <div class="ad-lg mb-25 text-center">
        <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('banner-5'))}}" class="img-fluid"></a>
      </div>
      <!-- Interview News Section Ends-->

      <!-- Economy, Kala and Bichar news Section -->
      <div class="row">
        <div class="col-md-8 clearfix">
          <!-- Top News Section -->
          <div class="news-list top-news">
            <div class="section-header mb-20 clearfix">
              <span class="news-cat">
                <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                अर्थ
              </span>
            </div>

            <div class="row">

              <!-- featured news -->

              <div class="col-sm-7 col-md-7 br-r mb-20">
                  @if(!empty($economyFNews))
                  @foreach($economyFNews as $efn)
                  <div class="media-box mb-30">
                      
                      <div class="media-body">
                          <a href="{{route('detail',$efn->news_slug)}}" class="headline headline-sm-blue text-blue">
                            {{ $efn->news_title }}
                          </a>
                          
                          <div class="media-post-time mt-10 mb-20 text-gray-400 font15px">
                              <!-- <span class="time">
                                <i class="fa fa-clock-o"></i> १० : ३९ : ३५ मध्यान्ह 
                              </span>
                              &nbsp;&nbsp; -->
                              <span class="date">
                                <i class="fa fa-calendar"></i> {{ convertedNum($efn->publish_date)}}
                              </span>
                          </div>

                          <div class="media-img media-img-sm-rt mb-10">
                              <a href="{{route('detail',$efn->news_slug)}}">
                                <img src="{{ asset('public/public/uploads/'.$efn->feature_image) }}" class="img-fluid">
                              </a>
                          </div>
                        
                          <div class="media-text">
                            <p>
                             {{ $efn->excerpt }}
                            </p>
                          </div>
                      </div>
                  </div>
                  @endforeach
                  @endif
              </div>

              <!-- right side news list -->
              <div class="col-sm-5 col-md-5">
                  <div class="f-news-list">
                      @if(!empty($economyNews))
                      @foreach($economyNews as $en)
                      <div class="media-box">
                          <a href="{{route('detail',$en->news_slug)}}" class="headline headline-xs">
                           {{ $en->news_title }}
                          </a>
<!--                           
                          <div class="media-post-time mt-10 text-gray-400 font15px">
                              <span class="time">
                                <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                              </span>
                          </div> -->
                      </div>
                      @endforeach
                      @endif
                  </div>
              </div>
            </div>
          </div>
          <div class="ad mt-20 mb-30">
            <img src="{{asset('public/public/uploads/'.widgetsAds('middle-widget-3'))}}" class="img-fluid">
          </div>
        </div>

        <!-- Sidebar News Section -->
        <div class="col-md-4">
          <div class="sidebar">
            <!-- Kala News Section -->
            <div class="kala-news">
                <div class="section-header mb-20 clearfix">
                    <span class="news-cat">
                      <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                      कला
                    </span>
                </div>
                @if(!empty($kalaFNews))
                @foreach($kalaFNews as $kfn)
                <div class="media-box mb-10">
                  <div class="media-img media-img-md mb-10">
                    <a href="{{route('detail',$kfn->news_slug)}}">
                      <img src="{{ asset('public/public/uploads/'.$kfn->feature_image) }}" class="img-block">
                    </a>
                  </div>
                  <div class="media-body">
                      <a href="{{route('detail',$kfn->news_slug)}}" class="headline">
                        {{ $kfn->news_title }}
                      </a>
                  </div>
                </div>
                @endforeach
                @endif
                <div class="row">
                  @if(!empty($kalaNews))
                  @foreach($kalaNews as $kn)
                    <div class="col-sm-6">
                      <div class="media-box mb-10">
                          <div class="media-img media-img-sm mb-10">
                            <a href="{{route('detail',$kn->news_slug)}}">
                              <img src="{{ asset('public/public/uploads/'.$kn->feature_image) }}" class="img-block">
                            </a>
                          </div>
                          <div class="media-body">
                              <a href="{{route('detail',$kn->news_slug)}}" class="headline">
                                {{ $kn->news_title }}
                              </a>
                          </div>
                      </div>
                    </div>
                  @endforeach
                  @endif
                </div>
            </div>
            <!-- Bichar News Section -->
            <div class="bichar-news">
              <div class="section-header mb-20 clearfix">
                  <span class="news-cat">
                    <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                    विचार
                  </span>
              </div>
              <div class="row">
                  @if(!empty($bichar))
                  @foreach($bichar as $bn)
                  <div class="col-sm-6">
                      <div class="media-box text-center mb-20">
                          <div class="round-img div-center">
                            <a href="{{route('detail',$bn->news_slug)}}">
                              <img src="{{ asset('public/public/uploads/'.$bn->feature_image) }}">
                            </a>
                          </div>
                          <div class="headline mt-20">
                            <a href="{{route('detail',$bn->news_slug)}}">{{ $bn->news_title }}</a>
                          </div>
                          <span class="author-name">- $bn->author->name</span>
                      </div>
                  </div>
                  @endforeach
                  @endif
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Economy, Kala and Bichar Ends Section -->

      <!-- large ad 5-->
      <div class="ad-lg mb-25 text-center">
          <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('banner-6'))}}" class="img-fluid"></a>
      </div>

      
      <!-- Sports News Section -->
      <div class="row">
        <div class="col-md-8 clearfix">
            <!-- Top News Section -->
            <div class="news-list top-news">
                <div class="section-header mb-20 clearfix">
                  <span class="news-cat">
                    <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                    खेलकुद
                  </span>
                </div>

                <div class="row">
                  <!-- sports featured news -->
                  @if(!empty($sportsFNews))
                  @foreach($sportsFNews as $sfn)
                  <div class="col-sm-4 col-md-4">
                      <div class="media-box mb-10">
                          <div class="media-img media-img-sm-l mb-10">
                            <a href="{{route('detail',$sfn->news_slug)}}">
                              <img src="{{ asset('public/public/uploads/'.$sfn->feature_image) }}" class="img-block">
                            </a>
                          </div>
                          <div class="media-body">
                              <a href="{{route('detail',$sfn->news_slug)}}" class="headline headline-sm-blue text-blue">
                               {{ $sfn->news_title }}
                              </a>
                              
                              <!-- <div class="media-post-time mt-10 text-gray-400 font15px">
                                  <span class="time">
                                    <i class="fa fa-clock-o"></i> ११ : ५१ : ४८ बिहान 
                                  </span>
                                  &nbsp;&nbsp;
                                  <span class="date">
                                    <i class="fa fa-calendar"></i> २०७७ श्रावन १ बिहिवार 
                                  </span>
                              </div>
                             -->
                              <div class="media-text mt-10">
                                <p>
                                    {{ $sfn->excerpt }}
                                </p>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                  @endif

                  <div class="col-sm-8 col-md-8">
                    <div class="f-news-list mb-20">
                        @if(!empty($sportsNews))
                        @foreach($sportsNews as $sn)
                        <div class="media-box">
                            <div class="media-img-thumb-xs">
                                <a href="{{route('detail',$sn->news_slug)}}"><img src="{{ asset('public/public/uploads/'.$sn->feature_image) }}"></a>
                            </div>
                            <a href="{{route('detail',$sn->news_slug)}}" class="headline headline-xs">
                              {{ $sn->news_title }}
                            </a>
                            
                            <div class="media-post-time text-gray-400 font15px">
                                <span class="time">
                                  <i class="fa fa-calendar"></i>
                                  @php 
                                    $month = explode("-", $sn->publish_date);
                                  @endphp
                                  {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                                </span>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                  </div>
                </div>
            </div>
            <div class="ad mb-30">
              <img src="{{asset('public/public/uploads/'.widgetsAds('middle-widget-4'))}}" class="img-fluid">
            </div>
        </div>

        <!-- Sidebar News Section -->
        <div class="col-md-4">
          <div class="sidebar">
            <div class="f-news-list from-news mb-20">
              <div class="section-header mb-20 clearfix">
                  <span class="news-cat">
                    <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                    पत्रपत्रिकाबाट
                  </span>
              </div>
              <!--news list-->
              <div class="media-box">
                  <a href="" class="headline headline-xs">
                    हामीले त ब्रेन गेन गराएका हौँ, ब्रेन ड्रेन त राज्यले गराइरहेको छ– युवराज कटवाल, फेकन, केन्द्रीय अध्यक्ष
                  </a>
                  
                  <div class="media-post-time text-gray-400 font15px">
                      <span class="time">
                        <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                      </span>
                  </div>
              </div>
              <div class="media-box">
                  <a href="" class="headline headline-xs">
                    शीतल निवासबाट निस्किएलगत्तै प्रचण्डको प्रतिक्रिया- ‘अर्को फण्डा चलाइयो, कोही पनि तरङ्गित नहुनुहोला’ 
                  </a>
                  
                  <div class="media-post-time text-gray-400 font15px">
                      <span class="time">
                        <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                      </span>
                  </div>
              </div>
              <div class="media-box">
                  <a href="" class="headline headline-xs">
                    ईरान–चीन सहमतिले विश्व भूराजनीतिमा कस्तो प्रभाव पार्ला ? जान्नुहोस् ७ बुँदामा 
                  </a>
                  
                  <div class="media-post-time text-gray-400 font15px">
                      <span class="time">
                        <i class="fa fa-clock-o"></i> ११ : ५५ : १४ बिहान  
                      </span>
                  </div>
              </div>
            </div>
            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-8'))}}" class="img-block"></a>
            </div>

          </div>
        </div>
      </div>
      <!-- end of sports and other -->

      <!-- large ad 6 -->
      <div class="ad-lg mb-30 text-center">
          <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('banner-7'))}}" class="img-fluid"></a>
      </div>

      <!-- World, Science, Education News Section -->
      <div class="row">
        <div class="col-md-8 clearfix">
          <div class="news-list top-news">                    
              <div class="row">

                  <!-- World featured news -->
                  <div class="col-sm-4 col-md-4 mb-30 f-news-list">
                      <!-- category title -->
                      <div class="section-header mb-20 clearfix">
                        <span class="news-cat">
                          <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                          विश्व
                        </span>
                      </div>
                      @if(!empty($worldFNews))
                      @foreach($worldFNews as $wfn)
                      <div class="media-box media-box-overlay">
                          <a href="{{route('detail',$wfn->news_slug)}}" class="relative">
                              <div class="media-img media-img-sm-l">
                                  <img src="{{ asset('public/public/uploads/'.$wfn->feature_image) }}" class="img-block">
                              </div>
                              <div class="overlay"></div>
                              <h5 class="headline">
                                  {{ $wfn->news_title }}

                                  
                              </h5>
                          </a>
                          <div class="media-body">
                              <div class="media-text mt-10">
                                <span>
                                    {{ $wfn->excerpt }}
                                </span>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      @endif
                      @if(!empty($worldNews))
                      @foreach($worldNews as $wn)
                      <div class="media-box">
                          <a href="{{route('detail',$wn->news_slug)}}" class="headline headline-xs">
                            {{ $wn->news_title }}
                          </a>
                          
                          <div class="media-post-time text-gray-400 font15px">
                              <span class="time">
                                <i class="fa fa-calendar"></i>                               
                              @php 
                              $month = explode("-", $wn->publish_date);
                              @endphp
                              {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                              </span>
                          </div>
                      </div>
                      @endforeach
                      @endif
                  </div>

                  <!-- Science featured news -->
                  <div class="col-sm-4 col-md-4 mb-30 f-news-list">
                      <!-- category title -->
                      <div class="section-header mb-20 clearfix">
                        <span class="news-cat">
                          <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                          विज्ञान/प्रविधि
                        </span>
                      </div>
                      @if(!empty($worldFNews))
                      @foreach($worldFNews as $wfn)
                      <div class="media-box media-box-overlay">
                          <a href="{{route('detail',$wfn->news_slug)}}" class="relative">
                              <div class="media-img media-img-sm-l">
                                  <img src="{{ asset('public/public/uploads/'.$wfn->feature_image) }}" class="img-block">
                              </div>
                              <div class="overlay"></div>
                              <h5 class="headline">
                                  {{ $wfn->news_title }}

                                  
                              </h5>
                          </a>
                          <div class="media-body">
                              <div class="media-text mt-10">
                                <span>
                                    {{ $wfn->excerpt }}
                                </span>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      @endif
                      @if(!empty($scitechNews))
                      @foreach($scitechNews as $scfi)
                      <div class="media-box">
                          <a href="{{route('detail',$scfi->news_slug)}}" class="headline headline-xs">
                            {{ $scfi->news_title }}
                          </a>
                          
                          <div class="media-post-time text-gray-400 font15px">
                              <span class="time">
                                <i class="fa fa-calendar"></i>                               
                              @php 
                              $month = explode("-", $scfi->publish_date);
                              @endphp
                              {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                              </span>
                          </div>
                      </div>
                      @endforeach
                      @endif
                  </div>

                  <!-- Education featured news -->
                  <div class="col-sm-4 col-md-4 mb-30 f-news-list">
                      <!-- category title -->
                      <div class="section-header mb-20 clearfix">
                        <span class="news-cat">
                          <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                          शिक्षा
                        </span>
                      </div>
                      @if(!empty($educationFNews))
                      @foreach($educationFNews as $edfn)
                      <div class="media-box media-box-overlay">
                          <a href="{{route('detail',$edfn->news_slug)}}" class="relative">
                              <div class="media-img media-img-sm-l">
                                  <img src="{{ asset('public/public/uploads/'.$edfn->feature_image) }}" class="img-block">
                              </div>
                              <div class="overlay"></div>
                              <h5 class="headline">
                                  {{ $edfn->news_title }}

                                  
                              </h5>
                          </a>
                          <div class="media-body">
                              <div class="media-text mt-10">
                                <span>
                                    {{ $edfn->excerpt }}
                                </span>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      @endif
                      @if(!empty($educationFNews))
                      @foreach($educationFNews as $edn)
                      <div class="media-box">
                          <a href="{{route('detail',$edn->news_slug)}}" class="headline headline-xs">
                            {{ $edn->news_title }}
                          </a>
                          
                          <div class="media-post-time text-gray-400 font15px">
                              <span class="time">
                                <i class="fa fa-calendar"></i>                               
                              @php 
                              $month = explode("-", $edn->publish_date);
                              @endphp
                              {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                              </span>
                          </div>
                      </div>
                      @endforeach
                      @endif

                  </div>

              </div>

          </div>
        </div>
        <!-- Sidebar News Section -->
        <div class="col-md-4">
          <div class="sidebar">
            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-9'))}}" class="img-block"></a>
            </div>
            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-10'))}}" class="img-block"></a>
            </div>
            <!-- Ad space -->
            <div class="ad-sm mb-30">
              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-11'))}}" class="img-block"></a>
            </div>
          </div>
        </div>
      </div>
      <!-- World, Science, Education News Ends -->
      <!-- large ad 7 -->
      <div class="ad-lg mb-30 text-center">
        <a href=""><img src=" {{asset('public/public/uploads/'.widgetsAds('banner-8'))}}" class="img-fluid"></a>
      </div>
      <!-- World, Science, Education News Section  Ends-->
    </div> <!-- ends container-->
  </div> <!-- end content-main-->
  <!-- videos news section -->
  <div class="video-news-wrapper clearfix">
    <div class="container">
        <div class="section-header-white mb-20 clearfix">
          <span class="news-cat">
            <img src="{{ asset('frontend/assets/images/news-icon-w.png') }}">
            भिडियो
          </span>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-6">
              <div class="media-box media-box-overlay mb-30">

                  @php $video_id = explode("?v=", $fvideos->url);
                    $video_id = !empty($video_id[1]) ? $video_id[1]:'';
                    $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                  @endphp
                  <a href="{{$fvideos->url}}" class="relative" target="_blank">
                    <div class="media-img video-thumb-lg">
                        <img src = "{{ $thumbnail }}" >
                    </div>
                    <div class="play-icon cover">
                      <div class="mytable">
                        <div class="table-cell va-middle text-center">
                            <img src="{{ asset('frontend/assets/images/play-icon.png') }}">
                        </div>
                      </div>
                    </div>
                    <div class="overlay"></div>
                    <h5 class="headline headline-sm mb-20">
                     {{ $fvideos->headline }}
                    </h5>
                  </a>
              </div>
          </div>
          <div class="col-sm-8 col-md-6">
              <div class="videos-more">
                  <div class="row">
                      @if(!empty($videos))
                      @foreach($videos as $video)
                        @php $video_id = explode("?v=", $video->url);
                        $video_id = !empty($video_id[1]) ? $video_id[1]:'';
                        $thumbnail="http://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
                      @endphp
                      <div class="col-sm-6">
                          <div class="media-box media-box-overlay mb-30">
                              <a href="{{$video->url}}" class="relative" target="_blank">
                                  <div class="media-img img-sm">
                                      <img src="{{ $thumbnail }}" class="img-block">
                                  </div>
                                  <div class="play-icon cover">
                                    <div class="mytable">
                                      <div class="table-cell va-middle text-center">
                                          <img src="{{ asset('frontend/assets/images/play-icon.png') }}" width="50px">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overlay"></div>
                                  <h5 class="headline">
                                    {{ $video->headline }}
                                  </h5>
                              </a>
                          </div>
                      </div>
                      @endforeach
                      @endif
                      <!-- <div class="col-sm-6">
                          <div class="media-box media-box-overlay mb-30">
                              <a href="" class="relative">
                                  <div class="media-img img-sm">
                                      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLQGSXoAiT2W4W8D3397nl4OB_GxfOmJk9"></iframe>
                                  </div>
                                  <div class="play-icon cover">
                                    <div class="mytable">
                                      <div class="table-cell va-middle text-center">
                                          <img src="{{ asset('frontend/assets/images/play-icon.png') }}" width="50px">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overlay"></div>
                                  <h5 class="headline">
                                    फिल्मको पर्दामा कहिले देखिएलान् पल र स्वस्तिमा ?
                                  </h5>
                              </a>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="media-box media-box-overlay mb-30">
                              <a href="" class="relative">
                                  <div class="media-img img-sm">
                                      <img src="{{ asset('frontend/assets/images/v3.jpg') }}" class="img-block">
                                  </div>
                                  <div class="play-icon cover">
                                    <div class="mytable">
                                      <div class="table-cell va-middle text-center">
                                          <img src="{{ asset('frontend/assets/images/play-icon.png') }}" width="50px">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overlay"></div>
                                  <h5 class="headline">
                                    सफल करिअरका लागि कस्तो तयारी गर्दैछन् अनमोल ?
                                  </h5>
                              </a>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="media-box media-box-overlay mb-30">
                              <a href="" class="relative">
                                  <div class="media-img img-sm">
                                      <img src="{{ asset('frontend/assets/images/v4.jpg') }}" class="img-block">
                                  </div>
                                  <div class="play-icon cover">
                                    <div class="mytable">
                                      <div class="table-cell va-middle text-center">
                                          <img src="{{ asset('frontend/assets/images/play-icon.png') }}" width="50px">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overlay"></div>
                                  <h5 class="headline">
                                    नायिका वर्षा राउत विवादमा परेपछि नायक संजोग कोइरालाले
                                  </h5>
                              </a>
                          </div>
                      </div> -->
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>

  <!-- large ad -->
  <div class="container">
      <div class="ad-lg mt-30 text-center">
          <a href=""><img src="{{ asset('frontend/assets/images/honda.gif') }}" class="img-fluid"></a>
      </div> 
  </div>
@endsection