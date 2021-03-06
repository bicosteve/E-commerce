<?php require_once 'admin_includes/admin_header.php' ?>
    <div class="container" id="page">
      <!--Main page content Here-->
      <div class="row pad">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <h3 class="bold">ORDER ERT3343 FROM Daniel Monroe</h3>
              <p>Products: 2 (&dollar;50.99)</p>
              <p>Status: <span class="badge">Pending</span></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4>Products Bought</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Units</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Classic Blouse</td>
                    <td>&dollar;35.99</td>
                    <td>1</td>
                    <th>&dollar;35.99</th>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Printed Dress</td>
                    <td>&dollar;23.99</td>
                    <td>1</td>
                    <th>&dollar;23.99</th>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="4" class="text-right">Total</th>
                    <th>59.98</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="strong">Buyer Information</h3>
          <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a
                  href="#shipping"
                  aria-controls="shipping"
                  role="tab"
                  data-toggle="tab"
                  >Shipping Info</a
                >
              </li>
              <li role="presentation">
                <a href="#details" aria-controls="details" role="tab" data-toggle="tab"
                  >Personal Details</a
                >
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="shipping">
                <h4 class="bold">Shipping Information</h4>
                <p>
                  <i class="glyphicon glyphicon-user"></i> NAME:
                  <strong>Daniel Monroe</strong>
                </p>
                <p>
                  <i class="glyphicon glyphicon-map-marker"></i> ADDRESS:
                  <strong>Cool breeze Avenue</strong>
                </p>
                <p>
                  <i class="glyphicon glyphicon-th"></i> State:
                  <strong>Washington</strong>
                </p>
                <p>
                  <i class="glyphicon glyphicon-flag"></i> Country:
                  <strong>United States</strong>
                </p>
                <hr />
                <p>
                  <i class="glyphicon glyphicon-gift"></i>
                  Delivery: <strong>Next Day Delivery</strong>
                </p>
                <hr />
                <p>
                  <i class="glyphicon glyphicon-piggy-bank"></i>
                  Payment Type: <strong>Wire Transfer</strong>
                </p>
              </div>
              <div role="tabpanel" class="tab-pane" id="details">
                <h4 class="bold">Personal Details Provided</h4>
                <p>
                  <i class="glyphicon glyphicon-user"></i> NAME:
                  <strong>Daniel Monroe</strong>
                </p>
                <p>
                  <i class="glyphicon glyphicon-phone-alt"></i> PHONE:
                  <strong>12569875588</strong>
                </p>
                <p>
                  <i class="glyphicon glyphicon-envelope"></i> EMAIL:
                  <strong>dmonroex@gmail.com</strong>
                </p>
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
<?php require_once 'admin_includes/admin_footer.php' ?>
