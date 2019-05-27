<h1>Create Post</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('user_id');
	echo $this->Form->input('title');
	echo $this->Form->input('published');
	echo $this->Form->submit('Submit Topic');
	echo $this->Form->end();
?>