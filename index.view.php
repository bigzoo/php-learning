<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      PhP is Awesome
    </title>
    <style media="screen">
      header{
        background-color: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <header>
    <h1>
      Holla
    </h1>
  </header>
  <body>
    <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>
      <?php if ($task->completed) : ?>
        <strike>
          <?= $task->description; ?>
        </strike>
      <?php else: ?>
      <?= $task->description; ?>
    <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>

  </body>
</html>
