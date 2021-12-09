<?php 
     $page_title = 'Home';
     include 'global/header.php';
?>

<body>
          <div class="hero">
               <h2 class="hero_text">BROWSE CHEF LIAM'S COOKBOOK</h2>
               <!--<hr class="hero_break">-->
               <form class="search-form" action="" method="GET">
                    <input class="searchTerm" type="text" name="keyword" placeholder="Search Recipes..."
                         value="<?php echo @$_GET['keyword']; ?>">
                    <input class="searchButton" type="submit" value="Submit">
               </form>
          </div>
          <!--<div class="mainbody">
               <div class="mainbody_column1">
                    <h2 class="mainbody_header"><u>RECENT ADDITIONS</u></h2>
                    <div class="mainbody_column1_box">
                         <h3 class="mainbody_column1_header">Recipe Item</h3>
                         <img class="mainbody_column1_img" src="images/placeholder.jpg">
                         <a href="pages/recipedetail.html" class="mainbody_button">See Recipe</a>
                    </div>
                    <div class="mainbody_column1_box">
                         <h3 class="mainbody_column1_header">Recipe Item</h3>
                         <img class="mainbody_column1_img" src="images/placeholder.jpg">
                         <a href="pages/recipedetail.html" class="mainbody_button">See Recipe</a>
                    </div>
               </div>
               <div class="mainbody_column2">
                    <h2 class="mainbody_header"><u>RECIPE OF THE DAY</u></h2>
                    <div class="mainbody_column2_box">
                         <h3 class="mainbody_column2_header">Recipe Item</h3>
                         <img class="mainbody_column1_img" src="images/placeholder.jpg">
                         <a href="pages/recipedetail.html" class="mainbody_button">See Recipe</a>
                    </div>
               </div>
               <div class="mainbody_column3">
                    <h2 class="mainbody_header"><u>MOST POPULAR</u></h2>
                    <div class="mainbody_column3_box">
                         <div class="mainbody_column3_item">
                              <h3 class="mainbody_column2_header">Recipe Item</h3>
                              <img class="mainbody_column3_img" src="images/placeholder.jpg">
                              <a href="pages/recipedetail.html" class="mainbody_button">See Recipe</a>
                         </div>
                         <div class="mainbody_column3_item">
                              <h3 class="mainbody_column2_header">Recipe Item</h3>
                              <img class="mainbody_column3_img" src="images/placeholder.jpg">
                              <a href="pages/recipedetail.html" class="mainbody_button">See Recipe</a>
                         </div>
                         <div class="mainbody_column3_item">
                              <h3 class="mainbody_column2_header">Recipe Item</h3>
                              <img class="mainbody_column3_img" src="images/placeholder.jpg">
                              <a href="pages/recipedetail.html" class="mainbody_button">See Recipe</a>
                         </div>
                    </div>
                    <a href="pages/allrecipes.html" class="mainbody_button2">See All Recipes</a>
               </div>
          </div>-->
     </body>
</body>

</html>