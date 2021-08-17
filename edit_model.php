<?php
    require_once('database/database.php');

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $isCreated = updateFlower($_POST);

        if($isCreated){
            header('Location: index.php?page=flower_html');
        }
    }