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
                          <th>Title</th>
                          <th>Description</th>
                          <th>Author</th>
                          <th>Created</th>
                          <th>Modified</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                   <?php foreach ($posts as $post): ?>
                        <tr>
                          <td><?php echo $post['Post']['id'] ?></td>
                          <td><?php echo $post['Post']['title'] ?></td>
                          <td><?php echo $post['Post']['description'] ?></td>
                          <td><?php echo $post['Post']['author'] ?></td>
                          <td><?php echo $post['Post']['created'] ?></td>
                          <td><?php echo $post['Post']['modified'] ?></td>
                          <td>
                          <a href="<?php echo $this->Html->url('/posts/view/'.$post['Post']['id']);?>">
                              <button class="btn btn-mini btn-success"><i class="icon-ok"></i> </button>
                           </a>

                           <a href="<?php echo $this->Html->url('/posts/edit/'.$post['Post']['id']);?>">

                              <button class="btn btn-mini btn-warning"><i class="icon-pencil"></i> </button>

                           </a>
                           <a href="<?php echo $this->Html->url('/posts/delete/'.$post['Post']['id']);?>">

                              <button class="btn btn-mini btn-danger"><i class="icon-remove"></i> </button>
                            </a>
                          
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