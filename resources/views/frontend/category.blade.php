@extends('frontend.layouts.master')
@section('content')
      <div class="content-main category-page">
          <div class="container">
            <div class="my-breadcumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb theme-ffffff-bg mt-10 mb-10">
                    <li class="breadcrumb-item"><a href="#" class="text-blue"><i class="fa fa-home"></i> गृहपृष्ठ</a></li>
                    <li class="breadcrumb-item active text-gray-800" aria-current="page">{{ getCategoryName($slug) }}</li>
                  </ol>
                </nav>
            </div>

            <div class="page-title">
              <h2>{{ getCategoryName($slug) }}</h2>
            </div>

            <!-- Top News Section -->
            @if(!empty($bannerNews))
            <section class="top-news">
                <div class="media-box br-b pb-20 mt-20 mb-30 text-center">
                    <a href="{{ route('news', $bannerNews->news_slug )}}" class="headline headline-lg">
                        {{ $bannerNews->news_title}} 
                    </a>
                    <div class="media-info">
                        <a href="" class="n-author text-center font20px weight-700">- {{ $bannerNews->author->name }} </a>
                    </div>
                    <div class="media-img my-20">
                      <img src="{{ asset('public/public/uploads/'.$bannerNews->feature_image) }}" class="img-fluid media-fullwidth">
                    </div>
                    <div class="media-text">
                        <p>{{ $bannerNews->excerpt }}</p>
                    </div>
                </div>
            </section>
            @endif
            <!-- News listing Section -->
            <div class="row row-flex-wrap row-flex">
                @if(!empty($articles))
                @foreach($articles as $key => $article)
                <div class="col-sm-6 col-md-4">
                    <div class="media-box mb-30 flex-col">
                        <div class="media-img media-img-md mb-10">
                          <a href="">
                            <img src="{{ asset('public/public/uploads/'.$article->feature_image) }}" class="img-fluid">
                          </a>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('news', $article->news_slug)}}" class="headline headline-sm-blue text-blue">
                             {{ $article->news_title }}
                            </a>
                            
                            <div class="media-post-time mt-10 text-gray-400 font15px">
                                <span class="time">
                                  <img src="{{asset('frontend/assets/images/author.png') }}" alt="Avatar" class="avatar"> {{ $article->author->name }}
                                </span>
                                &nbsp;&nbsp;
                              <span class="time">
                                <i class="fa fa-calendar"></i>  
                                @php 
                                $month = explode("-", $article->publish_date);
                                @endphp
                                {{ getNepaliMonthName($month[1]) }}, {{ convertednum($month[2])}}  {{ convertednum($month[0]) }} 
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                
            </div>

            <hr class="mt-50">
            <div class="my-page pull-right">
                <nav aria-label="">
                    {{ $articles->links() }}
                  </nav>
            </div>

          </div>
      </div>
@endsection