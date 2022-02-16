<?php

include('config/connection.php');
include('templates/header.php');

?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div> -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


                <div class="col-lg-12">
                    <?php
                    $bodyColor = $_POST['bodyColor'];
                    $fabricCode = $_POST['fabricCode'];
                    $colorQuantity = $_POST['colorQuantity'];
                    $requiredQuantity = $_POST['requiredQuantity'];
                    $pocket = $_POST['pocket'];
                    $prasullaCode = $_POST['prasullaCode'];
                    $prasullaQuantity = $_POST['prasullaQuantity'];
                    $kabas = $_POST['kabas'];

                    switch ($_GET['action']) {
                        case 'add':
                            $query = "INSERT INTO fashionfabric
								(ItemID,bodyColor,fabricCode,colorQuantity,requiredQuantity,pocket,prasullaCode,prasullaQuantity,kabas)
								VALUES ('Null','" . $bodyColor . "','" . $fabricCode . "','" . $colorQuantity . "','" . $requiredQuantity . "','$pocket','" . $prasullaCode . "','" . $prasullaQuantity . "','" . $kabas . "')";
                            mysqli_query($db, $query) or die('Error in updating Database');

                            break;
                    }
                    ?>
                    <script type="text/javascript">
                        alert("Successfully added.");
                        window.location = "fashion.php";
                    </script>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include('templates/footer.php'); ?>