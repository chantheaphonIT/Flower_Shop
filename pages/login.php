<br><br><br><br><br>
<!-- contact section starts  -->
<?php
$host="localhost";
$user="root";
$password="";
$db="flower_shop";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die('connection error');
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from flower_shop where username='".$username."'AND passsword='".$password."'";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="flower_shop"){
        $_SESSION["username"]=$username;
        header("location:home.php");

    }
    elseif($row["usertype"]=="admin"){
        $_SESSION["username"]=$username;
        header("location:home.php");
        
    }else{
        echo"username or password incorrect";
    }
}
?>
<section class="contact" id="contact">



<div class="row">

    <form action="#" method="POST">
        <h1 class="heading"> login <span>form</span> </h1>
     
        <input type="text" placeholder="Name" class="box" required="">
      
       
        <input type="password" placeholder="Password" class="box" required="">
        
        <button type="submit" class="btn btn-block" style="background-color:#e84393">Login</button>
    </form>

    <div class="image">
        <img src="https://thumbs.dreamstime.com/b/greeting-card-panda-girl-flower-pink-background-101109059.jpg" alt="">
    </div>

</div>

</section>
