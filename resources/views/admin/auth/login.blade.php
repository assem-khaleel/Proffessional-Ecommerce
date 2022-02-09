@extends('admin.admin_layouts')

@section('admin_content')
    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Sign in <span class="tx-info tx-normal">admin</span></div>
            <div class="tx-center mg-b-60">Assem Ecommerce</div>

            <form action="{{route('admin.login')}}" method="POST">
                @csrf

                <div class="form-group">
                <input id="email" type="email" placeholder="Email"
                       class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password" placeholder="Password">
                <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>

                @error('password')
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                  </span>
                @enderror

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="tx-info tx-12 d-block mg-t-10">{{ __('Forgot Your Password?') }}</a>
                @endif

            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>

            <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>

            </form>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

@endsection
