<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="head">
            <p class="atte">Atte</p>
        </div>
        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <diV class=top_login>
                <div class="tytle">{{ __('ログイン') }}</div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            

                            <div class="col-md-6">

                                <div class="email_form">
                                <input id="email_input" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" value="メールアドレス" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            

                            <div class="col-md-6">
                                <div class="password_form">
                                <input id="password_input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="メールアドレス">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">                                
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div class="login_button">
                                <button type="submit" class="login_input">
                                    {{ __('ログイン') }}
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="not_have_account">
                        <p>アカウントをお持ちでない方はこちら</p>
                        <a class="register_link" href="/register">会員登録</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>
</body>
</html>



