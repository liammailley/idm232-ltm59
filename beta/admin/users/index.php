<?php
$page_title = 'Users';
include '../../global/header.php';


// Build Query
$query = 'SELECT * ';
$query .= 'FROM users';

//echo '<pre>';
//     var_dump($query);
//echo '</pre>';

$db_results = mysqli_query($db_connection, $query);
?>

<div class="container">
    <h1 class="body">Staff</h1>
    <a class="btn" href="<?php echo $app['url'];?>/admin/users/create.php">Create</a>
    <?php include '../../components/alert.php'; ?>

    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include '../../components/list-users.php';
    } else {
        echo '<p>There are currently no users in the database</p>';
    }
    ?>
</div>
