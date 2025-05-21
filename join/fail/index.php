<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try Again!</title>
    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- HTML Fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0px 0px;
            font-family: 'Nunito', sans-serif;
            box-sizing: border-box;
        }
        #main{
            margin-top: 40%;
        }
        #icon{
            width: 100px;
            height: 100px;
        }
        @media screen and (min-width: 500px){
            #main{
                margin-top: 10%;
            }
        } 
    </style>
</head>
<body>
    <div id="main">
    <center>
        <img src="https://cdn-icons-png.flaticon.com/512/6659/6659895.png" alt="" id="icon"><br><br>
        <h2>Try Aganin!</h2><br>
    </center>
    </div>
    <?php
        $name = $_GET["name"];
    ?>
    <script>
        function setAndOpen(){
            let a = window.location.replace("../");
        }
        setTimeout(setAndOpen, 1000);
    </script>
</body>
</html>