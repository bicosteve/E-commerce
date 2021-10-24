<?php require_once 'admin_includes/admin_header.php'; ?>
    <div class="container" id="page">
      <div class="row pad">
        <div class="col-lg-12">
          <h2 class="bold text-center">Add New Product To The Inventory</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="panel panel-default">
            <?php
              $addProductForm = new AddProductFormProvider();
              echo $addProductForm->createAddProductForm();
            ?>
          </div>
        </div>
      </div>
      <?php require_once '../includes/footer_date.php'; ?>
    </div>
<?php require_once 'admin_includes/admin_footer.php'; ?>
