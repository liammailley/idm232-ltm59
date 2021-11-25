<?php
$page_title = 'Recipes';
include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';


// Build Query
$query = 'SELECT * ';
$query .= 'FROM recipes';

$db_results = mysqli_query($db_connection, $query);
?>

<div class="container">
    <h1 class="body">Recipes</h1>
    <a class="btn" href="<?php siteUrl('/admin/recipes/create.php') ?>">Create</a>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/alert.php'; ?>

    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>
</div>
