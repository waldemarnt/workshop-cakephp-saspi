<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- Menu button for smallar screens -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span>Menu</span>
      </a>
      <!-- Site name for smallar screens -->
      <a href="index.html" class="brand hidden-desktop">MacBeath</a>

      <!-- Navigation starts -->
      <div class="nav-collapse collapse">        

        <ul class="nav">  

          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-important"><i class="icon-cloud-upload"></i></span> Upload to Cloud</a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Photo Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress">
                  <div class="bar bar-success" style="width: 40%;"></div>
                </div>

                <hr />

                <!-- Progress bar -->
                <p>Video Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress">
                  <div class="bar bar-important" style="width: 80%;"></div>
                </div>   

                <hr />             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-success"><i class="icon-refresh"></i></span> Sync with Server</a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "icon-spin" class to rotate icon. -->
                <p><span class="badge badge-success"><i class="icon-refresh icon-spin"></i></span> Syncing Members Lists to Server</p>
                <hr />
                <p><span class="badge badge-warning"><i class="icon-refresh icon-spin"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>

        </ul>

        <!-- Search form -->
        <form class="navbar-search pull-left">
          <input type="text" class="search-query" placeholder="Search">
        </form>

        <!-- Links -->
        <ul class="nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="icon-user"></i> 
                <?php echo $this->Session->read('Auth.User.name'); ?> 
              <b class="caret"></b>              
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="<?php echo $this->Html->url('/users/logout'); ?>">
              <i class="icon-off"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </div>

    </div>
  </div>
</div>