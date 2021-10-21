<?php require_once 'includes/header.php'; ?>
<div class="container" id="page">
  <!--Main page content Here-->
  <div class="row">
    <div class="col-lg-8">
      <h3 class="bold">
        <i class="glyphicon glyphicon-shopping-cart"></i> Your Shopping Cart
      </h3>

      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="thumbnail thumbnail-q">
                  <img src="static/imgs/blouse.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h3 class="bold">Classic Blouse</h3>
              <p>&dollar;45.99</p>
              <br />
              <p>
                <button type="button" class="btn btn-danger btn-xs">
                  <i class="glyphicon glyphicon-trash"></i>
                </button>
              </p>
            </div>
            <div class="col-lg-2">
              <h3>Quantity</h3>
              <p>
                <input type="number" name="quantity" id="inputQuantity" class="form-control" value="2" min="1"
                  step="1" />
              </p>
            </div>
            <div class="col-lg-2">
              <h3>Total</h3>
              <p>
                <strong>&dollar;91.98</strong>
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="thumbnail thumbnail-q">
                  <img src="static/imgs/printed-summer-dress.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h3 class="bold">Summer Dress</h3>
              <p>&dollar;30.99</p>
              <br />
              <p>
                <button type="button" class="btn btn-danger btn-xs">
                  <i class="glyphicon glyphicon-trash"></i>
                </button>
              </p>
            </div>
            <div class="col-lg-2">
              <h3>Quantity</h3>
              <p>
                <input type="number" name="quantity" id="inputQuantity" class="form-control" value="1" min="1"
                  step="1" />
              </p>
            </div>
            <div class="col-lg-2">
              <h3>Total</h3>
              <p>
                <strong>&dollar;30.99</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <h3 class="bold"><i class="glyphicon glyphicon-th-list"></i> Cart Summary</h3>

      <div class="panel panel-primary">
        <div class="panel-body">Current Cart Value</div>
        <ul class="list-group">
          <li class="list-group-item">
            <p>3 Items <strong class="pull-right">&dollar;122.97</strong></p>
            <p>24hr Shipping <strong class="pull-right">&dollar;10</strong></p>
          </li>
          <li class="list-group-item">
            <p>Total <strong class="pull-right">&dollar;132.97</strong></p>
            <p>Taxes <strong class="pull-right">&dollar;0.00</strong></p>
          </li>
        </ul>
        <div class="panel-footer">
          <a href="checkout.php" class="btn btn-primary btn-sm">
            Checkout <i class="glyphicon glyphicon-chevron-right"></i>
          </a>
          <a href="./" class="btn btn-link btn-sm pull-right">
            <i class="glyphicon glyphicon-chevron-left"></i> Continue Shopping
          </a>
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