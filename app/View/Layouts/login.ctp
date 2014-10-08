<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <?php echo $this->Html->css(
      array(
        'bootstrap',
        'font-awesome',
        'style',
        'bootstrap-responsive'
      )
    );
    echo $this->fetch('css');
    ?>
  <?php echo $this->Html->script(array('jquery','bootstrap')); ?>

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <!-- Widget starts -->
            <div class="widget">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="icon-lock"></i> Login 
              </div>

              <?php
                echo $this->Session->flash(); 
                echo $this->fetch('content');
              ?>

            </div>  
      </div>
    </div>
  </div> 
</div>
	
<!-- JS -->
  <?php echo $this->fetch('script'); ?>

</body>
</html>