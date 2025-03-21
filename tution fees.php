<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Structure </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>TUTION-Fees Portal</h2>

    <div class="form-container">
        <form action="admin.php" method="post">
            <label for="RegNo">RegNO:</label>
            <input type="text" id="RegNo" name="RegNo" required><br>

            <label for="StudentName">Student Name:</label>
            <input type="text" id="StudentName" name="StudentName" required><br>

            <label for="feesAmount">Fees Amount:</label>
            <input type="number" id="feesAmount" name="feesAmount" required><br>

            <label for="BillNo">Bill No:</label>
            <input type="number" id="BillNo" name="BillNo" required><br>

            <input type="submit" value="Add Fee">
        </form>
    </div>