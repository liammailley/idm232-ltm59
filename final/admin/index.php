<?php
$page_title = 'Admin Dashboard';
include '../global/header.php';
?>
<div class="container">
    <h1 class="body">Dashboard</h1>
    <a href="<?php echo $app['url'];?>/admin/recipes" class="btn">View and Edit Recipes</a>
    <a href="<?php echo $app['url'];?>/admin/users" class="btn">View and Edit Users</a>
</div>
