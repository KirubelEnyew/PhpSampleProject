<?php

    class Model {
        public $conn;
        public $result;
        function __construct(){
            $this->conn = mysqli_connect('localhost', 'pizzasUser', '', 'pizzas');
            if(!$this->conn){
                echo 'Failed to Connect to Database :' . mysqli_connect_error();
            }
        }
        //gets what to query from the controller 
        function queryFunction($queryTerm){
            return mysqli_query($this->conn,$queryTerm);
           
           
        }
        function excuteQuery ($queryTerm){
            mysqli_query($this->conn,$queryTerm);
        }
        function fetchData($queryTerm){ 
           $query = $this->queryFunction($queryTerm);
                return mysqli_fetch_all($query,MYSQLI_ASSOC);
            
        }
    }

?>