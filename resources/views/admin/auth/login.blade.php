@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="container container-login">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card card-primary border-box">
                    <div class="card-header card-header-auth text-center">
                        <h4>Admin Bejelentkezés</h4>
                    </div>

                    <div class="card-body card-body-auth">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Login Form -->
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="form-group">
                                <input id="email" type="email" name="email" placeholder="Email Address"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <input id="password" type="password" name="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Submit -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    Bejelentkezés
                                </button>
                            </div>

                        </form>
                        <!-- End Login Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
