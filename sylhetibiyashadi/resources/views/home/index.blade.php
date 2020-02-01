@extends('layouts.app')
@section('content')
    @guest
        @include('home.includes.slider')
    @endguest

        @include('home.includes.search')
{{--        @include('home.includes.featured')--}}


    @role('new')
        <p class="text-center" style="color:red;">Your account will be activated soon.</p>
    @endrole

    <section class="user-section py-4 py-md-5">
        <div class="container">
        <h2 class="section-title text-center">Profiles</h2>
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                        <div class="user-profile">
                            <div class="profile-image">
                                    @if(!empty($user->userDetail->image))
                                    <img src="{{asset(@$user->userDetail->image)}}" alt="blog thum" class="img-fluid">
                                    @else
                                    <img src="{{ asset('img/profile/no-person.png') }}" alt="blog thum" class="img-fluid">
                                    @endif
                            </div>
                            <div class="profile-info">
                                <p><span> ID : </span>{{$user->id+400950}}</p>
                                {{-- @hasanyrole('user|admin') --}}
                                <p><span> Name : </span>{{@$user->name}}</p>
                                {{-- @endhasanyrole --}}
                                <p><span>Height : </span>{{@$user->userDetail->height}}</p>
                                <p><span>Weight : </span>{{@$user->userDetail->weight}}</p>
                                <p><span>Gender : </span>{{@$user->userDetail->gender}}</p>
                                <p><span>Age : </span>{{@$user->userDetail->age}}</p>
                                <p><span>Qualification : </span>{{@$user->userDetail->qualification}}</p>
                                <p><span>Profession : </span>{{@$user->userDetail->profession}}</p>
                                @guest
                                {{-- <div class="text-center py-2"><a href="{{ url('/login') }}" class="btn btn-common text-center">More Details</a></div> --}}
                                @endguest
                                {{-- @hasanyrole('user|admin') --}}
                                <p><span>Skin Color : </span>{{@$user->userDetail->skin_color}}</p>
                                <p><span>Religion : </span>{{@$user->userDetail->religion}}</p>
                                <p><span>Present Address : </span>{{@$user->userDetail->present_address}}</p>
                                <p><span> Permanent Address : </span>{{@$user->userDetail->permanent_address}}</p>
                                {{-- @endhasanyrole --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$users->links()}}
        </div>
    </section>


@endsection
