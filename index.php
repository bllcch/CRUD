<?php
    include('connect.php');

    $select = "SELECT * FROM users";
    $sqlSelect = mysqli_query($connect, $select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }
        .btn-add {
            background: green;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
        .btn {
            border: none;
            padding: 6px 10px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 3px;
        }
        .edit { 
            background: blue; 
            color: white; 
        }
        .delete { 
            background: red; 
            color: white;
            padding: 6px 3px; 
        }
    </style>
</head>
<body>

<div class="header-container">
    <h2>USER LIST</h2>
    <a class="btn-add" href="add.php">ADD</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Username</th>
        <th>Password</th>
        <th colspan="2">Action</th>
    </tr>

    <?php foreach ($sqlSelect as $result => $value) { ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['age'] ?></td>
            <td><?= $value['address'] ?></td>
            <td><?= $value['username'] ?></td>
            <td><?= $value['password'] ?></td>
            <td>
                <form action="update.php" method="post">
                    <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                    <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                    <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                    <input type="hidden" name="edAddress" value="<?= $value['address'] ?>">
                    <input type="hidden" name="edUsername" value="<?= $value['username'] ?>">
                    <input type="hidden" name="edPassword" value="<?= $value['password'] ?>">
                    <button class="btn edit" type="submit" name="edit">Edit</button>
                </form>
            </td>
            <td>
                <form action="delete.php" method="post" onsubmit = "return confirm('Do you want to delete this?')">
                    <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                    <button class="btn delete" type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
