<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_flower_model.php" method="post">
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
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>

        </form>
    </div>
<?php require_once('partial/footer.php'); ?>