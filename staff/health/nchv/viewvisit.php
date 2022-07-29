<?php
include("sidebar.php");
include("topbar.php");
include('connection.php');
$q1=mysqli_query($conn,'select * from users where specialization="lab"');
$r1=mysqli_fetch_assoc($q1);?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Record Visit</title>

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
                            <h6 class="m-0 font-weight-bold text-primary">Record Visit</h6>
                        </div>
                        <div class="card-body">
                            
                           <?php
                           if(isset($_GET['apapsid']))
                           {
                            $id=$_GET['apapsid'];
                            $result=$mysqli->query("SELECT * from lab_test where id=$id");
                            while($row=$result->fetch_assoc())
                            {
                              $treat=$row['treatment'];
                              $pemail=$row['patient_email'];
                            
                            }
                            $em=$_GET['apapemail'];
                            $result2=$mysqli->query("SELECT * from users where email='$em'");
                            while($row=$result2->fetch_assoc())
                            {
                              $pfname=$row['firstname'];
                              $plname=$row['lastname'];
                            
                            }
                           }
                           ?>
                                <form method="POST" action="process.php">
                                    <hr/>
                                    <div class="form-group">
                                 <input  type="hidden" class="form-control"
                                         placeholder="patient"  name="id" value="<?php echo $id ?>" required readonly/>
                               </div>
                               <label>Patients Details</label>
                               <hr/>
                                <label> Patient Email</label>
                               <div class="form-group">
                                 <input  type="text" class="form-control"      
                                         placeholder="patient"  value="<?php echo $pemail ?>" required readonly/>
                               </div>
                               <label>Patient FirstName</label>
                               <div class="form-group">
                                 <input  type="text" class="form-control"
                                         placeholder="patient"  value="<?php echo $pfname ?>" required readonly/>
                               </div>
                               <label>Patient Lastname</label>
                               <div class="form-group">
                                 <input  type="text" class="form-control"
                                         placeholder="patient"  value="<?php echo $plname ?>" required readonly/>
                               </div>
                               <label>Treatment</label>
                               <div class="form-group">
                                 <input  type="text" class="form-control"
                                         placeholder="patient"  value="<?php echo $treat ?>" required readonly/>
                               </div>
                               <hr/>
                               <label>Date Of Visit</label>
                               <div class="form-group">
                               <input type="date" name="vdate" class="form-control" min="<?php echo date('Y-m-d')?>"/>
                               </div>
                               <label>Report</label>
                               <div class="form-group">
                                        <textarea class="form-control"  placeholder="Report" name="vreport" required></textarea>
                               </div>
                               <div class="form-group">
                                   <input class="from control btn btn-primary" type="submit" value="submit" name="record-test-doctor"/>
                                   <input class="from control btn btn-danger" type="reset" value="Cancel"/>


                               </div>

                               </form>
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


</script>
    <!-- Bootstrap core JavaScript-->
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
