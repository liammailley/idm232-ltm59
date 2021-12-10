<?php
     $page_title = 'View Recipe';
     include 'global/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM recipes ';
    $query .= 'WHERE id=' . $id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $recipe variable;
        $recipe = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/recipes?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes');
}
?>

<div class="individual">
        <div class="individual_left">
            <h1 class="individual_header body"><b><?php echo $recipe['recipe_name'];?></b></h1>
            <img class="individual_img" src="https://liammailley.com/idm232/final/dist/images/placeholder.jpg">
            <!--<img class="comment_img" src="../images/comment.png">-->
        </div>
        <div class="individual_right">
            <div class="individual_right_upper">
                <h2 class="body"><b>Category</b></h2>
                <p class="body"><?php echo $recipe['category'];?></p>
                <h2 class="body"><b>Intro</b></h2>
                <p class="body"><?php echo $recipe['intro'];?></p>
                <h2 class="body"><b>Ingredients</b></h2>
                <p class="body"><?php echo $recipe['ingredients'];?></p>
            </div>
            <p class="individual_upperdesc">
               <h2 class="body"><b>Recipe</b></h2>
               <?php echo $recipe['description'];?>
            </p>
        </div>
</div>