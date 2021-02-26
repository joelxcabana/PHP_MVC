<?php 
 
 require('models/Conection.php');

 $con = new Conection();

 $users = $con->getUsers();


?>