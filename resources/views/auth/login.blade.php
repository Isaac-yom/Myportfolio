<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--====== FAVICON (LOGO DANS L'ONGLET) ======-->

    <link rel="icon" type="image/jpg" href="{{ asset('images/isaac.jpeg') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600&display=swap');

        body{
            background: linear-gradient(to right, #00ffe0, white);
            font-family: "Syne", sans-serif;
        }

        .login {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-login {
            max-width: 490px;
            background-color: rgba(255, 255, 255, 0.40);
            border-radius: 6px;
            padding: 40px;
        }

        .form-login input {
            width: 100%;
            padding: 7px;
            border-radius: 20px;
            outline: none;
            border: none;
            border: 1px solid transparent;
        }

        .form-login input:focus {
            border-color: cyan;
            box-shadow: 0 0 8px cyan;
        }

        .form-login label {
            margin: 8px 0;
            font-weight: bold;
            font-family: "Syne", sans-serif;
            color: darkblue;
        }

        .btn {
            background-color: blue;
            width: 100%;
            border-radius: 20px;
            text-align: center;
            color: white;
            padding: 7px;
            margin-top: 20px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: white;
            color: blue;
            font-weight: bold;
        }

        .form-login .message {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="login">
        <form action="{{ route('login') }}" method="post" class="form-login">
            @csrf
            <div class="message">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" class="btn">Se connecter</button>
        </form>
    </div>
</body>
</html>
