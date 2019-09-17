@extends('layouts.app')

@section('content')
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
@endsection
