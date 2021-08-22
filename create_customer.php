
<!-- about section starts  -->
<!-- 
<h1 class="heading"> <span> Create </span> Post </h1> -->

<br><br><br><br><br><br><br><br><br>
<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navbar.php'); ?>

<div class="container" style="height:37%;magin-top:5%;flex: 1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;">
<br>
<?php
            if(isset($_POST['submit'])){
                $filename = $_FILES['file']['name'];
                $filesize = $_FILES['file']['size'];
                $filetype = $_FILES['file']['type'];
                $tmp_name = $_FILES['file']['tmp_name'];
                $dir = "images/";

                if($filetype != ("image/png" || "image/jpg" || "image/jpeg" || "pdf")){
                    echo "Only JPG images allowed";

                }else{
                    move_uploaded_file($tmp_name,$dir.$filename);
                }
                require_once('database/database.php');
                $isCreated = createCustomer($_POST);

                if($isCreated){
                    header('Location: index.php?page=customer_html');
                }
            }
        ?>
        <form action="#" enctype="multipart/form-data" method="post" class='image'>
            <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Customer Name" name="name" required="">
            </div>
            <div class="form-group">
                <input type="number" class="form-control p-4" placeholder="Phone Number" name="phoneNumber" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Address" name="address" required="">
            </div>
            <div class="form-group">
                <input type="file"  name="file" >
            </div>
            <div class="form-group">
                <button type="submit"  name="submit" class="btn btn-block" style="background-color:e84393">Create</button>
            </div>
        </form>
   

</div>
<?php require_once('partial/footer.php'); ?>

