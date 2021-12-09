<?php
     $page_title = 'Create User';
     include '../../global/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($db_results);
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
    <h1 class="body"><?php echo $user['first_name'] . ' ' . $user['last_name']; ; ?>
    </h1>
    <p>Email: <?php echo $user['email']; ?>
    </p>
    <p>Phone: <?php echo $user['phone_number']; ?>
    </p>
    <p><a class="btn btn-primary"
            href="https://liammailley.com/idm232/final/admin/users/edit.php?id=<?php echo $user['id']; ?>">Edit</a>
        <a class="btn btn-secondary"
            href="https://liammailley.com/idm232/final/admin/users/delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </p>
</div>
