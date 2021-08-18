
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
        <form action="create_flower_model.php" method="post" class='image'>
            <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Flower Name" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control p-4" placeholder="Flower Price" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control p-4" placeholder="Image URL" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block" style="background-color:e84393">Create</button>
            </div>

        </form>
    

</div>
<?php require_once('partial/footer.php'); ?>