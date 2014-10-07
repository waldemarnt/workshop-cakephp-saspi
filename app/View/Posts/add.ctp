 <div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('tags');
		echo $this->Form->input('author');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div> 
<?php echo $this->element('form-top'); ?>
    <div class="widget-content">
      <div class="padd">

        <h6>Input Boxs</h6>
        <hr>
		<?php echo $this->Form->create('Post',
			array(
				'class'=>'form-horizontal uni'
				)
			); 
		?>

          <div class="control-group">
            <label class="control-label" for="inputEmail">Input</label>
            <div class="controls">
              <input type="text" id="inputEmail" placeholder="Email" class="text">
            </div>
          </div>
        
        <?php echo $this->Form->end(); ?>

      </div>
      <div class="widget-foot">
        <!-- Footer goes here -->
      </div>
    </div>
<?php echo $this->element('form-bottom'); ?>
