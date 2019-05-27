<div class="index large-4 large-offset-4 columns">
	<div class="panel">
		<h1 class="text-center">Log in</h1>

		<?php
			echo $this->Form->create();
			echo $this->Form->control('username');
			echo $this->Form->control('password', array('type' => 'password'));
			echo $this->Form->button(__('Login'));
			echo $this->Form->end();
		?>
	</div>
</div>