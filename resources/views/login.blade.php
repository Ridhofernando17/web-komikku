<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset('assets/img/komik.jpg') }}') no-repeat center center;
            background-size: cover; 
        }

        .login-container {
            width: 510px;
            height: 350px;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: url('{{ asset('assets/img/komik2.jpg') }}') no-repeat center center;
            background-size: cover;
            text-align: center;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: black;
        }

        /* Menyusun label, input, dan button secara vertikal dan di tengah */
        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container label {
            width: 100%;
            margin: 8px 0;
            color: #333;
            font-weight: bold;
            text-align: left;
            max-width: 240px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container button {
            width: 50%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            border: 1px solid #ccc;
        }

        .login-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>  

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
