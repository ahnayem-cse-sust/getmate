@extends('layouts.app')

@section('content')
    @guest
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
    @endguest
    <section class="user-moving-section">
    </section>

    <section class="user-section py-4 py-md-5">
        <div class="container">
            <h2 class="section-title text-center">Featured Profiles</h2>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                        <div class="user-profile">
                            <div class="profile-image">
                                <img class="img-fluid" src="{{asset(@$user->userDetail->image)}}">
                            </div>
                            <div class="profile-info">
                                @hasanyrole('user|admin')
                                    <p><span> Name : </span>{{@$user->name}}</p>
                                @endhasanyrole
                                <p><span> Height : </span>{{@$user->userDetail->height}}</p>
                                <p><span>Gender : </span>{{@$user->userDetail->gender}}</p>
                                <p><span> Qualification : </span>{{@$user->userDetail->qualification}}</p>
                                <div class="text-center py-2"><a href="{{ url('/login') }}" class="btn btn-common text-center">More Details</a></div>
                                @hasanyrole('user|admin')
                                    <p><span>Religion : </span>{{@$user->userDetail->religion}}</p>
                                    <p><span>Present Address : </span>{{@$user->userDetail->present_address}}</p>
                                    <p><span> Permanent Address : </span>{{@$user->userDetail->permanent_address}}</p>
                                @endhasanyrole
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--            {{ $users->links() }}--}}
        </div>
    </section>

    <section class="blog-section position-relative py-md-5 py-4">

        <div class="container">
            <h2 class="section-title text-center">Latest News</h2>


            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                            class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                            class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->


        </div>
    </section>
    <section class="user-section py-4 py-md-5">
        <div class="container">
            <h2 class="section-title text-center">Latest Profiles</h2>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-md-3">
                        <div class="user-profile">
                            <div class="profile-image">
                                <img class="img-fluid" src="{{@$user->userDetail->image}}">
                            </div>
                            <div class="profile-info">
                                <p> Name: <span> {{@$user->name}}</span></p>
                                @hasanyrole('user|admin')
                                <p> Height: <span>{{@$user->userDetail->height}}</span></p>
                                <p>Religion: <span>{{@$user->userDetail->religion}}</span></p>
                                <p>Gender: <span>{{@$user->userDetail->gender}}</span></p>
                                <p>Qualification: <span>{{@$user->userDetail->qualification}}</span></p>
                                <p>{Present Address}: <span>{{@$user->userDetail->present_address}}</span></p>
                                <p>Permanent Address: <span>{{@$user->userDetail->permanent_address}}</span></p>
                                @endhasanyrole
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="laravel-paginate text-center">
{{--             {{ $users->links() }}--}}
            </div>
        </div>
    </section>


@endsection
