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
                    <h3 class="title-text">Masuk</h3>

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

                    <form style="margin-top: 1.5rem" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end" style="margin-top: 0.75rem">
                            <a href="#" class="forgot-password fst-italic">Forgot Password?</a>
                        </div>
                        <button class="btn btn-big btn-red d-block w-100 mt-3" type="submit">
                            Masuk
                        </button>
                    </form>
                    <p class="text-center bottom-caption">
                        Belum punya akun?
                        <span class="red-bottom-caption">
                            <a href="/register">Daftar Disini</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end login box -->
@endsection
