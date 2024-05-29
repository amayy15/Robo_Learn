<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: cursive;
            background-color: #f7f7f7; 
        }
        .register-container {
            width: 300px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff; /* Warna latar kontainer */
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px; /* Jarak bawah judul */
        }
        .register-form {
            display: grid;
            gap: 10px;
        }
        .register-form label {
            font-weight: bold;
        }
        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .register-form div {
            margin-bottom: 20px; /* Jarak antara elemen div */
        }
        .register-form button[type="submit"] {
            width: 100%; /* Tombol penuh lebar */
            padding: 10px;
            background-color: palevioletred; /* Warna tombol */
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease; 
        }
        .register-form button[type="submit"]:hover {
            background-color: paleturquoise; 
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form class="register-form" method="POST" action="{{ route('registerPost') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
        <p style="text-align: center;">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </div>
</body>
</html>
