<?php
include('connect.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = "INSERT INTO users (name, age, address, username, password) 
               VALUES ('$name', $age, '$address', '$username', '$password')";
    $insertSQL = mysqli_query($connect, $insert);
    
    echo "<script>alert('Successfully Added!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgb(45, 67, 45);
        }
        h2{
            text-align: center;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: left;
        }
        label {
            font-size: 13px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .btn {
            padding: 8px 1px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            width: 48%;
            text-align: center;
        }
        .btn-add { 
            background: green; 
            color: white; 
        }
        .btn-back {
            background: gray;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ADD USER</h2>
        <form action="add.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <div class="buttons">
                <a href="index.php" class="btn btn-back">BACK</a>
                <button type="submit" name="submit" class="btn btn-add">ADD</button>
            </div>
        </form>
    </div>
</body>
</html>