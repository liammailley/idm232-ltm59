<table>
    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($recipes)) {

              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['category'] . '</td>';
              echo '<td><a class="link" href="view.php?id=' . $row['id'] . '">' . $row['recipe_name'] . '</a></td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>