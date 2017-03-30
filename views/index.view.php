<?php require 'partials/head.php'; ?>
	<ul>
		<?php foreach($task as $tasks): ?>
			<li>
				<?php if($tasks->completed): ?>
					<strike>
						<?= $tasks->description ?>
					</strike>
				<?php else: ?>
					<?= $tasks->description; ?>
				<?php endif;?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php require 'partials/footer.php'; ?>