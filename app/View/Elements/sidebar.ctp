  	<div class="sidebar">
      	<div class="sidebar-dropdown"><a href="#">Navigation</a></div>

      	<!--- Sidebar navigation -->
      	<!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
      	<ul id="nav">
        	<!-- Main menu with font awesome icon -->
	        <li><a href="<?php echo $this->Html->url('/') ?>" class="open"><i class="icon-home"></i> Home</a>
	          <!-- Sub menu markup 
	          <ul>
	            <li><a href="#">Submenu #1</a></li>
	            <li><a href="#">Submenu #2</a></li>
	            <li><a href="#">Submenu #3</a></li>
	          </ul>-->
	        </li>
          <li class="has_sub"><a href="#"><i class="icon-user"></i> Users  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
            <ul>
              <li><a href="<?php echo $this->Html->url('/users') ?>">Users Index</a></li>
              <li><a href="<?php echo $this->Html->url('/users/add') ?>">Add User</a></li>
            </ul>
          </li>  
          <li class="has_sub"><a href="#"><i class="icon-file-alt"></i> Posts  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
            <ul>
              <li><a href="<?php echo $this->Html->url('/posts') ?>">Posts Index</a></li>
              <li><a href="<?php echo $this->Html->url('/posts/add') ?>">Add Post</a></li>
            </ul>
          </li> 
          <li class="has_sub"><a href="#"><i class="icon-file-alt"></i> Categories  <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
            <ul>
              <li><a href="<?php echo $this->Html->url('/categories') ?>">Categories Index</a></li>
              <li><a href="<?php echo $this->Html->url('/categories/add') ?>">Add Category</a></li>
            </ul>
          </li>                             
      	</ul>
  	</div>