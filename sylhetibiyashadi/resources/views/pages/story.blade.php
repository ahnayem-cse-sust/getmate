@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="section-title text-center">Latest News</h2>
        <div class="blog-carousal">
                @foreach ($blogs as $blog)
                <a href="#">{{$blog->title}}</a>
                @endforeach
        </div>
    </div>
@endsection
