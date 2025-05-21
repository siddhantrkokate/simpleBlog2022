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
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0px 0px;
            font-family: 'Nunito', sans-serif;
        }
        header{
            padding: 15px 15px;
        }
        #logo{
            font-weight: bold;
        }
        .header-icon{
            float: right;
            margin-left: 20px;
            font-size: 20px;
        }
        .dropdown {
  position: relative;
  display: inline-block;
  float: right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-size: small;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
#content{
    padding: 15px 15px;
}
table,tr,td,th{
    border: 1px solid #d3d3d3;
    text-align: center;
}
table{
    border-collapse: collapse;
}
th,td,tr{
    width: 300px;
}
    </style>
</head>
<body>
    <header>
        <span id="logo">Dashboard</span>
        <span class="dropdown">
            <span class="material-symbols-outlined header-icon">add</span>
            <span class="dropdown-content">
                <a href="blog.php">Blog</a>
                <a href="category.php">Category</a>
            </span>
        </span>
    </header>
    <div id="content">
        <table>
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>IMAGE DESCRIPTION</th>
                <th>URL</th>
                <th>HEADING</th>
                <th>MAIN CATEGORY</th>
                <th>SUB CATEGORY</th>
            </tr>
            <?php
            include '../connection.php';
            $select = "SELECT * FROM `blog`";
            $query = mysqli_query($connection, $select);
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="<?php echo $row['imageURL']; ?>" alt="" width="180px" height="120px"></td>
                <td><?php echo $row['imageDescription']; ?></td>
                <td><?php echo $row['blogURL']; ?></td>
                <td><?php echo $row['heading']; ?></td>
                <td><?php echo $row['mainCategory']; ?></td>
                <td><?php echo $row['subCategory']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>