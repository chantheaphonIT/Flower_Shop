<?php 
   session_start();
   include "db_conn.php";
    ?>

<?php 

    include_once("partial/header.php");
    include_once("partial/navbar.php");
    if(isset($_GET['page'])){
        if($_GET['page'] == "home"){
            include_once('pages/home_html.php');
        }elseif($_GET['page'] == 'flower_html'){
            include_once('pages/flower_html.php');
        }elseif ($_GET['page'] == "aboutus_html"){
            include_once('pages/aboutus_html.php');
        }elseif ($_GET['page'] == "customer_html"){
            include_once('pages/customer_html.php');
        }elseif ($_GET['page'] == "login"){
            include_once('pages/login.php');
        }
    }else {
        include_once('pages/home_html.php');
    }

    include_once("partial/footer.php");