<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "bit210";
 $con = new mysqli($servername, $username, $password, $dbname);

 $title=$_POST['title'];
 $type=$_POST['type'];
 $price=$_POST['price'];
 $isbn=$_POST['isbn'];


 $sql = "INSERT INTO  books (title,type,price,ISBN)
         VALUES ('$title','$type','$price','$isbn')";

 mysqli_query($con, $sql);
 mysqli_close($con);

?>
