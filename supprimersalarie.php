<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    $conn= mysqli_connect("localhost","root","")or die("Erreur de connexion au serveur");
    mysqli_select_db($conn,'equi')or die("Erreur de connexion a la base");

     $id = $_POST["userID"];
     $sql = "delete from user where userID ='".$id."'";
     $result = mysqli_query($conn,$sql);
     if($result){
         echo "Yes";
     }
     else{
         echo "No";
     }
     mysqli_close($conn);
 }
     
?>