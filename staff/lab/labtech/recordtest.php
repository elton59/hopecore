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

    <title>Record Test</title>

    <!-- Custom fonts for this template -->
    <link href="../../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                        <?php
                        if (isset($_GET['apapsid'])) {
                            $apapsid = $_GET['apapsid'];

                            $result=$mysqli->query("SELECT * from lab_test where id='$apapsid'");
                            while($row=$result->fetch_assoc())
                            {
                              $t_type=$row['test_type'];
                             
                            }
                            $result2=$mysqli->query("SELECT * from medicalsupplies where goodname='$t_type'");
                            $row2=$result2->fetch_assoc();
                            $t_cost=$row2['cost'];
                            $stock_in_out=$row2['stock_in_out'];
                        }

                        ?>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">submit test Results </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              
                            
                                <form method="POST" action="process.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="id" placeholder="patient" value="<?php echo $apapsid ?>" required readonly />
                                    </div>
                                    <label>Date of test</label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="lab_test_date" placeholder="patient" min="<?php echo date('Y-m-d') ?>" required />
                                    </div>
                                    <label>TestType</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $t_type?>" name="lab_test_type" readonly required/>                                  
                                    </div>
                                    <label>Results</label>
                                    <div class="form-group">
                                        <select class="form-control" name="lab_test_results" required>
                                            <option value='positive'>Positive</option>
                                            <option value='negative'>Negative</option>
                                        </select>
                                    </div>
                                    <label>quantity Used</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="lab_test_quantity" placeholder="quantity" required/>
                                    </div>
                                    <label>Comment</label>
                                    <div class="form-group">
                                        <textarea type="text" class="form-control" name="lab_test_comment" placeholder="comment" required></textarea>   

                                    </div>
                                   
                                   
                                        <input type="hidden" class="form-control" name="lab_test_cost" placeholder="cost" value="<?php echo  $t_cost?>" required />
                                        <input type="hidden" class="form-control" name=" stock_in_out" placeholder="cost" value="<?php echo $stock_in_out?>" required />

                                    <div class="form-group">
                                        <input class="from control btn btn-primary" type="submit" value="submit" name="record-test-results" />
                                        <input class="from control btn btn-danger" type="reset" value="Cancel" />


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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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