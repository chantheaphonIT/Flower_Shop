<br><br><br><br><br><br><br><br>
<?php require_once('partial/header.php'); ?>
<?php require_once('partial/navbar.php'); ?>
<div class="container" style="height:35%;magin-top:5%;flex: 1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;">
    <br>
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];

            $books = selectOneFlowers($id);
            foreach($books as $book):
        ?>
        <form action="edit_model.php" method="post">
            <input type="hidden" class="form-control" value="<?= $book['flowerID'] ?>" name="flowerID">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $book['name'] ?>" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?= $book['price'] ?>" name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Image URL" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn  btn-block"style="background-color:e84393">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>