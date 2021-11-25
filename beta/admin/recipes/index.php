<?php
$page_title = 'Recipes';
include '../../global/header.php';


// Build Query
$query = 'SELECT * ';
$query .= 'FROM recipes';

$db_results = mysqli_query($db_connection, $query);
?>

<div class="container">
    <h1 class="body">Recipes</h1>
    <a class="btn" href="<?php echo $app['url'];?>/admin/recipes/create.php">Create</a>
    <?php include '../../components/alert.php'; ?>

    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include '../../components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>
</div>
