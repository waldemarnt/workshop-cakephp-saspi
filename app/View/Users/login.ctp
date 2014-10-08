  <div class="widget-content">
    <div class="padd">
      <!-- Login form -->
      <?php echo $this->Form->create('User',array(
        'class'=>'form-horizontal'
        )
      ); ?>
        <!-- Email -->
        <div class="control-group">
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <?php echo $this->Form->input('email',
            array('placeholder'=>'Email','label'=>false)); ?>
          </div>
        </div>
        <!-- Password -->
        <div class="control-group">
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <?php echo $this->Form->input('password',
                array(
                  'placeholder'=>'password',
                  'label'=>false
                  )
                );
              ?>
          </div>
        </div>
        <!-- Remember me checkbox and sign in button -->
        <div class="control-group">
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox"> Remember me
            </label>
            <br>
            <button type="submit" class="btn">Sign in</button>
            <button type="reset" class="btn">Reset</button>
          </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="widget-foot">
      <!-- Footer goes here -->
    </div>
  </div>