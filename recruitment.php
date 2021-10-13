<html>
    <head>
        <meta charset="UTF-8">
        <title>Recruitment</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include("sidebar.php");
        ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Recruitment
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Recruitment</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Register New Employee</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>IC Number</label>
                                                    <input type="text" class="form-control" name="ic" id="ic" placeholder="Enter IC Number">
                                                </div> 
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control" name="position" id="position" placeholder="Enter Position">
                                                </div> 
                                                <div class="form-group">
                                                    <label>Employee Type</label>
                                                    <select class="form-control">
                                                        <option>Admin</option>
                                                        <option>Employee</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                                </div> 
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Leave Available</label>
                                                    <input type="text" class="form-control" name="leave" id="leave" placeholder="Enter Leave Available">
                                                </div>
                                                <div class="form-group">
                                                    <label>Salary Amount</label>
                                                    <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter Salary Amount">
                                                </div>
                                                <div class="form-group">
                                                    <label>Department ID</label>
                                                    <input type="text" class="form-control" name="department" id="department" placeholder="Enter Department ID">
                                                </div>
                                                <div class="from-group">
                                                    <label>BirthDay</label>
                                                    <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Enter Birthday">
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->


                        </div><!--/.col (left) -->
                        <!-- right column -->

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
    </body>
</html>