<div class="index large-8 large-offset-2 columns">
	<div class="panel">
		<h1 class="text-center">Create Post</h1>

		<?php
			$this->Session->read('Auth.User');
			$username = $this->Session->read('Auth.User.username');

			$arr = array (0=>'Submit', 3=>'Save as draft');
			
			echo $this->Form->create('$post');
			echo $this->Form->control('title');
			echo $this->Form->control('body', ['rows'=> '5']);
			echo $this->Form->control('tags');
			echo '<small>Enter tags to describe your blog. Each word seperated by a space will be a tag. (Optional)<br><br>';
			echo $this->Form->hidden('username', array('default'=>"$username"));
			echo $this->Form->radio('published', [
				['value' => '0', 'text' => 'Submit for review'],
				['value' => '3', 'text' => 'Save as draft']
			]);
			echo $this->Form->button(__('Submit'));
			echo $this->Form->end();
		?> 
	</div>
</div>