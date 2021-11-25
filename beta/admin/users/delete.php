<?php
    $page_title = 'Delete User';
    include '../../global/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query = 'DELETE ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $id;


    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/admin/users?success=User was deleted');
    } else {
        redirectTo('/admin/users/view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>
