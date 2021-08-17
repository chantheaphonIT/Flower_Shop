<br><br><br><br><br>
<section class="about" id="about" >
    <h1 class="heading"> <span> Flower</span> Shop </h1>

    <div class="container" >
    <div class="container p-4">
            <div class="d-flex justify-content-end p-2">
                <a href="create_flower.php" class="btn btn-primary">Add +</a>
            </div>
    <?php
        require_once('database/database.php');
        $flowers = selectAllFlowers();
        foreach($flowers as $flower):
        ?>
        <div class="card bg-light m-2" >
            <div  class="heading">
                <div class="d-flex">
                <div class="card-image mr-3">
                            <img class="img-fluid" width="200" src="<?= $flower['image']?>" alt="">
                        </div>
                    <div class="info" >
                        <h1 class="display-5" ><?= $flower['name']?></h1>
                        
                        <strong><?= $flower['price'].'$'?></strong> <br>
                        
                    </div>
                    
                </div>
                <div>
                        <a href="edit_flower.php?id=<?= $flower['flowerID'] ?>" class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></a>
                        <a href="delet_book.php?id=<?= $flower['flowerID'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></i></a>
                    
                </div>
                
            </div>
        </div>
        
    <?php endforeach; ?>
    </div>
</section>


