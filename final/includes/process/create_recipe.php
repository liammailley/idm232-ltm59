<?php

require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/database.php';
require_once __DIR__ . '/../../includes/helper.php';

// INSERT INTO 'recipes'('user_id', 'recipe_name', 'category', 'intro', 'ingredients', 'description', 'image', 'date_created', 'date_updated')
// VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

$query = "INSERT INTO 'recipes'('user_id', 'recipe_name', 'category', 'intro', 'ingredients', 'description', 'image', 'date_created', 'date_updated')";
$query .= "VALUES ('1','Test Cake','Dessert','10-15 Minutes','Flour Eggs and Milk','This is a test recipe','image','2021-11-23 23:42:01','2021-11-23 23:42:01')";

echo '<pre>';
     var_dump($query);
echo '</pre>';

$db_connection->query($query);