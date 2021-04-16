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

                        <div class="form-group row required">
                            <label for="name" class="col-md-4 col-form-label text-md-right control-label">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" required="required" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            <label for="email" class="col-md-4 col-form-label text-md-right control-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            <label for="npm" class="col-md-4 col-form-label text-md-right control-label">{{ __('NPM') }}</label>

                            <div class="col-md-6">
                                <input id="npm" type="number" required class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm">

                                @error('npm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            <label for="no_telp" class="col-md-4 col-form-label text-md-right control-label">{{ __('No Telp') }}</label>

                            <div class="col-md-6">
                                <input id="no_telp" type="number" required class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" required autocomplete="no_telp">

                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            <label for="dosen_pa" class="col-md-4 col-form-label text-md-right control-label">{{ __('Dosen PA') }}</label>

                            <div class="col-md-6">
                                <input id="dosen_pa" type="text" required class="form-control @error('dosen_pa') is-invalid @enderror" name="dosen_pa" value="{{ old('dosen_pa') }}" required autocomplete="dosen_pa">

                                @error('dosen_pa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dosen_ta" class="col-md-4 col-form-label text-md-right">{{ __('Dosen TA/Skripsi/Tesis') }}</label>

                            <div class="col-md-6">
                                <input id="dosen_ta" type="text" class="form-control @error('dosen_ta') is-invalid @enderror" name="dosen_ta" value="{{ old('dosen_ta') }}" required autocomplete="dosen_ta">

                                @error('dosen_ta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            <label for="password" class="col-md-4 col-form-label text-md-right control-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" required class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right control-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" required type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
