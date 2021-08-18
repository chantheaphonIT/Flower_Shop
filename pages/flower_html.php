<br><br><br><br><br>
<section class="about" id="about" >


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
            <div class="card m-2" style="background-color:pink;height:37%;magin-top:15%;flex: 1 1 30rem;
    box-shadow: 0 .5rem 1.5rem black;
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;">
               
                    <div class="d-flex">
                        <div class="card-image mr-4">
                                    <img class="img-fluid" width="200"  height="100" src="<?= $flower['image']?>" alt="">
                        </div>
                        <div class="info" >
                                <h1 class="display-5" ><?= $flower['name']?></h1>
                                
                                <strong><?= $flower['price'].'$'?></strong> <br>
                                
                        </div>
                        
                            
                    </div>
                     <div class="action d-flex justify-content-end">
                                <a href="edit_flower.php?id=<?= $flower['flowerID'] ?>" class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></a>
                                <a href="delet_book.php?id=<?= $flower['flowerID'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></i></a>
                            
                    </div>
                   
                    
               
            </div>
            <br>
        <?php endforeach; ?>
    </div>
</section>


