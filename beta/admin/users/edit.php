<?php
     $page_title = 'Edit User';
     include '../../global/header.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $id) {
        redirectTo('/admin/users/edit.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $first_name = mysqli_real_escape_string($db_connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $phone_number = mysqli_real_escape_string($db_connection, $_POST['phone_number']);
    $role = mysqli_real_escape_string($db_connection, $_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'UPDATE users ';
    $query .= 'SET ';
    $query .= "first_name = '{$first_name}', ";
    $query .= "last_name = '{$last_name}', ";
    $query .= "email = '{$email}', ";
    $query .= "phone_number = '{$phone_number}', ";
    $query .= "role = '{$role}' ";
    $query .= " WHERE id = {$id}";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        redirectTo('/admin/users?success=User Updated');
    } else {
        // Error
        redirectTo('/admin/users/edit.php?id=' . $id . '&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM users ';
    $query .= 'WHERE id = ' . $id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>
<div class="container">
  <h1 class="body">Edit User: <?php echo $user['first_name']; ?></h1>
  <?php include '../../components/alert.php'; ?>
  <form action="" method="POST">

    <label for="">First Name</label>
    <input type="text"
      value="<?php echo $user['first_name']; ?>"
      name="first_name">

    <label for="">Last Name</label>
    <input type="text"
      value="<?php echo $user['last_name']; ?>"
      name="last_name">


    <label for="">Email</label>
    <input type="email"
      value="<?php echo $user['email']; ?>"
      name="email">


    <label for="">Phone</label>
    <input type="text"
      value="<?php echo $user['phone_number']; ?>"
      name="phone_number">


    <label for="">Role</label>
    <select name="role" id="">
      <option selected value="employee">Employee</option>
      <option value="admin">Admin</option>
    </select>



    <input type="hidden"
      value="<?php echo $user['id']; ?>"
      name="id">

    <br>
    <br>
    <input class="btn" name="update" type="submit" value="Update">

  </form>
</div>

