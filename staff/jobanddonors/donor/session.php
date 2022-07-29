<?php
  
   include('../../admin/db.php');
 

   $user=$_SESSION['donor'];

   

   $sql = "select * from users where email = '$user' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['donor'])){

      header("location: index.php");

      die();

   }
   

  

?>