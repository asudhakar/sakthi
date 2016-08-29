<?php 
  include_once '../../controllers/default_functions.php';
  include_once '../../model/db.php';
  landing_page_admin_session_check();
  $userDetails = $_SESSION['adminDeatils'];
  $details = extract_user_details($userDetails);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>the6</b></span>
      <span class="logo-lg"><b>the6</b>.in</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $details['name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../img/avatar5.png" class="img-circle" alt="User Image">
                <p>
                  <?php echo $details['name']; ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li><a href="home.php"><i class="fa fa-circle-o text-red "></i> <span>Dashboard</span></a></li>
          <li><a href="add_user.php"><i class="fa fa-circle-o text-yellow"></i> <span>Add User</span></a></li>
          <li><a href="manage_user.php"><i class="fa fa-circle-o text-red"></i> <span>Manage User</span></a></li>
          <li><a href="add_catagory.php"><i class="fa fa-circle-o text-aqua"></i> <span>Add Catagory</span></a></li>
        </ul>
      </section>
  </aside>
  <!-- Content -->
  <div class="content-wrapper">
    <section class="content">