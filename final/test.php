<?php 
     $page_title = 'Home';
     include 'global/header.php';
?>

<?php
     if (isset($_GET['test'])) {
          redirectTo('/admin/users/index.php');
     }
?>


<form action="" method="GET">
     <button>SUbmit</button>
     <input type="hidden" name="test">
</form>
</body>

</html>