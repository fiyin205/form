<?php
   $db_user="root";
   $db_password="";
   $db_name="user";

   $con= new PDO ('mysqli:host=localhost; dbname='   . $db_name  . '; charset=utf8; ',$db_user, $db_password);
   // $con=mysqli_connect("localhost","root"," ","user");
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>