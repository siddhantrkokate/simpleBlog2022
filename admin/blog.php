<?php
if(isset($_SESSION['admin-log'])){

}else{
    header("location: ./login.php");
}
?>
<?php
include '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        input,select{
            padding: 15px 25px;
            width: 85%;
            margin-top: 10px;
            font-size: medium;
            border: 0.01px solid #d3d3d3;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Blog Upload</h2>
    <form action="" method="get">
        <label for="imageURL">Enter Image URL : </label><input type="text" name="imageURL"><br><br>
        <label for="imageDescription">Enter Image Description : </label><input type="text" name="imageDescription"><br><br>
        <label for="heading">Enter Heading : </label><input type="text" name="heading"><br><br>
        <label for="blogURL">Enter Blog URL : </label><input type="text" name="blogURL"><br><br>
        <select name="mainCategory">
            <option>Main Category</option>
            <?php
                $select1 = "select * from categorys where categoryType='main'";
                $query1 = mysqli_query($connection, $select1);
                if(!$query1){
                    echo "catgory one is not fetch well";
                }
                while($row1=mysqli_fetch_array($query1)){
            ?>
            <option value="<?php echo $row1['nameOfCategory']; ?>"><?php echo $row1['nameOfCategory']; ?></option>
            <?php } ?>
        </select><br><br>
        <select name="subCategory">
            <option>Sub subCategory</option>
            <?php
                $select2 = "select * from categorys where categoryType='sub'";
                $query2 = mysqli_query($connection, $select2);
                if(!$query2){
                    echo "catgory one is not fetch well";
                }
                while($row2=mysqli_fetch_array($query2)){
            ?>
            <option value="<?php echo $row2['nameOfCategory']; ?>"><?php echo $row2['nameOfCategory']; ?></option>
            <?php } ?>
        </select><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            $imageURL = $_GET['imageURL'];
            $imageDescription = $_GET['imageDescription'];
            $heading = $_GET['heading'];
            $blogURL = $_GET['blogURL'];
            $mainCategory = $_GET['mainCategory'];
            $subCategory = $_GET['subCategory'];
            $insert = "INSERT INTO `blog`(`id`, `imageURL`, `imageDescription`, `heading`, `blogURL`, `mainCategory`, `subCategory`) VALUES (null,'$imageURL','$imageDescription','$heading','$blogURL','$mainCategory','$subCategory')";
            $query = mysqli_query($connection, $insert);
            if(!$query){
                echo "check the code";
            }
        }
    ?>
</body>
</html>