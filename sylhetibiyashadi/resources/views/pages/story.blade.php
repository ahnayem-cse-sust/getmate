@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center">Latest News</h2>
        <div class="row">
                @foreach ($blogs as $blog)
                <?php// dd($blog); ?>
                <div class="col-md-6 mb-5">
                    <div class="blog-single position-relative">
                        <div class="thum">
                            @if(!empty($blog->thum_link))
                            <img src="{{$blog->thum_link}}" alt="blog thum" class="img-fluid">
                            @else
                            <img src="{{ asset('img/blog/no-image.png') }}" alt="blog thum" class="img-fluid">
                            @endif
                        </div>
                        <div class="entry-meta d-flex">
                            <div class="entry-by pr-4">
                                <span><b>Posted by - </b> </span>
                                <span> Sylheti Biyashadi</span>
                            </div>
                            <div class="entry-category pl-4">
                                <span><b> Date -</b></span>
                                <span>{{$blog->created_at->format('d/m/Y')}}</span>
                            </div>
                        </div>
                        <h3 class="section-sub-title">{{$blog->title}}</h3>
                        <p id="full">{!!nl2br(e($blog->description))!!}</p>
                    </div>
                </div>
                @endforeach
        </div>
        {{ $blogs->links() }}

    </div>
@endsection
