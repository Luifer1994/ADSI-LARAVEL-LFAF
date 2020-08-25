@extends('./plantilla')

@section('content')
<hr>
<div class="container">
<div class="card">
    <div class="card-body">
        <div class="text-center">
            <svg width="9em" height="9em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            </svg>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div style="width: 300px" class="container">
                <label for="email">{{ __('E-Mail') }}</label>
                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <div style="width: 300px" class="container">
                <label for="password">{{ __('Password') }}</label>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="ingresa tu contraseña" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <hr>
                <div>
                    <button type="submit" class="btn btn-primary btn-block">
                     {{ __('INGRESAR') }}
                    </button>

                   <a class="btn btn-danger btn-block" href="{{ route('index') }}">
                        CANCELAR
                   </a>
                   <br>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
