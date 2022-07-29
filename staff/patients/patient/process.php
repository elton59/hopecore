<?php

include("../../admin/db.php");

//Create Donors
if(isset($_POST['createdonor']))
{
    $donemail=$_POST['donemail'];
    $donfname=$_POST['donfname'];
    $donlname=$_POST['donlname'];
    $dongen=$_POST['dongen'];
    $donpass=$_POST['donpass'];

    $result=$mysqli->query("INSERT INTO donor(email,password,firstname,lastname,gender) values('$donemail','$donpass','$donfname','$donlname','$dongen')") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewdonor.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewdonor.php')
        </script>
        ";
}
//Edit Donors
if(isset($_POST['editdonor']))
{
    $id=$_POST['id'];
    $donemail=$_POST['donemail'];
    $donfname=$_POST['donfname'];
    $donlname=$_POST['donlname'];
    $dongen=$_POST['dongen'];
    $donpass=$_POST['donpass'];

    $result=$mysqli->query("UPDATE  donor SET email='$donemail',password='$donpass',firstname='$donfname',lastname='$donlname',gender='$dongen' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewdonor.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewdonor.php')
        </script>
        ";


}
//delete donor
if(isset($_GET['rdonid']))
{
    $id=$_GET['rdonid'];
    $result=$mysqli->query("delete from donor where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewdonor.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewdonor.php')
        </script>
        ";
        

}
//Create Suppier
if(isset($_POST['createsupplier']))
{
    $suprcomname=$_POST['suprcomname'];
    $supremail=$_POST['supremail'];
    $suprfname=$_POST['suprfname'];
    $suprlname=$_POST['suprlname'];
    $suprgen=$_POST['suprgen'];
    $suprpass=$_POST['suprpass'];
    $suprpno=$_POST['suprpno'];

    $result=$mysqli->query("INSERT INTO medicalsuppliers(company,email,password,firstname,lastname,gender,phonenumber) values('$suprcomname','$supremail','$suprpass','$suprfname','$suprlname','$suprgen','$suprpno')") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewsupplier.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewsupplier.php')
        </script>
        ";
}
//Edit supplier
if(isset($_POST['editsupplier']))
{
    $id=$_POST['id'];
    $suprcomname=$_POST['suprcomname'];
    $supremail=$_POST['supremail'];
    $suprfname=$_POST['suprfname'];
    $suprlname=$_POST['suprlname'];
    $suprgen=$_POST['suprgen'];
    $suprpass=$_POST['suprpass'];
    $suprpno=$_POST['suprpno'];

    $result=$mysqli->query("UPDATE  medicalsuppliers SET email='$supremail',password='$suprpass',firstname='$suprfname',lastname='$suprlname',gender='$suprgen',company='$suprcomname',phonenumber='$suprpno' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewsupplier.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewsupplier.php')
        </script>
        ";


}
//delete Supplier
if(isset($_GET['rsuprid']))
{
    $id=$_GET['rsuprid'];
    $result=$mysqli->query("delete from medicalsuppliers where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewsupplier.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewsupplier.php')
        </script>
        ";
        

}
//Create Patient
if(isset($_POST['createpatient']))
{
    $patfname=$_POST['patfname'];
    $patlname=$_POST['patlname'];
    $patgen=$_POST['patgen'];
    $patadr=$_POST['patadr'];
    $patpno=$_POST['patpno'];
    $pattrid=$_POST['pattrid'];
    $patadm=$_POST['patadm'];
    $patuname=$_POST['patuname'];
    $patemail=$_POST['patemail'];
    $patpass=$_POST['patpass'];
    $patadr=$_POST['patadr'];

    $result=$mysqli->query("INSERT INTO patient(firstname,lastname,gender,address,telephone,treatmentid,timeadmitted,username,email,password) values('$patfname','$patlname','$patgen','$patadr','$patpno','$pattrid','$patadm','$patuname','$patemail','$patpass')") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('viewpatient.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('viewpatient.php')
        </script>
        ";
}
//Edit patient
if(isset($_POST['editpatient']))
{
    $id=$_POST['id'];
    $patfname=$_POST['patfname'];
    $patlname=$_POST['patlname'];
    $patgen=$_POST['patgen'];
    $patadr=$_POST['patadr'];
    $patpno=$_POST['patpno'];
    $pattrid=$_POST['pattrid'];
    $patadm=$_POST['patadm'];
    $patuname=$_POST['patuname'];
    $patemail=$_POST['patemail'];
    $patpass=$_POST['patpass'];
    $patadr=$_POST['patadr'];
    $result=$mysqli->query("UPDATE  patient SET email='$patemail',password='$patpass',firstname='$patfname',lastname='$patlname',gender='$patgen',treatmentid='$pattrid',telephone='$patpno',timeadmitted='$patadm',address='$patadr',username='$patuname' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('viewpatient.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('viewpatient.php')
        </script>
        ";


}
//delete patient
if(isset($_GET['rpatid']))
{
    $id=$_GET['rpatid'];
    $result=$mysqli->query("delete from patient where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('viewpatient.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewpatient.php')
        </script>
        ";
        

}

//Create users
if(isset($_POST['createstaff']))
{
    $staffspec=$_POST['staffspec'];
    $staffprof=$_POST['staffprof'];
    $stafffname=$_POST['stafffname'];
    $stafflname=$_POST['stafflname'];
    $staffgen=$_POST['staffgen'];
    $staffadr=$_POST['staffadr'];
    $staffserid=$_POST['staffserid'];
    $staffpno=$_POST['staffpno'];
    $staffemail=$_POST['staffemail'];
    $staffpass=$_POST['staffpass'];

    $result1=$mysqli->query("INSERT INTO patients(specialization,profession,firstname,lastname,gender,adress,serviceid,phonenumber,email,password) values('$staffspec','$staffprof','$stafffname','$stafflname','$staffgen','$staffadr','$staffserid','$staffpno','$staffemail','$staffpass')") or die($mysqli->error);

    $result=$mysqli->query("INSERT INTO users(specialization,profession,firstname,lastname,gender,adress,serviceid,phonenumber,email,password) values('$staffspec','$staffprof','$stafffname','$stafflname','$staffgen','$staffadr','$staffserid','$staffpno','$staffemail','$staffpass')") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('index.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('index.php')
        </script>
        ";
}
//Edit users
if(isset($_POST['editstaff']))
{
    
    $staffspec=$_POST['staffspec'];
    $staffprof=$_POST['staffprof'];
    $stafffname=$_POST['stafffname'];
    $stafflname=$_POST['stafflname'];
    $staffgen=$_POST['staffgen'];
    $staffadr=$_POST['staffadr'];
    $staffpno=$_POST['staffpno'];
    $staffemail=$_POST['staffemail'];
    $staffpass=$_POST['staffpass'];
  
   $result=$mysqli->query("UPDATE  users SET email='$staffemail',password='$staffpass',firstname='$stafffname',lastname='$stafflname',gender='$staffgen',phonenumber='$staffpno',specialization='$staffspec',profession='$staffprof',adress='$staffadr' where email='$staffemail'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('main.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace(main.php')
        </script>
        ";


}
//delete users
if(isset($_GET['rstaffid']))
{
    $id=$_GET['rstaffid'];
    $result=$mysqli->query("delete from users where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewstaff.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewstaff.php')
        </script>
        ";
        

}

//Create drug
if(isset($_POST['createdrug']))
{
    $drtid=$_POST['drtid'];
    $drfuname=$_POST['drfuname'];
 
  

    $result=$mysqli->query("INSERT INTO drugs(treatmentid,fullname) values('$drtid','$drfuname')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewdrug.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewdrug.php')
        </script>
        ";
}
//Edit drug
if(isset($_POST['editdrug']))
{
    $id=$_POST['id'];
    $drtid=$_POST['drtid'];
    $drfuname=$_POST['drfuname'];

  
   $result=$mysqli->query("UPDATE  drugs SET treatmentid='$drtid',fullname='$drfuname'where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewdrug.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewdrug.php')
        </script>
        ";


}
//delete drug
if(isset($_GET['rdrugid']))
{
    $id=$_GET['rdrugid'];
    $result=$mysqli->query("delete from drugs where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewdrug.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewstaff.php')
        </script>
        ";
        

}



//Create medical supply
if(isset($_POST['createsupply']))
{
    $supid=$_POST['supid'];
    $supdtime=$_POST['supdtime'];
 
  

    $result=$mysqli->query("INSERT INTO medicalsupplies(supplierid,deliverytime) values('$supid','$supdtime')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewsupply.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewsupply.php')
        </script>
        ";
}
//Edit Medical supply
if(isset($_POST['editsupply']))
{
    $id=$_POST['id'];
    $supid=$_POST['supid'];
    $supdtime=$_POST['supdtime'];

  
   $result=$mysqli->query("UPDATE  medicalsupplies SET supplierid='$supid',deliverytime='$supdtime'where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewsupply.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewsupply.php')
        </script>
        ";


}
//delete medical supply
if(isset($_GET['rsupplyid']))
{
    $id=$_GET['rsupplyid'];
    $result=$mysqli->query("delete from medicalsupplies where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewsupply.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewsupply.php')
        </script>
        ";
        

}

//Create apppointment
if(isset($_POST['createappointment']))
{
 
    $aptype=$_POST['aptype'];
    $apdate=$_POST['apdate'];
    $apdatid=$_POST['apdatid'];
    $appatid=$_POST['appatid'];
  

    $result=$mysqli->query("INSERT INTO appointments(appointmenttype,date_of_appointment,doctors_email,patient_email) values('$aptype','$apdate','$apdatid','$appatid')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('viewappointment.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('viewappointment.php')
        </script>
        ";
}
//Edit Appointment
if(isset($_POST['editappointment']))
{
    $id=$_POST['id'];
    $apspec=$_POST['apspec'];
    $aptype=$_POST['aptype'];
    $appatid=$_POST['appatid'];
    $apstid=$_POST['apstid'];

  
   $result=$mysqli->query("UPDATE  appointments SET specialization='$apspec',appointmenttype='$aptype',patient_email	
   ='$appatid',doctors_email='$apstid'where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('viewappointment.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('viewapppointment.php')
        </script>
        ";


}
//delete appointment
if(isset($_GET['rappointmentid']))
{
    $id=$_GET['rappointmentid'];
    $result=$mysqli->query("delete from appointments where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('viewappointment.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('viewappointment.php')
        </script>
        ";
}

//Create feedback
if(isset($_POST['createfeedback']))
{
  
    $fdmessage=$_POST['fdmessage'];
    $fdreceiver=$_POST['fdreceiver'];
    $fdemail=$_POST['fdemail'];
 
  

    $result=$mysqli->query("INSERT INTO feedback(message,receiver,email) values('$fdmessage','$fdreceiver','$fdemail')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('editfeedback.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('editfeedback.php')
        </script>
        ";
}

//Edit feedback
if(isset($_POST['editfeedback']))
{
    $id=$_POST['id'];
    $fdreply=$_POST['fdreply'];
    $fdemail=$_POST['fdemail'];

  
   $result=$mysqli->query("UPDATE feedback SET reply='$fdreply',email='$fdemail', status='read' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('editfeedback.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('editfeedback.php')
        </script>
        ";


}
//delete feedback
if(isset($_GET['rfeedbackid']))
{
    $id=$_GET['rfeedbackid'];
    $result=$mysqli->query("delete from feedback where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('editfeedback.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('editfeedback.php')
        </script>
        ";
}
//Create patientlog
if(isset($_POST['createpatientlog']))
{
    $patpid=$_POST['patpid'];
    $patuname=$_POST['patuname'];
    $patlogintime=$_POST['patlogintime'];
    $patlogouttime=$_POST['patlogouttime'];
    $result=$mysqli->query("INSERT INTO patientlog  (patientid,username,logintime,logouttime) values('$patpid','$patuname','$patlogintime','$patlogouttime')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewpatientlog.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewpatientlog.php')
        </script>
        ";
}

//Create payment
if(isset($_POST['createpayment']))
{
   
    $paytid=$_POST['paytid'];
    $id=$_POST['id'];
    $pdate=$_POST['pdate'];
    $ola='payment_pending';
    $result=$mysqli->query("update lab_test set transaction_id='$paytid',payment_date='$pdate',status='$ola' where id='$id'")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('viewpayment.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('viewpayment.php')
        </script>
        ";
}
//Edit payment
if(isset($_POST['editpayment']))
{
    $id=$_POST['id'];
    $paymode=$_POST['paymode'];
    $paytid=$_POST['paytid'];
    $paydate=$_POST['paydate'];
    $payamnt=$_POST['payamnt'];
    $paypatid=$_POST['paypatid'];
    $paysid=$_POST['paysid'];
    $nchvid=$_POST['nchvid'];
  
   $result=$mysqli->query("UPDATE  payments SET paymentmode='$paymode',transactionid='$paytid',paymentdate='$paydate',totalamount='$payamnt',patientid='$paypatid',supplierid='$paysid', nchvid='$nchvid'where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('viewpayment.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewpayment.php')
        </script>
        ";


}
//delete payment
if(isset($_GET['rpaymentid']))
{
    $id=$_GET['rpaymentid'];
    $result=$mysqli->query("delete from payments where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewpayment.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewpayment.php')
        </script>
        ";
}

//Create service
if(isset($_POST['createservice']))
{
    $serspec=$_POST['serspec'];
    $serhcs=$_POST['serhcs'];
    $sertype=$_POST['sertype'];
 
    $result=$mysqli->query("INSERT INTO service(specialization,healthcareservices,servicetype) values('$serspec','$serhcs','$sertype')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewservice.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewservice.php')
        </script>
        ";
}
//Edit service
if(isset($_POST['editservice']))
{
    $id=$_POST['id'];
    $serspec=$_POST['serspec'];
    $serhcs=$_POST['serhcs'];
    $sertype=$_POST['sertype'];

  
   $result=$mysqli->query("UPDATE  service SET specialization='$serspec',healthcareservices='$serhcs',servicetype='$sertype'where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewservice.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewservice.php')
        </script>
        ";


}
//delete service
if(isset($_GET['rserviceid']))
{
    $id=$_GET['rserviceid'];
    $result=$mysqli->query("delete from service where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewservice.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewservice.php')
        </script>
        ";
}
//Create users log
if(isset($_POST['createstafflog']))
{
    $slogsid=$_POST['slogsid'];
    $slogemail=$_POST['slogemail'];
    $sloglintime=$_POST['sloglintime'];
    $sloglouttime=$_POST['sloglouttime'];
 
    $result=$mysqli->query("INSERT INTO stafflog(staffid,email,logintime,logouttime) values('$slogsid','$slogemail','$sloglintime','$sloglouttime')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewstafflog.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewstafflog.php')
        </script>
        ";
}
//Create staffspecialization
if(isset($_POST['createstaffspecialization']))
{
    $sspsid=$_POST['sspsid'];
    $sspsrid=$_POST['sspsrid'];
    $sspprof=$_POST['sspprof'];
    $sspspec=$_POST['sspspec'];
    $sspemail=$_POST['sspemail'];
 
    $result=$mysqli->query("INSERT INTO staffspecialization(staffid,serviceid,profession,specialization,email) values('$sspsid','$sspsrid','$sspprof','$sspspec','$sspemail')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewstaffspecialization.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewstaffspecialization.php')
        </script>
        ";
}
//Edit staffspecialization
if(isset($_POST['editstaffspecialization']))
{
    $id=$_POST['id'];
    $sspsid=$_POST['sspsid'];
    $sspsrid=$_POST['sspsrid'];
    $sspprof=$_POST['sspprof'];
    $sspspec=$_POST['sspspec'];
    $sspemail=$_POST['sspemail'];

  
   $result=$mysqli->query("UPDATE  staffspecialization SET staffid='$sspsid',serviceid='$sspsrid',profession='$sspprof',specialization='$sspspec',email='$sspemail' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewstaffspecialization.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewstaffspecialization.php')
        </script>
        ";


}
//delete staffspecialization
if(isset($_GET['rsspid']))
{
    $id=$_GET['rsspid'];
    $result=$mysqli->query("delete from staffspecialization where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewstaffspecialization.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewstaffspecialization.php')
        </script>
        ";
}
//Create treatment
if(isset($_POST['createtreatment']))
{
    $trtr=$_POST['trtr'];
    $trsid=$_POST['trsid'];
    $trpid=$_POST['trpid'];
    $trdid=$_POST['trdid'];
 
    $result=$mysqli->query("INSERT INTO treatment(treatment,staffid,patientid,drugid) values('$trtr','$trsid','$trpid','$trdid')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewtreatment.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewtreatment.php')
        </script>
        ";
}
//Edit treatment
if(isset($_POST['edittreatment']))
{
    $id=$_POST['id'];
    $trtr=$_POST['trtr'];
    $trsid=$_POST['trsid'];
    $trpid=$_POST['trpid'];
    $trdid=$_POST['trdid'];
  
   $result=$mysqli->query("UPDATE  treatment SET treatment='$trtr',staffid='$trsid',patientid='$trpid',drugid='$trdid' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewtreatment.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewtreatment.php')
        </script>
        ";


}
//delete treatment
if(isset($_GET['rtreatmentid']))
{
    $id=$_GET['rtreatmentid'];
    $result=$mysqli->query("delete from treatment where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewtreatment.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewtreatment.php')
        </script>
        ";
}
//Create Jobs
if(isset($_POST['createjob']))
{
    $jbtitle=$_POST['jbtitle'];
    $jbdes=$_POST['jbdes'];
  
   
 
    $result=$mysqli->query("INSERT INTO jobs(jobtitle,description) values('$jbtitle','$jbdes')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewjob.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewjob.php')
        </script>
        ";
}
//Edit Job
if(isset($_POST['editjob']))
{
    $id=$_POST['id'];
    $jbtitle=$_POST['jbtitle'];
    $jbdes=$_POST['jbdes'];

  
   $result=$mysqli->query("UPDATE  jobs SET jobtitle='$jbtitle',description='$jbdes'where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewjob.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewjob.php')
        </script>
        ";


}
//delete job
if(isset($_GET['reditjob']))
{
    $id=$_GET['reditjob'];
    $result=$mysqli->query("delete from jobs where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewjob.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewjob.php')
        </script>
        ";
}
//Create donation
if(isset($_POST['createdonation']))
{
    $donfname=$_POST['donfname'];
    $dontype=$_POST['dontype'];
    $donamnt=$_POST['donamnt'];
    $dontid=$_POST['dontid'];
  
   
 
    $result=$mysqli->query("INSERT INTO donation(fullname,donationtype,amount,transactionid) values('$donfname','$dontype','$donamnt','$dontid')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/viewdonation.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewdonation.php')
        </script>
        ";
}
//Edit Donation
if(isset($_POST['editdonation']))
{
    $id=$_POST['id'];
    $donfname=$_POST['donfname'];
    $dontype=$_POST['dontype'];
    $donamnt=$_POST['donamnt'];
    $dontid=$_POST['dontid'];
  
  
   $result=$mysqli->query("UPDATE  donation SET fullname='$donfname',donationtype='$dontype',amount='$donamnt',transactionid='$dontid' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewdonation.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/viewdonation.php')
        </script>
        ";


}
//delete donation
if(isset($_GET['rdonationid']))
{
    $id=$_GET['rdonationid'];
    $result=$mysqli->query("delete from donation where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/viewdonation.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/viewdonation.php')
        </script>
        ";
}
// admin login
if(isset($_POST['login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from admin where email='$ademail' AND password='$adpass' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('admin/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('admin/index.php');
 </script>

		 ";
	}
}
//Receptionist Login
if(isset($_POST['receptionist_login']))
{
    session_start();
    $remail=$_POST['remail'];
    $rpass=$_POST['rpass'];
  
   $result=$mysqli->query("SELECT * froM users where email='$remail' AND password='$rpass' and status='approved' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['receptionist']=$remail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>alert('login success')
        location.replace('./management/receptionist/main.php');
			   </script>
			   ";
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('./management/receptionist/index.php');
 </script>

		 ";
	}
}
//patients Login
if(isset($_POST['patient_login']))
{
    session_start();
    $patemail=$_POST['patemail'];
    $patpass=$_POST['patpass'];

   $result=$mysqli->query("SELECT * from users where email='$patemail' and password='$patpass'  and status='approved'  and specialization='patient'limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['finance']=$patemail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>alert('login success')
			  location.replace('main.php');
			   </script>
			   ";
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('index.php');
 </script>

		 ";
	}
}




?>
