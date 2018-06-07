<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Strong Labourhire</title>
<link rel="stylesheet" href="stylesheet/reset.css" type="text/css"/>
<link rel="stylesheet" href="stylesheet/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="stylesheet/bootstrap-datepicker.min.css"/>
<link rel="stylesheet" href="stylesheet/style.css" type="text/css"/>
</head>
<body>
<div class="container-fluid hedarebgcolor">
  <div class="row">
   <div class="col-md-12">
      <header>
        <div class="Lab">
          <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0px;">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3"> 
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
                </button>
                <a href="index.php">
                <img src="img/logo.png" alt="Strong Lab"> </a> </div>
               <div id="navbar3" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                <?php
					$url = $_SERVER['REQUEST_URI'];
					$class1 = '';
					$class2 = '';
					$class3 = '';
					if(strpos($url, 'index') !== false){
						$class1 = 'active';
						$class2 = '';
						$class3 = '';
					}else if(strpos($url, 'service') !== false){
						$class1 = '';
						$class2 = 'active';
						$class3 = '';
					}else if(strpos($url, 'contact') !== false){
						$class1 = '';
						$class2 = '';
						$class3 = 'active';
					}
				?>
                  <li class="<?php echo $class1; ?>"><a href="index.php">Home</a></li>
                  <li class="<?php echo $class2; ?>"><a href="service.php">Service</a></li>
                  <li class="<?php echo $class3; ?>"><a href="contact.php">Contact</a></li>
                </ul>
              </div>
              <!--/.nav-collapse --> 
            </div>
            <!--/.container-fluid --> 
          </nav>
        </div>
      </header>
     </div>
    </div>
  </div>