<?= require 'partials/header.php'; ?>
<h1>All Users</h1>

<ul>
<?php foreach ($users as $user) :?>
  <li><?= $user->name; ?></li>
<?php endforeach ?>
</ul>

<h1>Submit Your name</h1>
<form action="/users" method="post">
  <input type="text" name="name">
  <button name="button">Submit</button>
</form>
<?= require 'partials/footer.php'; ?>
