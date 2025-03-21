<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6E7DFF, #5C6BC0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        label {
            color: #555;
            font-size: 14px;
            margin-bottom: 5px;
            text-align: left;
            display: block;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #fafafa;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #5C6BC0;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #4F5B88;
            transform: scale(1.05);
        }

        p {
            font-size: 14px;
            margin-top: 15px;
            color: #666;
        }

        a {
            color: #5C6BC0;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>
        <form action="uslogin.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>

</body>
</html>
