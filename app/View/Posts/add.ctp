<?php echo $this->element('form-top'); ?>
    <div class="widget-content">
      <div class="padd">

        <h6>Input Boxs</h6>
        <hr>
		<?php echo $this->Form->create('Post',
			array(
				'class'=>'form-horizontal uni',
				'type'=>'file'
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
	            <?php echo $this->Form->input('tags',
		            	array('placeholder'=>'tags',
		            	'label'=>false,
		            	'id'=>'inputTags'
		            	)
	            	); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="tags">Author</label>
	            <div class="controls">
	            <?php echo $this->Form->input(
	            'author',array(
	            'class'=>'text',
	            'placeholder'=>'author',
	            'label'=>false)); ?>
	            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="category">Category</label>
	            <div class="controls">
	            <?php echo $this->Form->input('Category',
	            	array(
		            'label'=>false,
		            'id'=>'category',
		            'multiple'
		            )
	            ); 
	            ?>
	            </div>
          </div>

          <div class='file-checkbox'>
            <label>File Upload</label>
            <?php echo $this->Form->file('Media.file',
            	array(
            		'class'=>'file',
            		'type'=>'file',
            		'label'=>false
            		)
            	);
            ?>
          </div>

          <?php echo $this->Form->submit('Save'); ?>

        <?php echo $this->Form->end(); ?>

      </div>
      <div class="widget-foot">

        <!-- Footer goes here -->
      </div>
    </div>
<?php echo $this->element('form-bottom'); ?>
