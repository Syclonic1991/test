<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>

    <!--styles-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!---->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!---->
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
</head>
<body>
<div class="container">
    <div class="row justify-content-center " style="margin-top: 10%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Вход</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @if ($errors->has('email') or $errors->has('password'))
                                    {{ 'is-invalid' }}
                                @else
                                    {{ '' }}
                                @endif" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @if ($errors->has('email') or $errors->has('password'))
                                        {{ 'is-invalid' }}
                                @else
                                        {{ '' }}
                                @endif" name="password" required>
                                @if ($errors->has('email') or $errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ 'Неверные данные для входа' }}</strong>
                                    </span>
                                @else
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" style="padding-left: 10px"> Запомнить меня</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Войти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
