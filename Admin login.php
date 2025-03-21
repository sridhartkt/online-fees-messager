<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        
        h2 {
            color: #003366;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }
        
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color: #004080;
        }
        
        .forgot-password {
            margin-top: 15px;
            font-size: 14px;
        }
        
        .forgot-password a {
            color: #003366;
            text-decoration: none;
        }
        
        .forgot-password a:hover {
            text-decoration: underline;
        }
        
    
        @media (max-width: 768px) {
            .login-container {
                padding: 30px;
            }
            
            h2 {
                font-size: 24px;
            }
            
            input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="match.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <input type="submit" value="Login">
            
            <div class="forgot-password">
                <a href="forgot-password.html">Forgot your password?</a>
            </div>
        </form>
    </div>

</body>
</html>
