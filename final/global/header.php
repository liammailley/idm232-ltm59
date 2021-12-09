<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/database.php';
require_once __DIR__ . '/../includes/helper.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/recipe_functions.php';

if(isset($page_title)) {
     $page_title = $page_title . ' | IDM 232';
} else {
     $page_title = 'IDM 232';
}
?>        
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" href="<?php echo $app['url'];?>/dist/images/favicon.ico" type="image/x-icon"/>    
     <link href="<?php echo $app['url'];?>/dist/css/desktop.css" rel="stylesheet" type="text/css" media="all">
     <link href="<?php echo $app['url'];?>/dist/css/mobiletablet.css" rel="stylesheet" type="text/css" media="all">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $page_title;?></title>
</head>
<body style="background-color: #F8FFC6;">
     <header>
          <h1>LIAM'S HOMEMADE GRUB</h1>
          <div class="mainmenu">
               <a href="<?php echo $app['url'];?>" class="mainmenu_item">Home</a>
               <a href="<?php echo $app['url'];?>/admin/recipes" class="mainmenu_item">View All Recipes</a>
               <a href="<?php echo $app['url'];?>/admin/" class="mainmenu_item">Admin</a>
          </div>
     </header>
<body>