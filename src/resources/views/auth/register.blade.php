<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />

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
                <diV class=top_register>
                <div class="tytle">{{ __('会員登録') }}</div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                 <div class="name_form">
                                <input id="name_input" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="名前" required autocomplete="name" autofocus>
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <div class="email_form">
                                <input id="email_input" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="メールアドレス" required autocomplete="email">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <div class="password_form">
                                <input id="password_input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="パスワード" >
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <div class="password2_form">
                                <input id="password2_input" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="確認用パスワード" >
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="register_button">
                                <button type="submit" class="register_input">
                                    {{ __('会員登録') }}
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="have_account">
                        <p>アカウントをお持ちの方はこちら</p>
                        <a class="login_link" href="/login">ログイン</a>
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



