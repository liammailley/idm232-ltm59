<table>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '
              <div class="searchresults">
                <div class="searchresults_row">
                    <div class="recipeitem">
                        <div class="recipeitem_leftcolumn">
                          <h1 class="recipeitem_header body">' . $row['recipe_name'] . '</h1>
                          <a href="view.php?id=' . $row['id']. '" class="admin_img_container">
                            <img class="admin_img" src="https://liammailley.com/idm232/final/dist/images/edit.webp">
                          </a>
                        </div>
                        <img class="recipeitem_img" src="' . $row['file_id']. '">
                    </div>
                </div>
              </div>

              ';
              //echo '<tr>';
              //echo '<td>' . $row['id'] . '</td>';
              //echo '<td>' . $row['role'] . '</td>';
              //echo '<td><a class="link" href="view.php?id=' . $row['id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></td>';
              //echo '</td>';
          }
        ?>
    </tbody>
  </table>