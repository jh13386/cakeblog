<div class="index large-10 large-offset-1 columns">
	<div class="panel">
		<h1 class="text-center">Unpublished Drafts</h1>

		<?php
			$this->Session->read('Auth.User');
			$permission = $this->Session->read('Auth.User.role');
			$username = $this->Session->read('Auth.User.username');
		?>

		<table>
			<tr>
				<th>Title</th>
				<th>Poster</th>
				<th>Tags</th>
			</tr>
			
			<?php foreach ($posts as $post) { 
				if ($post->username == $username) { ?>
			<tr>
				<td><?php echo $this->Html->link($post->title, ['action' => 'edit', $post->id]) ?></td>
				<td><?php echo $post->username ?></td>
				<td><?php echo $post->tags ?></td>
			</tr>
			<?php }} ?>
		</table>
	</div>
</div>