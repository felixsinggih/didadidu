@extends('web.layout.main')

@section('content')
    <!-- login box -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f5f5f5">
        <div class="login-box d-flex flex-column align-items-center h-100 flex-lg-row"
            style="font-family: 'Poppins', sans-serif">
            <div class="position-relative d-none d-lg-block h-100 width-left">
                <img class="position-absolute img-fluid centered"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
                    alt="" />
            </div>
            <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
                <div class="right mx-lg-0 mx-auto">
                    <div class="align-items-center justify-content-center d-lg-none d-flex">
                        <img class="img-fluid"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
                            alt="" />
                    </div>
                    <h3 class="title-text">Mendaftar</h3>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <form style="margin-top: 1.5rem" action="/register" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" value="{{ old('name') }}" placeholder="Nama lengkap" autofocus required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                id="username" value="{{ old('username') }}" placeholder="Username" required>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik"
                                value="{{ old('nik') }}" placeholder="Nomor Induk Kependudukan" required>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                                id="address" value="{{ old('address') }}" placeholder="Alamat" required>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="zip_code" class="form-label">Kodepos</label>
                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code"
                                id="zip_code" value="{{ old('zip_code') }}" placeholder="kodepos" required>
                            @error('zip_code')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Telepon</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                id="phone" value="{{ old('phone') }}" placeholder="Nomor telepon" required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="ktp" class="form-label">KTP</label>
                            <input class="form-control  @error('ktp') is-invalid @enderror" type="file" name="ktp" id="ktp"
                                required>
                            @error('ktp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-big btn-red d-block w-100 mt-3" type="submit">
                            Daftar Sekarang
                        </button>
                    </form>
                    <p class="text-center bottom-caption">
                        Sudah punya akun?
                        <span class="red-bottom-caption">
                            <a href="/login">Masuk</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end login box -->
@endsection
