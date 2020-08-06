<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Getecz Installer
  </title>
  <?php include('functions.inc.php'); ?>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
          <img src="../assets/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../docs/index.html" target="blank">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Documentation</span>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-light">Install Software easy and fast</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0"> 
             <?php 
             	$getaction= $_GET['act'];
             	if($getaction==NULL)
             	{
              ?>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
               Checking Requirements 
              </div>
             

             	<table style="width:100%">
					  <tr>
					    <td>PHP</td>
					    <td><small>7.0 + Needed </small></td>
					    <td><?php versioncheck(); ?></td>
					  </tr>
					  <tr>
					    <td>MySQLi</td>
					    <td><small>Should Enabled </small></td>
					    <td><?php mysqlicheck();  ?></td>
					  </tr>
					  <tr>
					    <td>Allow_url_fopen</td>
					    <td><small>Should Enabled </small></td>
					    <td><?php fopencheck(); ?></td>
					  </tr>
					</table>
					<?php $nex = reqcheck(); ?>
					<div class="text-center">
                <a href="?act=db"> <button type="button" class="btn btn-primary mt-4" <?php if($nex!=1){ echo'disabled';} ?>>Start Installation</button></a>
                </div>
				
            </div>
        <?php } elseif($getaction=='db'){ ?>

        	 <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
               Connecting  Database
              </div>
              <?php if($_GET['stat']=='error'){ ?>
	             <div class="alert alert-warning" role="alert">
				    <strong>Warning!</strong> Please Fill All Filed
				</div>
				<?php } ?>
				 <?php if($_GET['stat']=='errordb'){ ?>
	             <div class="alert alert-danger" role="alert">
				    <strong>Error!</strong> Database Not Found
				</div>
				<?php } ?>
				 <?php if($_GET['stat']=='installerror'){ ?>
	             <div class="alert alert-danger" role="alert">
				    <strong>Failed!</strong> Can't import tables into your database!
				</div>
				<?php } ?>

             	<form role="form" action="configmake.php" method="post">
             	<div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-planet"></i></span>
                    </div>
                    <input class="form-control" name="host" placeholder="Database Host" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" name="user" placeholder="Database Username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="pass" placeholder="Database Password" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-app"></i></span>
                    </div>
                    <input class="form-control" name="db" placeholder="Database Name" type="text">
                  </div>
                </div>
              
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Connect Database</button>
                </div>
              </form>
            </div>

        
        <?php } elseif($getaction=='user'){ ?>

        	 <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
               Create  Administrator 
              </div>
             
              <?php if($_GET['stat']=='fill'){ ?>
	             <div class="alert alert-warning" role="alert">
				    <strong>Warning!</strong> Please Fill All Filed
				</div>
				<?php } ?>

             	<form role="form" action="createadmin.php" method="post">
             	<div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" name="name" placeholder="Your Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Admin Email" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password"  placeholder="Admin Password" type="text">
                  </div>
                </div>
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Create Admin</button>
                </div>
              </form>
            </div>

        
       <?php } elseif($getaction=='thanks'){ ?>

        	 <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
              Installation Completed!
              </div>
             	<p> Software installation successfully completed, if you have any doubts related to this software checkout our documentation or feel free to contact us  </p>

                <div class="text-center">
                  <a href="../codes/finishinstall.php"><button type="button" class="btn btn-primary mt-4">Finish Instantiation</button></a>
                </div>
              
            </div>

        
        <?php } ?>	

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; <?php echo date('Y'); ?> Getecz Installer<a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank"></a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
           
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--   Core   -->
  <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../assets/js/argon-dashboard.min.js?v=1.1.0"></script>
 
</body>

</html>