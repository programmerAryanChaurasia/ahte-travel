<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0f0f1a;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .card {
            width: 300px;
            background-color: #1e213a;
            padding: 20px;
            border-radius: 10px;
            border-top: 4px solid #19d4ca;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        input {
            padding: 10px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid #ccc;
            color: #fff;
            transition: box-shadow 0.3s;
        }
        
        input:focus {
            box-shadow: 0 0 10px #19d4ca;
        }
        
        .buttons {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
        }
        
        .login-button,
        .register-link {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
            text-decoration: none;
        }
        
        .login-button {
            background-color: transparent;
            color: #19d4ca;
        }
        
        .login-button:hover {
            background-color: #19d4ca;
            color: #fff;
            box-shadow: none;
        }
        
        .login-button:active {
            box-shadow: 0 0 10px #19d4ca;
        }
        
        .register-link {
            color: #ccc;
            background-color: transparent;
        }
        
        .register-link:hover {
            color: #fff;
        }
        
        .register-link:active {
            box-shadow: 0 0 10px #ccc;
        }
        
        @media (max-width: 480px) {
            .card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Aryan Chaurasia</h1>
        <div class="card">

            @isset($url)
            <form method="POST" action="{{ $url }}">
            @else
            <form method="POST" action="{{ route('login') }}">
            @endisset
            @csrf

                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                
                <input  type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <div class="buttons">
                    <a href="#" class="register-link">Register</a>
                    <button type="submit" class="login-button">Login</button>
                </div>

                {{-- @isset($url)
                  <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                @else
                  <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                @endisset --}}
            </form>
        </div>
    </div>
</body>

</html>