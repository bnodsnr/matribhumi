@extends('frontend.layouts.master')
@section('content')
      <!-- Top ad -->
      <div class="container">
          <div class="ad ad-lg py-40">
              <a href=""><img src="{{ asset('public/public/uploads/'.widgetsAds('banner-1')) }}" class="img-fluid"></a>
          </div>
      </div>
      
      <div class="content-main">
        <div class="container">

          <div class="post-detail">

              <div class="media-box">
                  <h2 class="headline text-center my-0 headline-lg">
                     {{ $article->news_title }} 
                  </h2>

                  <div class="media-info p-share my-30">

                      <span class="n-author font20px weight-700 text-blue">- {{ $article->author->name }}</span>
                      &nbsp;&nbsp;|&nbsp;&nbsp;
                      <span class="p-date"> @php 
                            $month = explode("-", $article->publish_date);
                            @endphp
                            <i class="fa fa-calendar"></i> {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} </span>

                      <!-- news post share pulgin here -->
                      <div class="post-share-info">
                          <!--your pulgin code here -->
                      </div>
                      <!-- news post share ends here -->
                  </div>
                  @if(!empty($article->feature_image))
                  <div class="media-img mb-20">
                    <img src="{{ asset('public/public/uploads/'.$article->feature_image) }}" class="img-fluid media-fullwidth">
                  </div>
                  @endif
              </div>

              <!-- large ad -->
              <div class="ad-lg mt-30 mb-30 text-center">
                  <a href=""><img src="{{ asset('public/public/uploads/'.widgetsAds('banner-3')) }}" class="img-fluid"></a>
              </div>

              <div class="row">

                  <div class="col-md-8 clearfix">
                      <div class="media-content media-text">
                           {!! !empty($article) ? ($article->news_description) :''  !!}
                          <div class="ads-wrap">
                              <div class="row">                          
                                <div class="ad-lg mt-30 mb-30 text-center">
                                  @if(!empty($article->feature_image))<img src="{{ asset('public/public/uploads/'.widgetsAds('banner-4')) }}" class="img-fluid"> @endif
                                </div> 
                              </div>
                          </div>
                      </div>

                      <!-- <div class="quotation my-30">
                          <blockquote>
                            पछि हाम्रो पार्टीको चौथो महाधिवेशनले त्यो विश्लेषणलाई आनुमोदन गर्यो । पछि बनेका माले वा माओवादीहरुले पनि २०२६ सालमा गरिएको त्यो नयाँ विश्लेषणलाई स्वीकार गरेका छन् ।
                          </blockquote>
                      </div> -->

                      <div class="social-post-share">
                        <h4>share this post</h4>
                        <ul class="floated-list clearfix">
                          <li><a href=""><img src="{{ asset('frontend/assets/images/mail.png') }}" width="40px"></a></li>
                          <li><a href=""><img src="{{ asset('frontend/assets/images/fb.png') }}" width="40px"></a></li>
                          <li><a href=""><img src="{{ asset('frontend/assets/images/msg.png') }}" width="40px"></a></li>
                          <li><a href=""><img src="{{ asset('frontend/assets/images/twt.png') }}" width="40px"></a></li>
                        </ul>
                      </div>

                      <div class="ad-lg my-30 text-center">
                          <a href=""><img src="{{ asset('public/public/uploads/'.widgetsAds('banner-7')) }}" class="img-fluid"></a>
                      </div> 

                      <!-- facebook comment plugin here -->
                      <!-- <div class="post-comment-box">
                          <p class="weight-700 mb-20 font20px">प्रतिक्रिया दिनुहोस्</p> -->
                          <!-- code here -->
                      <!-- </div> -->
                      <!-- facebook comment plugin ends here -->

                      <!-- Related news -->
                      <div class="news-list top-news">

                            <div class="section-header mb-20 clearfix">
                                <span class="news-cat">
                                  <img src="{{ asset('frontend/assets/images/news-icon.png') }}">
                                  सम्बन्धित समाचार शीर्षकहर
                                </span>
                                <!-- <a href="" class="more pull-right">
                                   थप <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a> -->
                            </div>

                            <div class="row">
                              @if(!empty($mainNews))
                                @foreach($mainNews as $mainnews)
                                <div class="col-sm-4 col-md-4">
                                    <div class="media-box mb-30">
                                        <div class="media-img media-img-sm-l mb-10">
                                          <a href="">
                                            <img src="{{ asset('public/public/uploads/'.$mainnews->feature_image) }}" class="img-fluid">
                                          </>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="headline headline-sm-blue text-blue">
                                             {{ $mainnews->news_title}}
                                            </a>
                                            
                                            <div class="media-post-time text-gray-400 font15px">
                                                <span class="time">
                                                   <i class="fa fa-calendar" style="color:red"></i> {{ convertedNum($mainnews->publish_date)}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                              @endif

                                <!-- <div class="col-sm-4 col-md-4">
                                    <div class="media-box mb-30">
                                        <div class="media-img media-img-sm-l mb-10">
                                          <a href="">
                                            <img src="assets/images/b1.jpg" class="img-block">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="headline headline-sm-blue text-blue">
                                             धनुषामा मृत्यु भएका युवकमा कोरोना संक्रमण पुष्टि
                                            </a>
                                            
                                            <div class="media-post-time text-gray-400 font15px">
                                                <span class="time">
                                                  <i class="fa fa-clock-o"></i> ११ : ५१ : ४८ बिहान 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="media-box mb-30">
                                        <div class="media-img media-img-sm-l mb-10">
                                          <a href="">
                                            <img src="assets/images/b3.jpg" class="img-block">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="headline headline-sm-blue text-blue">
                                             चोलेन्द्रको फैसलालाई चुनौती दिने चार नजीर
                                            </a>
                                            
                                            <div class="media-post-time text-gray-400 font15px">
                                                <span class="time">
                                                  <i class="fa fa-clock-o"></i> ११ : ५१ : ४८ बिहान 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="media-box mb-30">
                                        <div class="media-img media-img-sm-l mb-10">
                                          <a href="">
                                            <img src="assets/images/k2.jpg" class="img-block">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="headline headline-sm-blue text-blue">
                                             पर्सामा मृतक वृद्धसहित थप १९ जनामा कोरोना संक्रमण पुष्टि
                                            </a>
                                            
                                            <div class="media-post-time text-gray-400 font15px">
                                                <span class="time">
                                                  <i class="fa fa-clock-o"></i> ११ : ५१ : ४८ बिहान 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="media-box mb-30">
                                        <div class="media-img media-img-sm-l mb-10">
                                          <a href="">
                                            <img src="assets/images/d2.jpg" class="img-block">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="headline headline-sm-blue text-blue">
                                             किसानको पिरलो : धान गोड्ने बेला भो, मल छैन
                                            </a>
                                            
                                            <div class="media-post-time text-gray-400 font15px">
                                                <span class="time">
                                                  <i class="fa fa-clock-o"></i> ११ : ५१ : ४८ बिहान 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <div class="media-box mb-30">
                                        <div class="media-img media-img-sm-l mb-10">
                                          <a href="">
                                            <img src="assets/images/d3.jpg" class="img-block">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="headline headline-sm-blue text-blue">
                                             आफ्नो स्वास्थ्यमा किन खेलाँची गर्दैछन् प्रधानमन्त्री ओली ?
                                            </a>
                                            
                                            <div class="media-post-time text-gray-400 font15px">
                                                <span class="time">
                                                  <i class="fa fa-clock-o"></i> ११ : ५१ : ४८ बिहान 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                         -->
                            </div>

                        </div>
                        <!-- Related news ends here -->

                  </div>

                  <!-- ad Sidebar Section -->
                  <div class="col-md-4">
                      <div class="sidebar">
                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-1'))}}" class="img-block"></a>
                          </div> 

                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                              <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-2'))}}" class="img-block"></a>
                          </div>

                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                             <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-3'))}}" class="img-block"></a>
                          </div> 

                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                            <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-4'))}}" class="img-block"></a>
                          </div>

                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                            <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-5'))}}" class="img-block"></a>
                          </div>

                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                            <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-6'))}}" class="img-block"></a>
                          </div> 

                          <!-- ad -->
                          <div class="ad-sm mb-30 text-center">
                            <a href=""><img src="{{asset('public/public/uploads/'.widgetsAds('right-widget-7'))}}" class="img-block"></a>
                          </div>

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