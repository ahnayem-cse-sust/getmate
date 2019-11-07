@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="section-title text-center">Add Story</h2>
        {{-- <div class="blog-carousal">
                @foreach ($blogs as $blog)
                <div class="blog-single-carousal position-relative">
                    <a href="#"><img src="{{$blog->thum_link}}" alt="" class="img-fluid"></a>
                    <h3 class="section-sub-title"><a href="#">{{$blog->title}}</a></h3>
                </div>
                @endforeach
        </div> --}}
        <form method="POST" action="{{ route('blog.store') }}">
            @csrf
            <div class="form-group">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" placeholder="Title" autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" value="{{ old('body') }}" placeholder="Story Body"></textarea>
            </div>
             {{-- Image Upload --}}
             <div class="form-group">
               
                
                <input type="file" name="image" class="form-control">
                @error('permanent_address')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection