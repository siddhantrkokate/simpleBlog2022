<?php
session_start();

if (isset($_SESSION['admin-log'])) {
    header('location:index.php');
    exit;
}

include('../connection.php');

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $select = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $query = mysqli_query($connection, $select);

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['admin-log'] = true;
        header('location:index.php');
        exit;
    } else {
        echo "<script>alert('Wrong email or password!'); window.location.href='login.php';</script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        form{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-content: center;
            width: 100%;
            height: 100%;
            margin-top: 250px;
        }

        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }

        input{
            /* max-width: 400px; */
            margin-bottom: 15px;
            padding: 20px;
            border-radius: 5px;
            border: 0.1px solid #ddd;
            outline: none;
            font-family: verdana;
        }

        #press{
            transition: background-color 0.5s ease-in-out;
        }

        #press:hover{
            background-color: #ddd;
        }

        div{
            font-family: verdana;
        }
    </style>
</head>
<body>

    <form method="post">

        <div class="container">
            <input type="email" name="email" id="email" placeholder="Enter email: " autocomplete="off">
            <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter password: ">
            <input type="button" name="submit" value="Login" id="press">
            <div>we are sorry, you cannot reset password! you need to contact admin by <a href="mailTo:siddhantrkokate@gmail.com">mail</a>.</div>
        </div>
    </form>
    
</body>
</html>