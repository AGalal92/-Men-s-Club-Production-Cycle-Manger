<?php

include('config/connection.php');
include('templates/header.php');
include('templates/side_nav.php');
?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Fasion</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Factory</li>
                <li class="breadcrumb-item active">Fasion</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-10">
                            <a href="add.php?action=add" type="button" class="btn btn-primary my-3 rounded-pill">Add New</a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">ID</th>
                                    <th scope="col">Body Color</th>
                                    <th scope="col">Fabric Code</th>
                                    <th scope="col">Color Quanitiy / KG</th>
                                    <th scope="col">Required Quantity</th>
                                    <th scope="col">Prasulla Code</th>
                                    <th scope="col">Pocket Prasulla</th>
                                    <th scope="col">Prasulla Quantity / KG</th>
                                    <th scope="col">Kabas Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM fashionfabric';
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo '<tr>';
                                    echo '<td>' . $row['ItemID'] . '</td>';
                                    echo '<td>' . $row['bodyColor'] . '</td>';
                                    echo '<td>' . $row['fabricCode'] . '</td>';
                                    echo '<td>' . $row['colorQuantity'] . '</td>';
                                    echo '<td>' . $row['requiredQuantity'] . '</td>';
                                    echo '<td>' . $row['pocket'] . '</td>';
                                    echo '<td>' . $row['prasullaCode'] . '</td>';
                                    echo '<td>' . $row['prasullaQuantity'] . '</td>';
                                    echo '<td>' . $row['kabas'] . '</td>';
                                    echo '<td> <a  type="button" class="btn btn-danger rounded-pill" href="del.php?type=courses&delete & id=' . $row['ItemID'] . '">DELETE </a> </td>';
                                    /* echo '<td>  <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id=' . $row['course_id'] . '"> SEARCH </a> '; */
                                    /* echo ' <a type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id=' . $row['course_id'] . '"> EDIT </a> '; */
                                    echo '</tr> ';
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include('templates/footer.php'); ?>