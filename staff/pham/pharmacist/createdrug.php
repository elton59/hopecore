<?php
include("sidebar.php");
include("topbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prescribe Drug</title>

    <!-- Custom fonts for this template -->
    <link href="../../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
               
                    <div class="invinsible">
               
                          
                   </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Issue Drug</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"  >
                           
                            <form method="POST"  action='createdrug.php?'>
                                    <div class="form-group">
                                    <label>Select Drug</label>
                                         <select  placeholder="search drug"  name="sapdatid" class="form-control">
                                        
                                      <?php 
                                       $result=$mysqli->query("select * from medicalsupplies where category='drugs' order by id  ")or die($mysqli->error);
                                       $drivers_list=array('search drug...');
                                       
                                       while( $row=$result->fetch_array())
                                       {
                                     
                                           $driver_email=$row['goodname'];
                                          
                                          
                                           array_push($drivers_list,$driver_email);
                                       
                                       
                                          
                                       }
                                       foreach($drivers_list as $drivers)
                                       {

                                          echo "
                                          
                                          <option value='$drivers' class='form-control' >$drivers</option>";
                                
                                       }
                                       if(isset($_GET['apapsid']))
                                       {
                                        $_SESSION['guess']=$_GET['apapsid'];
                                       
                                       }
                                       $apapsid=$_SESSION['guess'];
                                       $result2=$mysqli->query("select * from lab_test where id='$apapsid' limit 1");
                                       $row2=$result2->fetch_assoc();
                                       $din=$row2['doctors_email'];
                                       $pit=$row2['patient_email'];
                                       $drem=$row2['treatment'];
                                       $result3=$mysqli->query("select * from users where specialization='doctor' and email='$din' limit 1");
                                       $row3=$result3->fetch_assoc();
                                       $dfname=$row3['firstname'];
                                       $dlname=$row3['lastname'];
                                       $result4=$mysqli->query("select * from users where specialization='patient' and email='$pit' limit 1");
                                       $row4=$result4->fetch_assoc();
                                       $pfname=$row4['firstname'];
                                       $plname=$row4['lastname'];
                                      ?>
                              </select>
                             
                                    </div>
                                    <div class="form-group">
                                    <label>Quantity</label>
                                        <input class="form-control" type="number" name="prpres" placeholder="quantity" required/></div>
                                        <div class="form-group">
                                   <input class="from control btn btn-primary" type="submit" value="Search inventory" name="createdrug"/>
                               </div>
                                </form>
                                <?php
                                if(isset($_POST['sapdatid']))
                                {
                                  
                                    $sapdatid=$_POST['sapdatid'];
                                    $prpres=$_POST['prpres'];
                                    $_SESSION['quan']=$prpres;
                                    
                                    $result=$mysqli->query("select * from medicalsupplies where goodname='$sapdatid' and category='drugs' limit 1");
                                    $row=$result->fetch_assoc();
                                    $cos=$row['cost'];
                                    $gname=$row['goodname'];
                                    $cost=$prpres * $cos;
                                    $sout=$row['stock_in_out'];
                                    $nsout=$sout+$prpres;
                                    $result3=$mysqli->query("UPDATE medicalsupplies set stock_in_out='$nsout'where goodname='$gname' limit 1");
                                    
                                }
                                else
                                {
                                    $gname='';
                                    $cos='';
                                    $cost='';
                                    $prpres='';

                                }
                                ?>
                                <form method="POST"  action="process.php"> 
                                <div class="form-group">
                               <label>Drug Details</label>
                                         <input  type='text'class="form-control" placeholder=" Drug details" name='apdatid' value="<?PHP echo $gname?>" readonly required/>
                                   
                              </div> 
                              <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control"  type="number   " name="prpres"  readonly
                                 placeholder="Quantity" value="<?php echo $prpres?>"required/>
                       </div>
                                <div class="form-group">
                                <label>Cost</label>
                                <input class="form-control"  type="number   " name="prcost"  
                                 placeholder="cost" value="<?php echo $cost?>"required readonly/>
                       </div>
                                <div class="form-group">
                                <input class="form-control" type="hidden"name="prid" placeholder="id"  value="<?php echo $apapsid ?>"readonly required/>  
                               </div> 
                               <div class="form-group">
                               <label>Doctor's Recommendation</label>
                                         <input  type='text'class="form-control" placeholder="details" value="<?PHP echo $drem?>" readonly/>
                                   
                              </div>
                              <hr/>
                              <label>Doctor's Incharge Email</label>
                               <hr/>
                               <div class="form-group">
                              
                                         <input   type='text'class="form-control" placeholder="details" value="<?PHP echo $din?>" readonly/>
                                   
                              </div> 
                              <label>Doctor's Incharge Firstname</label>
                               <div class="form-group">
                              
                                         <input  type='text'class="form-control" placeholder="details" value="<?PHP echo $dfname?>" readonly/>
                                   
                              </div>
                              <label>Doctor's Incharge Lastname</label>
                               <div class="form-group">
                              
                                         <input  type='text'class="form-control" placeholder="details" value="<?PHP echo $dlname?>" readonly/>
                                   
                              </div>  
                              <div class="form-group">
                               <label>Patient Email</label>
                                         <input   type='text'class="form-control" placeholder="details" value="<?PHP echo $pit?>" readonly/>
                                   
                              </div> 
                              <div class="form-group">
                               <label>Patient Firstname</label>
                                         <input type='text'class="form-control" placeholder="details" value="<?PHP echo $pfname?>" readonly/>
                                   
                              </div> 
                              <div class="form-group">
                               <label>Patient Lastname</label>
                                         <input type='text'class="form-control" placeholder="details" value="<?PHP echo $plname?>" readonly/>
                                   
                              </div>   
                              
                               
                               
                               <div class="form-group">
                                   <input class="from control btn btn-primary" type="submit" value="submit" name="createdrug"/>
                                   <input class="from control btn btn-danger" type="reset" value="Cancel"/>
                                   

                               </div>
                     
                               </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; John Elton Okoth2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"> 
    document.getElementById('branche').onchange = function() {
       
        localStorage.setItem('selecteditem', document.getElementById('branche').value);
        document.getElementById("myForm").submit();
      
       
    };

  
</script>    <!-- Bootstrap core JavaScript-->
    <script src="../../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../assets/"></script>

</body>

</html>