<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
    
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2c3e50;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        
        .login-container {
            background-color: #ecf0f1;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 40px 30px;
            width: 350px;
            text-align: center;
        }

        
        h2 {
            color: #e74c3c;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #fff;
            color: #34495e;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background-color: #e74c3c;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        input[type="text"]::placeholder {
            color: #7f8c8d;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Student Login</h2>
        <form action="regnocheck.php" method="POST">
            <input type="text" id="RegNo" name="RegNo" placeholder="Enter your Registration Number" required>
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>
