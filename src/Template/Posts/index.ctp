<div class="index large-10 large-offset-1 columns">
	<div class="panel">
		<h1 class="text-center">Published Blog Posts</h1>

		<?php
			$this->Session->read('Auth.User');
			$permission = $this->Session->read('Auth.User.role');
			$username = $this->Session->read('Auth.User.username');
			
			if ($permission == 0){ ?>
				
			<h5><?php echo $this->Html->link('Add post', ['action' => 'add'])?></h5>
				
			<?php } ?>

		<table>
			<tr>
				<th>Title</th>
				<th>Poster</th>
				<th>Tags</th>
			</tr>
			
			<?php foreach ($posts as $post) { 
				if ($post->published == 1) { ?>
			<tr>
				<td><?php echo $this->Html->link($post->title, ['action' => 'view', $post->id]) ?></td>
				<td><?php echo $post->username ?></td>
				<td><?php if (!empty($post->tags)){
					$tags = (explode(' ',$post->tags));
					foreach ($tags as $tag) {
						echo $this->Html->link(''.$tag.' ', ['action' => 'tagged', $tag]);
					}
				} ?></td>
			</tr>
			<?php }} ?>
		</table>
	</div>
</div>