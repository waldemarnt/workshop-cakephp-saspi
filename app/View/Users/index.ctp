<?php echo $this->element('form-top'); ?>
<div class="widget">

                <div class="widget-head">
                  <div class="pull-left">Tables</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content" style="display: block;">

                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Modified</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                   <?php foreach ($users as $user): ?>
                        <tr>
                          <td><?php echo $user['User']['id'] ?></td>
                          <td><?php echo $user['User']['name'] ?></td>
                          <td><?php echo $user['User']['email'] ?></td>
                          <td><?php echo $user['User']['modified'] ?></td>
                          <td>
                          <a href="<?php echo $this->Html->url('/users/view/'.$user['User']['id']);?>">
                              <button class="btn btn-mini btn-success"><i class="icon-ok"></i> </button>
                           </a>

                           <a href="<?php echo $this->Html->url('/users/edit/'.$user['User']['id']);?>">

                              <button class="btn btn-mini btn-warning"><i class="icon-pencil"></i> </button>

                           </a>
                          <?php  echo $this->Form->postLink(
                    		'<button class="btn btn-mini btn-danger">
                         		<i class="icon-remove"></i>
                     		</button>',
		                    array(
		                          'action'   => 'delete', $user['User']['id']
		                          ),
		                    array(
		                          'class'    => 'tip',
		                          'escape'   => false,
		                          'confirm'  => 'Are you sure ?'
		                         ));
                         	?>
                          
                          </td>


                        </tr>
                    <?php endforeach; ?>                                                           

                      </tbody>
                    </table>

                    <div class="widget-foot">

                      <div class="pagination pull-right">
                        <ul>
                          <li><a href="#">Prev</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">Next</a></li>
                        </ul>
                      </div>
                      <div class="clearfix"></div> 

                    </div>

                  </div>

                </div>
  <?php echo $this->element('form-bottom'); ?>