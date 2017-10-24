<?= require 'partials/header.php'; ?>
<ul>
<?php foreach ($users as $user) :?>
  <li><?= $user->name; ?></li>
<?php endforeach ?>
</ul>

<h1>Submit Your name</h1>
<form action="/names" method="post">
  <input type="text" name="name">
  <button name="button">Submit</button>
</form>
<?= require 'partials/footer.php'; ?>
