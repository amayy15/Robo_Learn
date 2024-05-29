<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: cursive;
        }
        .login-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }
        .login-container h2 {
            text-align: center;
        }
        .login-form {
            display: grid;
            gap: 10px;
        }
        .login-form label {
            font-weight: bold;
        }
        #email, #password {
            width: 93%;
            padding: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        /* .login-form .email,
        .login-form input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        } */
        .login-form div {
            margin-bottom: 20px; /* jarak antara elemen div */
        }
        .login-form button[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: palevioletred;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            /* text-align: center;
            margin-bottom: 10p; */
        }
        .login-form button[type="submit"]:hover {
            box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        .amay {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" method="POST" action="{{ route('loginproses') }}">
            @csrf
            <div class="amay">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="amay">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
