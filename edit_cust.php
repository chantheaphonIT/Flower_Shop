<?php
    require_once('database/database.php');

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $isCreated = updateCustomers($_POST);

        if($isCreated){
            header('Location: index.php?page=customer_html');
        }
    }