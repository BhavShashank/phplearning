<?php require 'partials/head.php'; ?>
	<h1>Submit your name</h1>
	<form action="/users" method="POST">
		<input name="name" />
		<button type="submit">Submit</button>
	</form>
	<h4>Submitted Username</h4>
	<?php foreach($users as $user) : ?>
		<li><?= $user->name; ?></li>
	<?php endforeach; ?>
<?php require 'partials/footer.php'; ?>