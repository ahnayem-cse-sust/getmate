@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Profile') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('storeProfile') }}" enctype="multipart/form-data">
                            @csrf
                            {{-- Religion --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                                <div class="col-md-8">
                                    <input id="religion" type="text"
                                           class="form-control @error('religion') is-invalid @enderror" name="religion"
                                           value="{{ @$user->userDetail->religion }}" required autocomplete="religion"
                                           autofocus>
                                    @error('religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Height --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                                <div class="col-md-8">
                                    <input id="height" type="text"
                                           class="form-control @error('height') is-invalid @enderror" name="height"
                                           value="{{ @$user->userDetail->height }}" required autocomplete="height"
                                           autofocus>
                                    @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Gender --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="gender" id="gender" value="female">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            {{-- Birth Date --}}
                            <div class="form-group row">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>
                                    <div class="col-md-8">
                                        <input class="form-control @error('birth') is-invalid @enderror" name="dateofbirth" type="date" value="{{@$user->userDetail->dateofbirth}}" id="date-of-birth-input">
                                        @error('birth')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            {{-- Qualification --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>
                                <div class="col-md-8">
                                    <input id="qualification" type="text"
                                           class="form-control @error('qualification') is-invalid @enderror"
                                           name="qualification" value="{{ @$user->userDetail->qualification }}" required
                                           autocomplete="qualification" autofocus>
                                    @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Present Address --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>
                                <div class="col-md-8">
                                    <textarea id="present_address" type="text"
                                              class="form-control @error('present_address') is-invalid @enderror"
                                              name="present_address" required autocomplete="present_address" row="5"
                                              col="200"
                                              autofocus>{{trim(@$user->userDetail->present_address )}}</textarea>
                                    @error('present_address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Permanent Address --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>
                                <div class="col-md-8">
                                    <textarea id="permanent_address" type="text"
                                              class="form-control @error('permanent_address') is-invalid @enderror"
                                              name="permanent_address" required autocomplete="permanent_address" row="5"
                                              col="200"
                                              autofocus>{{trim(@$user->userDetail->permanent_address )}}</textarea>
                                    @error('permanent_address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Image Upload --}}
                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Upload Image') }}</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                    @error('permanent_address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-common">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
