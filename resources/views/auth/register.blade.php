@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="name" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="name" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="gender" type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="name" autofocus> --}}
                                <div class="btn-group" data-toggle="buttons">
                                    <label for="gender_male" class="btn btn-primary active">
                                        <input type="radio" name="gender" id="gender_male" value="M" autocomplete="off" checked>M
                                    </label>
                                    <label for="gender_female" class="btn btn-primary">
                                        <input type="radio" name="gender" id="gender_female" value="F" autocomplete="off">F
                                    </label>
                                </div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                                <div class="col-md-6  custom-control btn-group " data-toggle="buttons">

                                    <label for="std_role" class="btn btn-light active">
                                        <input type="radio" class="custom-control-input " name="user_role" id="std_role" value="1" autocomplete="off" checked>Etudiant
                                    </label>
                                    <label for="tr_role" class="btn btn-light">
                                        <input type="radio" class="custom-control-input" name="user_role" id="tr_role" value="2" autocomplete="off">Enseignant
                                    </label>
                                    <label for="admin_role" class="btn btn-light">
                                        <input type="radio" class="custom-control-input" name="user_role" id="admin_role" value="3" autocomplete="off ">Admin
                                    </label>

                                {{-- <input id="user_role" type="text" class="form-control @error('user_role') is-invalid @enderror" name="user_role" value="{{ old('user_role') }}" required autocomplete="user_role" autofocus> --}}

                                @error('user_role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="social_status" class="col-md-4 col-form-label text-md-right">{{ __('social_status') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" name="social_status" id="social_status" >
                                <option selected>select your social_status</option>
                                <option value="C">Celibataire</option>
                                <option value="M">Marié(e)</option>
                                <option value="D">Divorcé(e)</option>
                              </select>
                            </div>

                                @error('social_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="doj" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Join') }}</label>

                            <div class="col-md-6">
                                <input id="doj" type="date" class="form-control @error('doj') is-invalid @enderror" name="doj" value="{{ old('doj') }}" required autocomplete="doj" autofocus>

                                @error('doj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_cin" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>

                            <div class="col-md-6">
                                <input id="user_cin" type="text" class="form-control @error('user_cin') is-invalid @enderror" name="user_cin" value="{{ old('user_cin') }}" required autocomplete="user_cin" autofocus>

                                @error('user_cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
