<?php
session_start();
if(isset($_SESSION['admin-log'])){

}else{
    header("location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Roboto Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- HTML Fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0px 0px;
            font-family: 'Nunito', sans-serif;
        }
        
        #content{
            padding: 15px 15px;
        }
        
        input,select{
            width: 80%;
            padding: 10px 30px;
            border-radius: 5px;
            border: 0.1px solid #ddd;

        }
    </style>
</head>
<body>
    <div id="content">
    <h3>Category Adder</h3><br><br>
    <form action="" method="get">
        <input type="text" name="nameOfCategory" placeholder="category"><br><br>
        <select name="categoryType">
            <option value="main">main</option>
            <option value="sub">sub</option>
        </select><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    </div>
</body>
</html>
<?php
include '../connection.php';
if(isset($_GET['submit'])){
    $nameOfCategory = $_GET['nameOfCategory'];
    $categoryType = $_GET['categoryType'];
    $insert = "INSERT INTO `categorys`(`id`, `nameOfCategory`, `categoryType`) VALUES (Null,'$nameOfCategory','$categoryType')";
    $query = mysqli_query($connection, $insert);
    if(!$query){
        echo "data is not inserted";
    }
}
?>