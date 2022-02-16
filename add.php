<?php

include('config/connection.php');
include('templates/header.php');
include('templates/side_nav.php');

?>
<main id="main" class="main">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form class="row" role="form" method="post" action="transac.php?action=add">
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Body Color</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="bodyColor">
                </div>
              </div>

              <div class="row mb-3 col-md-6">
                <label for="inputNumber" class="col-sm-3 col-form-label">Fabric Code</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="fabricCode">
                </div>
              </div>

              <div class="row mb-3 col-md-6">
                <label for="inputNumber" class="col-sm-3 col-form-label">Color Quantity</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="colorQuantity">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputNumber" class="col-sm-3 col-form-label">Required Quantity</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="requiredQuantity">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Pocket Color</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="pocket">
                </div>
              </div>

              <div class="row mb-3 col-md-6">
                <label for="inputNumber" class="col-sm-3 col-form-label">Prasulla Code</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="prasullaCode">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputNumber" class="col-sm-3 col-form-label">Prasulla Quantity</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="prasullaQuantity">
                </div>
              </div>
              <div class="row mb-3 col-md-6">
                <label for="inputText" class="col-sm-3 col-form-label">Kabas</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="kabas">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Submit Button</label>
                <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Save Record</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<?php include('templates/footer.php'); ?>