@extends('layouts.app')

@section('content')
    <section class="carosel-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carosel-item-single" style="background-image: url({{ asset('img/banner1.jpg') }});">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carosel-item-single" style="background-image: url({{ asset('img/banner2.jpg') }});">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carosel-item-single" style="background-image: url({{ asset('img/banner3.jpg') }});">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="user-moving-section">
aaa
    </section>

    <section class="user-section">
        <div class="container">
            <div class="row">
                @foreach ($users as $user)
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <img width="40%" src="{{asset('demo.jpg')}}">
                        </div>
                        <div class="col-md-12">
                            Name: {{@$user->name}}
                        </div>
                        @role('user')
                        <div class="col-md-12">
                            Height: {{@$user->userDetail->height}}
                        </div>
                        <div class="col-md-12">
                            Religion: {{@$user->userDetail->religion}}
                        </div>
                        @endrole
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
        
@endsection
