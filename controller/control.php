<?php
    include_once('../model/model.php');
    class Controller extends Model{
        function getPizza()
        {
                $queryTerm = "SELECT id, pizzaName, ingredients FROM pizzas_table ORDER BY time_created";
                // $this->queryFunction($queryTerm);
                return $this->fetchData($queryTerm);
                // print_r($this->fetchData());
        }
        function addNewPizza($name,$ingredients){
                $queryTerm = "INSERT INTO pizzas_table (pizzaName,ingredients) VALUES ('$name','$ingredients')";
                echo $queryTerm;
                
                $this->excuteQuery($queryTerm);
                
        }
        function removePizzaById($id){
            if($id){
                $queryTerm = "DELETE FROM pizzas_table WHERE id=$id";
                $this->excuteQuery($queryTerm);
            }else{
                echo "Query failed";
            }
        }
        function updatePizzaById($pizzaName,$ingredients,$id){
            if($id){
                $queryTerm = "UPDATE pizza_table pizzaName = $pizzaName, ingredients = $ingredients WHERE id=$id";
                $this->excuteQuery($queryTerm);
            }
        }
    }
?>