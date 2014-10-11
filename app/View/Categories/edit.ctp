<?php echo $this->element('form-top'); ?>
    <div class="widget-content">
      <div class="padd">

        <h6>Add Category</h6>
        <hr>
		<?php echo $this->Form->create('Category',
			array(
				'class'=>'form-horizontal uni'
				)
			); 
		?>
		<?php echo $this->Form->input('id'); ?>
          <div class="control-group">
            <label class="control-label" for="name">Name</label>
	            <div class="controls">
	            <?php echo $this->Form->input('name',array('class'=>'text','placeholder'=>'name','label'=>false)); ?>
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
