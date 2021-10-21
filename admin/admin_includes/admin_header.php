<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin | Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../static/bs/css/flatly.min.css" />
    <link rel="stylesheet" href="../static/css/styles.css" />
  </head>
  <body>
    <!--Admin Panel-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-ex1-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Trendy Fashion Store</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="index.php"
                ><i class="glyphicon glyphicon-dashboard"></i> Admin Dashboard</a
              >
            </li>
            <li>
              <a href="add-product.php"
                ><i class="glyphicon glyphicon-plus-sign"></i> Add Product</a
              >
            </li>
            <li>
              <a href="../index.php"
                ><i class="glyphicon glyphicon-chevron-left"></i> Back To Front</a
              >
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!--Client-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-ex1-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Trendy Fashion Store</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#"> <i class="glyphicon glyphicon-user"></i> Hi,Mike </a>
            </li>
            <li class="active">
              <a href="add-product.php">
                <i class="glyphicon glyphicon-upload"></i> Add Product
              </a>
            </li>
            <li class="active">
              <a href="../index.php">
                <i class="glyphicon glyphicon-th-large"></i> Home
              </a>
            </li>
            <li class="active">
              <a href="logout.php">
                <i class="glyphicon glyphicon-log-out"></i> Logout
              </a>
            </li>

            <li class="active">
              <a href="login.php">
                <i class="glyphicon glyphicon-log-in"></i> Login
              </a>
            </li>
            <li class="active">
              <a href="register.php">
                <i class="glyphicon glyphicon-plus-sign"></i> Register
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>

    <?php require_once '../../init.php'; ?>
