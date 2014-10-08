<?php echo $this->element('form-top'); ?>
    <div class="widget-content">
      <div class="padd">

        <h6>Input Boxs</h6>
        <hr>
		<?php echo $this->Form->create('User',
			array(
				'class'=>'form-horizontal uni'
				)
			); 
		?>

          <div class="control-group">
            <label class="control-label" for="name">Name</label>
	            <div class="controls">
	            <?php echo $this->Form->input('name',array('class'=>'text','placeholder'=>'name','label'=>false)); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="email">email</label>
	            <div class="controls">
	            <?php echo $this->Form->input('email',
	            	array('class'=>'text',
		            		'placeholder'=>'email',
		            		'label'=>false,
	            		)
	            	); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="password">password</label>
	            <div class="controls">
	            <?php echo $this->Form->input('password',array('class'=>'text','placeholder'=>'password','label'=>false)); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="born_date">born date</label>
	            <div class="controls">
	            <?php echo $this->Form->input('born_date',array('class'=>'date','placeholder'=>'born date','label'=>false)); ?>
	            </div>
          </div>

          <?php echo $this->Form->submit('Save'); ?>


        <?php echo $this->Form->end(); ?>

      </div>
      <div class="widget-foot">

        <!-- Footer goes here -->
      </div>
    </div>
<?php echo $this->element('form-bottom'); ?>
