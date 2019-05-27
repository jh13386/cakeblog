<div class="index large-8 large-offset-2 columns">
	<div class="panel">
		<h1><?php echo h($post->title) ?></h1>
		<p><?php echo h($post->body) ?></p>
		<?php if (!empty($post->tags)){ ?> <p>Tags: <?php echo h($post->tags) ?></p> <?php } ?>
		<p><small>Posted by user <?php echo h($post->username) ?></p>

		<?php
			$this->Session->read('Auth.User');
			$permission = $this->Session->read('Auth.User.role');
			
			if ($permission == 1){

			$arr = array (0=>'No', 1=>'Yes');

			echo $this->Form->create('$post');
			echo $this->Form->input('published', array('options'=>$arr, 'class' => 'large-1'));
			echo $this->Form->button(__('Submit'));
			echo $this->Form->end();
			}
		?>
	</div>
</div>