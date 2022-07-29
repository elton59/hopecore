<?php
include('connection.php');
 extract($_GET);


if(isset($loan_details))
 {
$l=mysqli_query($conn,"select * from users where profession='".$loan_details."'");
$l1=mysqli_fetch_assoc($l);
?>
<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Doctors Firstname</div>
		<div class="col-sm-5">
		<input type="text" value="<?php echo $l1['firstname']; ?>" readonly="true" id="amount" name="firstname" class="form-control" required/></div>
	</div>
	<div class="row" style="margin-top:10px">
  		<div class="col-sm-4">Doctors Email</div>
  		<div class="col-sm-5">
  		<input type="text" name="doctors_email" value="<?php echo $l1['email']; ?>" readonly="true" id="amount" name="sellingprice" class="form-control" required/></div>
  	</div>
  <div class="row" style="margin-top:10px">
  		<div class="col-sm-4">Doctors LastName</div>
  		<div class="col-sm-5">
  		<input type="text" value="<?php echo $l1['lastname']; ?>" readonly="true" id="amount" name="sellingprice" class="form-control" required/></div>
  	</div>
    <div class="row" style="margin-top:10px">
    		<div class="col-sm-4">Doctors Specialization</div>
    		<div class="col-sm-5">
    		<input type="text" value="<?php echo $l1['profession']; ?>" readonly="true" id="amount" name="sellingprice" class="form-control" required/></div>
    	</div>


<?php
}



?>
