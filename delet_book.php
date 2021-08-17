<?php 
    require_once('database/database.php');
    $id = $_GET['id'];

    $isDeleted = deleteFlower($id);
    
    if($isDeleted) {
        header('location: index.php?page=flower_html');
    }