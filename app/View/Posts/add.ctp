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
            <label class="control-label" for="title">Title</label>
	            <div class="controls">
	            <?php echo $this->Form->input('title',array('class'=>'text','placeholder'=>'title','label'=>false)); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="description">Description</label>
	            <div class="controls">
	            <?php echo $this->Form->input('description',
	            	array('class'=>'text',
		            		'placeholder'=>'description',
		            		'label'=>false,
		            		'type'=>'textarea'
	            		)
	            	); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="tags">Tags</label>
	            <div class="controls">
	            <?php echo $this->Form->input('tags',array('class'=>'text','placeholder'=>'tags','label'=>false)); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="tags">Author</label>
	            <div class="controls">
	            <?php echo $this->Form->input('author',array('class'=>'text','placeholder'=>'author','label'=>false)); ?>
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
