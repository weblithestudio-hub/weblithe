@extends('admin.layouts.master')

@section('content')
    @include('admin.layouts.top')


    @include('admin.layouts.sidebar')
    @include('admin.layouts.custom_error')


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profil módosítása</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            @if (Auth::guard()->user()->avatar != '')
                                                <img alt="image"
                                                    src="{{ asset('uploads/' . Auth::guard()->user()->avatar) }}"
                                                    class="profile-photo w_100_p">
                                            @else
                                                <img alt="image" src="{{ asset('uploads/user.jpg') }}"
                                                    class="profile-photo w_100_p">
                                            @endif
                                            <input type="file" class="mt_10" name="avatar">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="mb-4">
                                                <label class="form-label">Név *</label>
                                                <input type="text" class="form-control" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Email *</label>
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ Auth::guard('admin')->user()->email }}">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Jelszó</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label">Jelszó Ismét</label>
                                                <input type="password" class="form-control" name="password_confirmation">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label"></label>
                                                <button type="submit" class="btn btn-primary">Mentés</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
