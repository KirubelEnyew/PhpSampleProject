<?php
    include_once('../controller/control.php');
    if(isset($_POST['submit'])){
        $newPizza = new Controller();
        $newPizza->addNewPizza($_POST['pizzaName'],$_POST['ingredients']);
    }

?>



<!DOCTYPE html>
<html>
<?php include('header.php'); ?>

<section class="container">
    <h4 class="center">Add New Pizza</h4>
    <form class="white" action = "add.php" method="POST">
        <input type="text" name = "pizzaName" placeholder="Add Pizza Name">
        <input type="text" name = "ingredients" placeholder="Add Pizza Ingredients">
        <input type = "submit" name = "submit" value = "submit" class="btn">
    </form>
</section> 

<?php include('footer.php'); ?>
</html>