<?php include '../connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- HTML Fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- javascript -->
    <script>
        // search
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("content-container");
            li = ul.getElementsByTagName("a");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("span")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        // navigation bar
        function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        // join news letter
        function OpenJoin(){
                let a = window.location.replace("../join/");
        }
    </script>
    <!-- style -->
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
        /* navigation drawer icon */
        #navigation-menu-icon{
            width: 25px;
            height: 25px;
        }
        /* join btn */
        #join-btn{
            background-color: #1E90FF;
            font-size: 15px;
            text-align: center;
            float: right;
            padding: 7px 20px;
            color: #fff;
            border-radius: 5px;
        }
        /* Page heading */
        #page-heading{
            margin-top: 50px;
            font-size: 13px;
        }
        /* search */
        #search-box-container{
            margin-top: 50px;
        }
        #myInput {
            background-image: url('https://i.ibb.co/JdjX2Rp/search-1.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 12px;
            outline: none;
        }
        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #myUL span a {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }
        #myUL span a:hover:not(.header) {
            background-color: #eee;
        }
        /* main content */
        #content-container{
            padding-top: 20px;
        }
        /* category style */
        #category{
            font-size: 15px;
            margin-top: 10px;
            background-color: #eeeded;
            color: #0a0a0a;
            margin-right: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
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
    <div id="page-container">
        <!-- Navigation icon -->
        <img src="https://cdn-icons-png.flaticon.com/128/3945/3945664.png" id="navigation-menu-icon" onclick="openNav()" alt="navigation-drawer-icon">
        <!-- Join Btn -->
        <span id="join-btn" onclick="OpenJoin()">Join</span>
        <!-- Page Heading -->
        <div id="page-heading"><h1>Categorys</h1></div>
        <!-- search box container -->
        <div id="search-box-container">
            <input type="text" onkeyup="myFunction()" id="myInput" placeholder="Search Blogs" title="Type in a name" autocomplete="off">
        </div>
        <!-- main content of the page -->
        <div id="content-container">
            <?php
                $select = "SELECT * FROM categorys";
                $query = mysqli_query($connection, $select);
                if(!$query){
                    echo "data is not fetch from admin";
                }
                while($row=mysqli_fetch_array($query)){
            ?>
            <a href="/category/view/?category=<?php echo $row['nameOfCategory']; ?>"><span id="category"><?php echo $row['nameOfCategory']; ?></span></a>
            <?php } ?>
        </div>
    </div>
                </center>
    <!-- Sidenavigation Drawer Elements -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br><br>
        <a href="../" id="sidnav-element">Home</a>
        <a href="../category" id="sidnav-element">Category</a>
        <a href="https://www.youtube.com/channel/UCSQH5cVUPq_E9PQVnm8PFZQ" id="sidnav-element">YouTube</a>
        <a href="https://www.instagram.com/detailinfo.online/" id="sidnav-element">Instagram</a>
        <a href="https://www.quora.com/profile/Detailinfo-Online?q=detailinfo%20onli" id="sidnav-element">Quora</a>
        <a href="../about" id="sidnav-element">About</a>
        <a href="../privacy" id="sidnav-element">Privacy</a>
        <a href="../contact" id="sidnav-element">Contact</a>
      </div>
</body>
</html>