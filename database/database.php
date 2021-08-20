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
        
        $dateTime = date("Y-m-d")." ".date("h:i:s");
     return db()->query("INSERT INTO flower(name, price, image,dateTime) VALUE('$name','$price','$image','$dateTime')");
    }
   
/**
     * Create new Customer record
     */
    function createCustomer($value) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        $name= $value['name'];
        $phoneNumber = $value['phoneNumber'];
        $address = $value['address'];
       
        return db()->query("INSERT INTO customer(name, phoneNumber, address) VALUE('$name','$phoneNumber','$address')");
    }
   

    /**
     * Get all flowres from table flower
     */
    function selectAllFlowers() {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("SELECT * FROM flower ORDER BY flowerID DESC");
    }

   /**
     * Get all customer from table customer
     */
    function selectAllCustomers() {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("SELECT * FROM customer ORDER BY customerID DESC");
    }

   
    /**
     * Get only one on record by id 
     */
    function selectOneFlowers($id) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("SELECT * FROM flower WHERE flowerID = $id");
    }
 /**
     * Get only one on record by id 
     */
    function selectOneCustomers($id) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("SELECT * FROM customer WHERE customerID = $id");
    }


    /**
     * Delete flower by id
     */
    function deleteFlower($id) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("DELETE FROM flower WHERE flowerID = $id");
    }
/**
     * Delete flower by id
     */
    function deleteCustomer($id) {
        $db = new mysqli('localhost', 'root', '', 'flower_shop');
        return db()->query("DELETE FROM customer WHERE customerID = $id");
    }
   

/**
 * Update flower
 */
function updateFlower($value) {
    $name = $value['name'];
    $price = $value['price'];
   
    $id= $value['flowerID'];
    $image = $value['image'];
    return db()->query("UPDATE flower SET name = '$name', price='$price', image='$image' WHERE flowerID = $id");
}
/**
 * Update flower
 */
function updateCustomers($value) {
    $db = new mysqli('localhost', 'root', '', 'flower_shop');
    $name= $value['name'];
    $id= $value['customerID'];
    $phoneNumber = $value['phoneNumber'];
    $address = $value['address'];
   
    return db()->query("UPDATE customer SET name = '$name', phoneNumber='$phoneNumber' WHERE customerID = $id");
}

// search flower//

function searchBytitle($name) {
    $name = $name['search'];
    return db()->query("SELECT * FROM flower where name like '%$name%'");
    
}
function readMore($text,$number){
    return substr($text,0,$number);    
  
}
// search customer//

function searchByName($name) {
    $name = $name['search'];
    return db()->query("SELECT * FROM customer where name like '%$name%'");
    
}
