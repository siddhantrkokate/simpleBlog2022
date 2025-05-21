<?php 
include '../connection.php'; 
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $eamil = $_GET['email'];
    $category = $_GET['category'];
    $insert = "INSERT INTO `user`(`id`, `name`, `email`, `category`) VALUES (Null,'$name','$eamil','$category')";
    $query = mysqli_query($connection, $insert);
    if(!$query){
        echo "<script>window.location.replace('./fail');</script>";
    }else{
        echo "<script>window.location.replace('./sucsessfull');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- HTML Fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- javascript -->
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <style>
        *{
            margin: 0px 0px;
            font-family: 'Nunito', sans-serif;
            box-sizing: border-box;
        }
        /* full page container */
        #page-container{
            padding: 20px 20px;
            align-items: left;
            text-align: left;
            width: 100%;
        }
        /* navigation menu icon */
        #navigation-menu-icon{
            width: 25px;
            height: 25px;
        }
        /* page heading */
        #page-heading{
            margin-top: 50px;
            font-size: 13px;
        }
        /* form css */
        input,select{
            padding: 15px 25px;
            width: 98%;
            border: 0.1px solid #d3d3d3;
            border-radius: 5px;
            outline: none;
            font-size: 15px;
            background-color: #fff;
        }
        #submit{
            background-color: #1E90FF;
            color: #fff;
        }
        /* link decoration */
        a{
            text-decoration: none;
        }
        /* Sidenavigation css */
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60p1E90FFx;
            box-shadow: 2px 2px 2px #ddd;
        }
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #0a0a0a;
            display: block;
            transition: 0.3s;
        }
        .sidenav a:hover {
            color: #f1f1f1;
        }
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        #sidnav-element{
            font-size: medium;
            background-color: #f1f1f1;
            padding: 15px 15px;
            margin: 10px 10px;
            border-radius: 5px;
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        @media screen and (min-width: 500px) and (max-width: 1000px){
            #page-container{
                width: 70%;
            }
        }
        @media screen and (min-width: 1001px){
            #page-container{
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <center>
    <!-- page container -->
    <div id="page-container">
        <!-- navigation icon -->
        <img src="https://cdn-icons-png.flaticon.com/128/3945/3945664.png" id="navigation-menu-icon" onclick="openNav()" alt="navigation-drawer-icon">
        <!-- page header -->
        <div id="page-heading"><h1>Join</h1></div><br><br>
        <!-- form container -->
        <div id="content-container">
            <form method="get" action="">
                <input type="text" placeholder="Name" name="name" required><br><br>
                <input type="text" placeholder="Email" name="email" required><br><br>
                <select name="category" id="" required>
                    <option value="None">Select Catgory</option>
                    <?php
                    $selectCategory = "SELECT * FROM categorys WHERE categoryType='sub'";
                    $queryCategory = mysqli_query($connection, $selectCategory);
                    while($category=mysqli_fetch_array($queryCategory)){
                    ?>
                    <option value="<?php echo $category['nameOfCategory']; ?>"><?php echo $category['nameOfCategory']; ?></option>
                    <?php } ?>
                </select><br><br>
                <input type="submit" value="Submit" id="submit" name="submit" onclick="data()">
            </form>
        </div>
        </div>
                    </center>
        <!-- Sidenavigation Drawer Elements -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <br><br><br>
            <a href="../index.php" id="sidnav-element">Home</a>
            <a href="../category" id="sidnav-element">Category</a>
            <a href="https://www.youtube.com/channel/UCSQH5cVUPq_E9PQVnm8PFZQ" id="sidnav-element">YouTube</a>
            <a href="https://www.instagram.com/detailinfo.online/" id="sidnav-element">Instagram</a>
            <a href="https://www.quora.com/profile/Detailinfo-Online?q=detailinfo%20onli" id="sidnav-element">Quora</a>
            <a href="../about" id="sidnav-element">About</a>
            <a href="../privacy" id="sidnav-element">Privacy</a>
            <a href="../contact" id="sidnav-element">Contact</a>
          </div>
    </div>
</body>
</html>