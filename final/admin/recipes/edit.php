<?php
     $page_title = 'Edit Recipe';
     include '../../global/header.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $id) {
        redirectTo('/admin/recipes/edit.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $recipe_name = mysqli_real_escape_string($db_connection, $_POST['recipe_name']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
    $intro = mysqli_real_escape_string($db_connection, $_POST['intro']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $description = mysqli_real_escape_string($db_connection, $_POST['description']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'UPDATE recipes ';
    $query .= 'SET ';
    $query .= "recipe_name = '{$recipe_name}', ";
    $query .= "category = '{$category}', ";
    $query .= "intro = '{$intro}', ";
    $query .= "ingredients = '{$ingredients}', ";
    $query .= "description = '{$description}' ";
    $query .= " WHERE id = {$id}";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    
    if ($db_results) {
        // Success
        redirectTo('admin/recipes?success=User Updated');
    } else {
        // Error
        redirectTo('/admin/recipes/edit.php?id=' . $id . '&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM recipes ';
    $query .= 'WHERE id = ' . $id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $recipe = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/recipes?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/recipes');
}
?>
<div class="container">
  <h1 class="body">Edit Recipe: <?php echo $recipe['recipe_name']; ?></h1>
  <?php include '../../components/alert.php'; ?>
  <form action="" method="POST">

    <label for="">Recipe Name</label>
    <input type="text"
      value="<?php echo $recipe['recipe_name']; ?>"
      name="recipe_name">

      <label for="">Category</label>
    <select name="category" id="">
      <option selected value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="dinner">Dinner</option>
      <option value="dessert">Dessert</option>
      <option value="snacks">Snacks</option>
    </select>

    <label for="">Intro</label>
    <input type="text" id="mytextarea"
      value="<?php echo $recipe['intro']; ?>"
      name="intro">


    <label for="">Ingredients</label>
    <input type="text" id="mytextarea"
      value="<?php echo $recipe['ingredients']; ?>"
      name="ingredients">


    <label for="">Description</label>
    <input type="text" id="mytextarea"
      value="<?php echo $recipe['description']; ?>"
      name="description">

    <input type="hidden"
      value="<?php echo $recipe['id']; ?>"
      name="id">

    <br>
    <br>
    <input class="btn" name="update" type="submit" value="Update">

  </form>
</div>

