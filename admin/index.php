<?php require_once 'admin_includes/admin_header.php'; ?>
    <div class="container" id="page">
      <!--Main page content Here-->
      <div class="row pad">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body text-center">
              <h3 class="bold">
                <i class="glyphicon glyphicon-dashboard"></i> Admin Dashboard
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="summary">
            <li class="">Pending Orders <span class="badge">5</span></li>
            <li class="">Completed Orders <span class="badge">3</span></li>
            <li class="">Products In Stock <span class="badge">7</span></li>
            <li class="">Products Out of Stock <span class="badge">11</span></li>
            <li class="">Total Products <span class="badge">90</span></li>
          </ul>
        </div>
      </div>
      <div class="row pad">
        <div class="col-lg-6 pad">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Pending Orders</h3>
            </div>
            <div class="panel-body">Orders that have not been fully completed</div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>REF</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="view-order.php">EF45AVH</a></td>
                    <td>Peter Holland</td>
                    <td>&dollar;50.99</td>
                    <td><span class="badge">Awaiting Payment</span></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><a href="view-order.php">ZSD03DDC</a></td>
                    <td>Kyle Jenner</td>
                    <td>&dollar;43.99</td>
                    <td><span class="badge">Awaiting Payment</span></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><a href="view-order.php">KDJDPE2</a></td>
                    <td>Daniel Monroe</td>
                    <td>&dollar;29.99</td>
                    <td><span class="badge">Awaiting Payment</span></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><a href="view-order.php">AWDADD22</a></td>
                    <td>Molly Anderson</td>
                    <td>&dollar;22.99</td>
                    <td><span class="badge">Awaiting Payment</span></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><a href="view-order.php">AEEACCC</a></td>
                    <td>James Cane</td>
                    <td>&dollar;100.00</td>
                    <td><span class="badge">Awaiting Payment</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-6 pad">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Available Products</h3>
            </div>
            <div class="panel-body">Products available in the products catalog</div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Classic Blouse</td>
                    <td>&dollar;35.99</td>
                    <td>45 units</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Printed Dress</td>
                    <td>&dollar;23.99</td>
                    <td>25 units</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Summer Gown</td>
                    <td>&dollar;45.99</td>
                    <td>33 units</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Summer Printed Dress</td>
                    <td>&dollar;35.99</td>
                    <td>11 units</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Faded Shorts</td>
                    <td>&dollar;15.99</td>
                    <td>3 units</td>
                  </tr>
                </tbody>
              </table>
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
<?php require_once 'admin_includes/admin_header.php'; ?>
