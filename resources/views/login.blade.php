@include('layouts.app')

@section('content')
    <section class="login-user">
        <div class="left">
            <img src="{{asset('images/pharmacy.png')}}" alt="">
        </div>
        <div class="right">
            <h1 class="logo">Sign In</h1>
            <h1 class="header-third">
                Start Today
            </h1>
            <p class="subheader">
                Because tomorrow become never
            </p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="w-100 btn btn-primary">{{ __('Login') }}</button>
            </form>
        </div>
    </section>
@endsection