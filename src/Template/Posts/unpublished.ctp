<div class="index large-10 large-offset-1 columns">
	<div class="panel">
		<h1 class="text-center">Unpublished Blog Posts</h1>

		<table>
			<tr>
				<th>Title</th>
				<th>Poster</th>
				<th>Tags</th>
			</tr>
			
			<?php foreach ($posts as $post) { ?>
			<tr>
				<td><?php echo $this->Html->link($post->title, ['action' => 'view', $post->id]) ?></td>
				<td><?php echo $post->username ?></td>
				<td><?php echo $post->tags ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>