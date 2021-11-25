<?php 
     $page_title = 'Create A Recipe';
     include_once $_SERVER['DOCUMENT_ROOT'] . '../global/header.php';
?>

<h1 class="admin">Create a New Recipe</h1>

<div class="container">
     <form action="../includes/process/create_recipe.php" method = "POST">

          <label for="">Recipe Name</label>
          <input type="text" value="" name="first_name">
          <br> <br>

          <!--<input type="radio" id="breakfast" value="" name="category">
          <label for="breakfast">Breakfast</label>
          <br>
          <input type="radio" id="lunch" value="" name="category">
          <label for="lunch">Lunch</label>
          <br>
          <input type="radio" id="dinner" value="" name="category">
          <label for="dinner">Dinner</label>
          <br>
          <input type="radio" id="dessert" value="" name="category">
          <label for="dessert">Dessert</label>
          <br>
          <input type="radio" id="snacks" value="" name="category">
          <label for="snacks">Snacks</label>
          <br> <br>-->

          <label for="">Categories</label>
          <select name="categories" id="">
               <option selected value="breakfast">Breakfast</option>
               <option value="lunch">Lunch</option>
               <option value="dinner">Dinner</option>
               <option value="dessert">Dessert</option>
               <option value="snacks">Snacks</option>
          </select>
          <br> <br>

          <label for="">Prep Time</label>
          <input type="text" value="" name="prep_time">
          <br> <br>

          <label for="">Ingredients</label>
          <input type="text" value="" name="ingredients">
          <br> <br>

          <label for="">Image</label>
          <input type="file" value="" name="image">
          <br> <br>

          <input class="btn btn-primary" name="submit" type="submit">
     </form>
</div>

<!--<div class="individual">
          <div class="individual_left">
               <h1 class="individual_header"><b>Recipe Item Example</b></h1>
               <img class="individual_img" src="../images/placeholder.jpg">
          </div>
          <div class="individual_right">
               <p class="individual_upperdesc">
                    <b>This is a description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam diam nisi, pulvinar fermentum egestas eu, laoreet semper mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis bibendum quam nec felis volutpat viverra.</b>
               </p>
               <p class="individual_upperdesc">
                    Fusce scelerisque justo at odio rutrum ultricies. Donec ac dignissim neque. Pellentesque laoreet volutpat ultrices. Aliquam et nibh urna. Pellentesque fringilla imperdiet mauris, eget maximus massa tempus id. Integer efficitur convallis ante, viverra accumsan nunc interdum vel. Fusce laoreet, ligula in iaculis faucibus, velit ante tempor ipsum, vitae hendrerit eros eros vel metus.<br><br>Donec luctus suscipit diam quis scelerisque. Aenean a libero consectetur, dictum nulla a, posuere nisl. In cursus lacus metus. Phasellus vitae finibus risus. Quisque sit amet elit vitae arcu vulputate varius. Integer molestie ullamcorper elit, eget rutrum lectus lacinia in. Aliquam eu scelerisque risus. Vivamus non sagittis quam, quis ultricies dui. Donec gravida finibus felis, elementum elementum tellus bibendum eu.<br><br>Aliquam sollicitudin ultricies dolor, consectetur sagittis eros molestie in. Etiam ut massa feugiat, varius enim eget, tristique lorem. Ut vitae efficitur tellus. Praesent gravida, justo sed tempor fermentum, tortor urna vehicula nulla, at fringilla lectus velit vel elit. Sed egestas pellentesque gravida. Vivamus et purus non urna maximus vehicula. Aenean sit amet odio ante. Praesent et porttitor enim.
               </p>
          </div>
     </div>-->