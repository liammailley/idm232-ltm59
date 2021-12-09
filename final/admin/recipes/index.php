<?php
$page_title = 'Recipes';
include '../../global/header.php';


// Build Query
$query = 'SELECT * ';
$query .= 'FROM recipes';

$db_results = mysqli_query($db_connection, $query);

// If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $recipes = search_recipe_with_keyword($keyword);
} else {
    // Build Query
    $recipes = get_recipes();
}

?>

<div class="container">
    <h1 class="body">Recipes</h1>
    <a class="btn" href="<?php echo $app['url'];?>/admin/recipes/create.php">Create</a>
    <?php include '../../components/alert.php'; ?>

    <form class="search-form" action="" method="GET">
        <input class="search" type="text" name="keyword" placeholder="Search Recipes..."
            value="<?php echo @$_GET['keyword']; ?>">
        <input class="btn_search" type="submit" value="Submit">
    </form>

    <?php
    // Check if the results returned anything
    if ($recipes) {
        include '../../components/list-recipes.php';
    } else {
        echo '<p>There are currently no recipes in the database</p>';
    }
    ?>
</div>
<?php include_once __DIR__ . '../../../global/footer.php';
