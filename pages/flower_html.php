<br><br><br><br><br>

<section class="about" id="about" >
<!-- The form -->
<h1 class="heading"> Our <span>Products</span> </h1>
    <form class="example" action="" method="post">
        <input type="text"placeholder="Search by title" name = "search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <div class="container" >
        <div class="container p-4">
                <div class="d-flex justify-content-end p-2">
                <a href="create_flower.php" class="btn btn-primary">Add +</a>
        </div>
        <div class="row">
            
            <div class='card-columns'>
                <?php
                require_once('database/database.php');
                $flowers = "";
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    //search//
                    $flowers = searchBytitle($_POST);
                }else{
                $flowers = selectAllFlowers();
                }
                foreach($flowers as $flower):
                    $description = readMore($flower['description'], 20);
                ?>
                        <div class="card m-2" style="background-color:pink;height:37%;magin-top:15%;flex: 1 1 30rem;
                                            box-shadow: 0 .5rem 0.5rem black;
                                            border-radius: .5rem;
                                            border: .1rem solid gray;
                                            position: relative;">                      
                               <div class="d-flex">
                                    <div class="card-image mr-4">
                                                <img class="img-fluid"src="<?= $flower['image']?>"  width="700"  height="100" alt=""><br><br>
                                                <h1 style='text-align: center;'><?= $flower['price'].'$'?></h1>
                                    </div>
                                    <div class="info" >
                                            <h1 class="display-5" style="color:#e84393"><?= $flower['name']?></h1>
                                            <strong><?= $flower['dateTime']?></strong> 
                                            <hr>
                                         
                                            <p><?=$description?>.Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Corrupti Asperiores Laboriosam Praesentium Enim Maiores? Ad Repellat Voluptates Alias Facere Repudiandae Dolor Accusamus Enim Ut Odit, Aliquam Nesciunt Eaque Nulla Dignissimos....<a href="detail.php?id=<?=$flower['flowerID']?>">Readmore</a></p>
                            
                                    </div>
                                    
                                        
                                </div>
                                <div class="action d-flex justify-content-end">
                                            <a href="edit_flower.php?id=<?= $flower['flowerID'] ?>" class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></a>
                                            <a href="delet_book.php?id=<?= $flower['flowerID'] ?>"  style="background:#e84393"class="btn  btn-sm"><i class="fa fa-trash "></i></i></a>
                                        
                                </div>
                            
                                
                        
                        </div>
                        <?php endforeach; ?>
                </div>
            
        </div>
    </div>
</section>


