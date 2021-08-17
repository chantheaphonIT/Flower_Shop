<?php
    /**
     * Connect to database
     */
    function db() {
        return new mysqli('localhost','root','','flower_shop');
    }

    /**
     * Create new book record
     */
    function createFlower($value) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        $name= $value['name'];
        $price = $value['price'];
        $image = $value['image'];
       
        return db()->query("INSERT INTO flower(name, price, image) VALUE('$name','$price','$image')");
    }
   

    /**
     * Get all BOOKS from table student
     */
    function selectAllFlowers() {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("SELECT * FROM flower ORDER BY flowerID DESC");
    }

   
    /**
     * Get only one on record by id 
     */
    function selectOneFlowers($id) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("SELECT * FROM flower WHERE flowerID = $id");
    }


    /**
     * Delete book by id
     */
    function deleteFlower($id) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("DELETE FROM flower WHERE flowerID = $id");
    }

   

/**
 * Update students
 */
function updateFlower($value) {
    $name = $value['name'];
    $price = $value['price'];
   
    $id= $value['flowerID'];
    $image = $value['image'];
    return db()->query("UPDATE flower SET name = '$name', price='$price', image='$image' WHERE flowerID = $id");
}
