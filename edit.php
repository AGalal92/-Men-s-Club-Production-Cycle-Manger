<!DOCTYPE html>
<html lang="en">


<?php

include('config/connection.php');
include('templates/header.php');

?>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
      </div>

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
        <?php
        $query = 'SELECT * FROM courses
              WHERE
              course_id =' . $_GET['id'];
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        while ($row = mysqli_fetch_array($result)) {
          $courseId = $row['course_id'];
          $i = $row['course_name'];
          $a = $row['start_date'];
          $b = $row['end_date'];
          $c = $row['price'];
          $d = $row['class'];
          $e = $row['instructor'];
        }

        $id = $_GET['id'];

        ?>

        <div class="col-lg-12">
          <h2>Edit Records</h2>
          <div class="col-lg-6">

            <form role="form" method="post" action="edit1.php">

              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $courseId; ?>" />
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Course Name" name="course_name" value="<?php echo $i; ?>">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Start Date" name="start_date" value="<?php echo $a; ?>">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="End Date" name="end_date" value="<?php echo $b; ?>">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Price" name="price" value="<?php echo $c; ?>">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Class" name="class" value="<?php echo $d; ?>">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="instructor" name="instructor" value="<?php echo $e; ?>">
              </div>
          
              <button type="submit" class="btn btn-default">Update Record</button>



            </form>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php include('templates/footer.php'); ?>