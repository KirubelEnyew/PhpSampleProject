<?php
    include_once('../controller/control.php');
    if(isset($_POST['submit'])){
        echo $_POST['pizzaName'];
        ECHO $_POST['ingredients'];
        if(!isset($_GET['id'])){
            echo "i didnt get an id";
        }
        else{
            $updateId = $_GET['id'];
        }
        $editPizza = new Controller();
        $editPizza->updatePizzaById($_POST['pizzaName'],$_POST['ingredients'],$updateId);
    }

?>



<!DOCTYPE html>
<html>
<?php include('header.php'); ?>

<section class="container">
    <h4 class="center">Update Pizza Info</h4>
    <form class="white" action = "edit.php" method="POST">
        <input type="text" name = "pizzaName" placeholder="New Pizza Name">
        <input type="text" name = "ingredients" placeholder="New Pizza Ingredients">
        <input type = "submit" name = "submit" value = "submit" class="btn">
    </form>
</section> 

<?php include('footer.php'); ?>
</html>