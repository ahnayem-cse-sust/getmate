


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('New Users List') }}</div>

                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                        {{-- {{dd($new)}} --}}
                            <tr>
                                <td><a href="{{route('userdetails',['id'=>$new->id])}}">{{$new->name}}</a></td>
                                <td><a href="{{route('activate',['id'=>$new->id])}}">Activate</a></td>
                                <td><a href="{{route('destroy',['id'=>$new->id])}}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$news->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Users List') }}</div>

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td><a href="{{route('deactivate',['id'=>$user->id])}}">Deactivate</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection


