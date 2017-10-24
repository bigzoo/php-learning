<?php
require 'functions.php';
try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','chris');
} catch (PDOException $e) {
  dd($e->getMessage());
}

$statement = $pdo->prepare('select * from todos;');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
dd($results[1]->description);
require 'index.view.php';
