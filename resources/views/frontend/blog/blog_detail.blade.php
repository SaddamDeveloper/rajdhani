@extends('master')
@section('content')
<!-- Mobile Menu Area End -->
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h1 style="text-align: center;">Blog</h1>
            <!-- <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Contact</li>
            </ul> -->
        </div>
    </div>
</div>
<!-- blog Details Page Area Start Here -->
<div class="news-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
                <div class="row news-details-page-inner">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-img-holder">
                            <img src="{{asset('blog/'.$single_blog->image)}}" class="img-responsive" alt="research">
                            <ul class="news-date1">
                                <li>{{ date('d M', strtotime($single_blog->created_at))}}</li>
                                <li>{{ date('Y', strtotime($single_blog->created_at))}}</li>
                            </ul>
                        </div>
                        <h2 class="title-default-left-bold-lowhight">{{$single_blog->title}}</h2>
                        <p>{{$single_blog->description}}</p>
                        {{-- {{}} --}}
                        <ul class="news-social">
                            {!! Share::currentPage(null, [], '<li>', '</li>')->facebook() !!}
                            {!! Share::currentPage(null, [], '<li>', '</li>')->twitter() !!}
                            {!! Share::currentPage(null, [], '<li>', '</li>')->whatsapp() !!}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Latest Posts</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>
                                    @if(isset($latestBlog) && !empty($latestBlog))
                                    @foreach ($latestBlog as $latest)
                                    <li>
                                        <div class="latest-research-img">
                                            <a href="{{  route('frontend.singleblog', ['slug' => urlencode($latest->slug), 'id' => $latest->id]) }}"><img src="{{asset('blog/thumb/'.$latest->image)}}" class="img-responsive" alt="skilled"></a>
                                        </div>
                                        <div class="latest-research-content">
                                            <h4>{{ date('d M, Y', strtotime($latest->created_at))}}</h4>
                                            <p>{!! Str::words($latest->description, 6, ' ...')!!}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog Page Area End Here -->
@stop

@section('og')
<meta property="og:title" content="{{ $single_blog->title }}" />
<meta property="og:image" content="{{ $single_blog->image }}" />
<meta property="og:type" content="website" />
@endsection