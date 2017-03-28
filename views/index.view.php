<!DOCTYPE html>
<html>
<head>
	<title>Laracasts</title>
</head>
<body>
	<nav>
		<li><a href="/about.view.php">About</a></li>
		<li><a href="/contact.view.php">Contact</a></li>
	</nav>
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
</body>
</html>
