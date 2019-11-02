@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center">Latest News</h2>
        <div class="blog-carousal">
                @foreach ($blogs as $blog)
                <div class="blog-single-carousal position-relative">
                    <a href="#"><img src="{{$blog->thum_link}}" alt="" class="img-fluid"></a>
                    <h3 class="section-sub-title"><a href="#">{{$blog->title}}</a></h3>
                </div>
                @endforeach
        </div>
    </div>
@endsection
