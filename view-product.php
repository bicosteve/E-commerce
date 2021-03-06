<?php require_once 'includes/header.php'; ?>
<div class="container" id="page">
  <!--Main page content Here-->
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li class="active">View Product</li>
      </ol>
    </div>
  </div>

  <div class="row pad">
    <div class="col-lg-5">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="thumbnail">
          <img src="static/imgs/printed-dress_full.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Product Details</h3>
        </div>
        <div class="panel-body">
          <h3>Casual Print Dress &nbsp; <small>(In Stock)</small></h3>
          <h4>&dollar;45.99</h4>
          <hr />
          This dress is a great fit for making a presence at parties and other
          occasions where casual wears are allowed
          <hr />

          <div class="row">
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">Quantity</div>
                <div class="col-lg-12">
                  <input type="number" name="number" id="inputColor" class="form-control" value="1" autocomplete="off"
                    step="1" min="1" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <button type="button" class="btn btn-primary">
            <i class="glyphicon glyphicon-shopping-cart"></i> Add To Cart
          </button>
        </div>
      </div>

      <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Product Description</a>
          </li>
          <li role="presentation">
            <a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab">Shipping Details</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="description">
            <h3>Product Description</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.
          </div>
          <div role="tabpanel" class="tab-pane" id="shipping">
            <h3>Shipping Details</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="row pad">
      <div class="col-lg-12 text-center">
        Copyright &copy; 2017 <strong>Trendy Fashion Store</strong>
      </div>
    </div>
  </footer>
</div>

<?php require_once 'includes/footer.php'; ?>