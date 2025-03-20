<?php

    include('connect.php');

    $EdID = '';
    $EdName = '';
    $EdAge = '';
    $EdAddress = '';
    $EdUsername = '';
    $EdPassword = '';
    
    if(isset($_POST['edit'])){
        $EdId = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdAddress = $_POST['edAddress'];
        $EdUsername = $_POST['edUsername'];
        $EdPassword = $_POST['edPassword'];
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $update = "UPDATE users SET name='$name', age=$age, address='$address', username='$username', password='$password' WHERE id=$id";
        $sqlUpdate = mysqli_query($connect, $update);

        echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(54, 54, 75);
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: left;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 10px;
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
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        .btn {
            flex: 1;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-back {
            background: gray;
            color: white;
            text-decoration: none;
            height: 18px;
        }
        .btn-update {
            background: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>EDIT USER</h2>
        <form action="update.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $EdName ?>" required>

            <label for="age">Age</label>
            <input type="number" name="age" id="age" value="<?= $EdAge ?>" required>
            
            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= $EdAddress ?>" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= $EdUsername ?>" required>
            
            <label for="password">Password</label>
            <input type="text" name="password" id="password" value="<?= $EdPassword ?>" required>
            
            <input type="hidden" name="id" value="<?= $EdId ?>">
            <div class="buttons">
                <a href="index.php" class="btn btn-back">BACK</a>
                <input type="submit" name="submit" value="UPDATE" class="btn btn-update">
            </div>
        </form>
    </div>
</body>
</html>
