<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left">
    <i class="icon-tasks"></i>
     <?php echo ucfirst($this->params['controller']); ?>
     </h2>
    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="<?php echo $this->Html->url('/'); ?>"><i class="icon-home"></i> Home</a> 
      <!-- Divider -->
      <span class="divider">/</span> 
      <a href="<?php echo $this->Html->url('/'.$this->params['controller']); ?>" class="bread-current"><?php echo ucfirst($this->params['controller']); ?></a>
    </div>

    <div class="clearfix"></div>

  </div>
  <!-- Page heading ends -->

  <!-- Matter -->

  <div class="matter">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">


          <div class="widget">
            <div class="widget-head">
              <div class="pull-left">Form</div>
              <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                <a href="#" class="wclose"><i class="icon-remove"></i></a>
              </div>  
              <div class="clearfix"></div>
            </div>
