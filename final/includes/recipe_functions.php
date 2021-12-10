<?php

/**
 * Insert customer into db
 *
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @return bool
 */
function create_recipes($file_id, $recipe_name, $category, $intro, $ingredients, $description)
{
    global $db_connection;

    $current_date_time = getFormattedDateTime();
    // Build Query
    $query = 'INSERT INTO recipes (file_id, recipe_name, category, intro, ingredients, description)';
    $query .= "VALUES ('{$file_id}', '{$recipe_name}', '{$category}', '{$intro}', '{$ingredients}', '{$description}')";

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        return true;
    } else {
        // Error
        return false;
    }
}

/**
 * Update customer info
 *
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @param string $current_date
 * @param string $user_id
 * @return void
 */
function update_recipe($recipe_name, $category, $intro, $ingredients, $description, $file_id)
{
    global $db_connection;
    // Build Query
    $query = 'UPDATE customers ';
    $query .= 'SET ';
    $query .= "file_id = '{$file_id}', ";
    $query .= "recipe_name = '{$recipe_name}', ";
    $query .= "category = '{$category}', ";
    $query .= "intro = '{$intro}', ";
    $query .= "ingredients = '{$ingredients}', ";
    $query .= "description = '{$description}' ";
    //$query .= "WHERE id = {$file_id}";
    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        return true;
    } else {
        return false;
    }
}

    /**
     * Delete user by ID
     *
     * @param int $id user id
     * @return bool
     */
    function delete_recipes_by_id($id)
    {
        global $db_connection;
        // Build Query
        $query = 'DELETE ';
        $query .= 'FROM recipes ';
        $query .= 'WHERE id=' . $id;

        $results = mysqli_query($db_connection, $query);
        if ($results) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get customer by ID
     *
     * @param int $id
     * @return void
     */
    function get_recipe_by_id($id)
    {
        global $db_connection;
        // Build Query
        $query = 'SELECT * ';
        $query .= 'FROM recipes ';
        $query .= 'WHERE id=' . $id;

        $results = mysqli_query($db_connection, $query);

        if ($results && $results->num_rows > 0) {
            // Get row from results and assign to $user variable;
            $recipe = mysqli_fetch_assoc($results);
        } else {
            // Redirect customer if ID does not have a match in the DB
            $recipe = null;
        }
        return $recipe;
    }

    /**
     * get all customers
     *
     * @return mysqli_result
     */
    function get_recipes()
    {
        global $db_connection;
        $query = 'SELECT * ';
        $query .= 'FROM recipes';
        $result = mysqli_query($db_connection, $query);

        if ($result && $result->num_rows > 0) {
            $recipes = $result;
        } else {
            $recipes = null;
        }

        return $recipes;
    }

    /**
   * Search customers
   *
   * @param string $keyword search word
   * @return mysqli_result
   */
  function search_recipe_with_keyword($keyword)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= ' WHERE ';
      $query .= "recipe_name LIKE '%" . $keyword . "%'";
      $query .= "OR category LIKE '%" . $keyword . "%' ";
      $query .= "OR category LIKE '%" . $keyword . "%' ";
      $query .= "OR intro LIKE '%" . $keyword . "%' ";
      $query .= "OR description LIKE '%" . $keyword . "%'";

      $result = mysqli_query($db_connection, $query);
      if ($result && $result->num_rows > 0) {
          $db_results = $result;
      } else {
          $db_results = null;
      }
      return $db_results;
  }
