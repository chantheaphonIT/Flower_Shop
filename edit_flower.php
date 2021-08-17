<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
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
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>