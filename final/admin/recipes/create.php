<?php
$page_title = 'Create Recipe';
include __DIR__ . '/../../global/header.php';
// Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $recipe_name = mysqli_real_escape_string($db_connection, $_POST['recipe_name']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
    $prep_time = mysqli_real_escape_string($db_connection, $_POST['prep_time']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $description = mysqli_real_escape_string($db_connection, $_POST['description']);
    $file_id = mysqli_real_escape_string($db_connection, $_POST['file_id']);
    $filename = mysqli_real_escape_string($db_connection, $_POST['filename']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'INSERT INTO recipes (recipe_name, category, prep_time, ingredients, description, filename)';
    $query .= "VALUES ('{$recipe_name}', '{$category}', '{$prep_time}', '{$ingredients}', '{$description}', '{$filename}')";
    var_dump($query);

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        redirectTo('/admin/recipes/');
    } else {
        // Error
        redirectTo('/admin/recipes/create.php?error=' . mysqli_error($db_connection));
    }
}
?>
<div class="container">
  <h1 class="body">Create Recipe</h1>
  <?php include '../../components/alert.php'; ?>
  <form action="" method="POST">

  <label for="">Recipe Name</label>
    <input type="text"
      name="recipe_name">

  <label for="">Category</label>
    <select name="category" id="">
      <option selected value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="dinner">Dinner</option>
      <option value="dessert">Dessert</option>
      <option value="snacks">Snacks</option>
    </select>

  <label for="">Prep Time</label>
    <input type="text"
      name="prep_time">


  <label for="">Ingredients</label>
    <input type="text"
      name="ingredients">


  <label for="">Description</label>
    <input type="text"
      name="description">

  <label for="">Image</label>
    <input type="file"
      name="filename">

    <input type="hidden"
      name="id">

    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>

<?php
include __DIR__ . '/../../global/footer.php';
?>