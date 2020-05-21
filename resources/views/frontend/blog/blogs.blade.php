@extends('master')
@section('content')
<!-- Mobile Menu Area End -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h1 style="text-align: center;">Blogs </h1>
            <!-- <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Contact</li>
            </ul> -->
        </div>
    </div>
</div>
<!-- blog Page Area Start Here -->
<div class="news-page-area">
    <div class="container">
        <div class="row">
            @if(isset($blogs) && !empty($blogs))
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="news-box">
                        <div class="news-img-holder hue">
                        <a href="{{ route('frontend.singleblog', ['slug' => urlencode($blog->slug), 'id' => $blog->id]) }}"><img src="blog/thumb/{{$blog->image}}" class="img-responsive" alt="research"></a>
                            <ul class="news-date2">
                                <li>{{ date('d M', strtotime($blog->created_at))}}</li>
                                <li>{{ date('Y', strtotime($blog->created_at))}}</li>
                            </ul>
                        </div>
                        <h3 class="title-news-left-bold"><a href="{{  route('frontend.singleblog', ['slug' => urlencode($blog->slug), 'id' => $blog->id]) }}">{{$blog->title}}?</a></h3>
                        <p>{!! Str::words($blog->description, 20, ' ...') !!}</p>
                    </div>
                </div>
            @endforeach
            @endif
            {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="news-box">
                    <div class="news-img-holder hue">
                    <a href="{{ route('frontend.blog_detail') }}"><img src="img/news/7.jpg" class="img-responsive" alt="research"></a>
                        <ul class="news-date2">
                            <li>27 Dec</li>
                            <li>2020</li>
                        </ul>
                    </div>
                    <h3 class="title-news-left-bold"><a href="{{ route('frontend.blog_detail') }}">How To Build Taj Mahal In Pakistan?</a></h3>
                    <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="news-box">
                    <div class="news-img-holder hue">
                    <a href="{{ route('frontend.blog_detail') }}"><img src="img/news/7.jpg" class="img-responsive" alt="research"></a>
                        <ul class="news-date2">
                            <li>27 Dec</li>
                            <li>2020</li>
                        </ul>
                    </div>
                    <h3 class="title-news-left-bold"><a href="{{ route('frontend.blog_detail') }}">How To Build Taj Mahal In Pakistan?</a></h3>
                    <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="news-box">
                    <div class="news-img-holder hue">
                    <a href="{{ route('frontend.blog_detail') }}"><img src="img/news/7.jpg" class="img-responsive" alt="research"></a>
                        <ul class="news-date2">
                            <li>27 Dec</li>
                            <li>2020</li>
                        </ul>
                    </div>
                    <h3 class="title-news-left-bold"><a href="{{ route('frontend.blog_detail') }}">How To Build Taj Mahal In Pakistan?</a></h3>
                    <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="news-box">
                    <div class="news-img-holder hue">
                    <a href="{{ route('frontend.blog_detail') }}"><img src="img/news/7.jpg" class="img-responsive" alt="research"></a>
                        <ul class="news-date2">
                            <li>27 Dec</li>
                            <li>2020</li>
                        </ul>
                    </div>
                    <h3 class="title-news-left-bold"><a href="{{ route('frontend.blog_detail') }}">How To Build Taj Mahal In Pakistan?</a></h3>
                    <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer...</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="news-box">
                    <div class="news-img-holder hue">
                    <a href="{{ route('frontend.blog_detail') }}"><img src="img/news/7.jpg" class="img-responsive" alt="research"></a>
                        <ul class="news-date2">
                            <li>27 Dec</li>
                            <li>2020</li>
                        </ul>
                    </div>
                    <h3 class="title-news-left-bold"><a href="{{ route('frontend.blog_detail') }}">How To Build Taj Mahal In Pakistan?</a></h3>
                    <p>Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry's standard dummy text ever when an unknown printer...</p>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- blog Page Area End Here -->
@stop
