<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Fees </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #333;
            padding: 20px;
            background-color: #e0e0e0;
            margin-bottom: 20px;
        }
        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>BUS - Fees Portal</h2>

    <div class="form-container">
        <form action="bus fees match.php" method="post">
            <label for="RegNo">RegNO:</label>
            <input type="text" id="RegNo" name="RegNo" required><br>

            <label for="StudentName">StudentName:</label>
            <input type="text" id="StudentName" name="StudentName" required><br>

            <label for="BUSFeesAmount">BUS Fees Amount:</label>
            <input type="number" id="BUSFeesAmount" name="BUSFeesAmount" required><br>

            <label for="BUSBillNo">BUS Bill No:</label>
            <input type="number" id="BUSBillNo" name="BUSBillNo" required><br>

            <label for="BUSStage">BUS Stage:</label>
            <input type="text" id="BUSStage" name="BUSStage" required><br>

            <input type="submit" value="pay">
        </form>
    </div>