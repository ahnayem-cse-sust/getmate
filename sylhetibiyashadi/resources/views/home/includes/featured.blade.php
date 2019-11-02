<section class="user-section py-4 py-md-5">
    <div class="container">
        <h2 class="section-title text-center">Featured Profiles</h2>
        <div class="row user-carousal">
            @foreach ($users as $user)
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-4 ">
                    <div class="user-profile">
                        <div class="profile-image">
                            <img class="img-fluid" src="{{asset(@$user->userDetail->image)}}" alt="profile-thum">
                        </div>
                        <div class="profile-info">
                            @hasanyrole('user|admin')
                            <p><span> Name : </span>{{@$user->name}}</p>
                            @endhasanyrole
                            <p><span> Height : </span>{{@$user->userDetail->height}}</p>
                            <p><span>Gender : </span>{{@$user->userDetail->gender}}</p>
                            <p><span>Age : </span>{{@$user->userDetail->age}}</p>
                            <p><span> Qualification : </span>{{@$user->userDetail->qualification}}</p>
                            @guest
                                <div class="text-center py-2"><a href="{{ url('/login') }}" class="btn btn-common text-center">More Details</a></div>
                            @endguest
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
        {{-- {{$users->links()}} --}}
    </div>
</section>
