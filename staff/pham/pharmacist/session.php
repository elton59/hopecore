<?php
  
   include('../../admin/db.php');
 

   $user=$_SESSION['pharmacist'];
   if(isset($_SESSION['quant']))
   {
   $squant=$_SESSION['quant'];
   }
   
   

   $sql = "select * from users where email = '$user' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['pharmacist'])){

      header("location: index.php");

      die();

   }
   

  

?>