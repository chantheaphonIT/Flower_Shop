

    <div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
        <?php 
           require_once('database/database.php');
           $id = $_GET['id'];
           $flowers = selectOneFlowers($id);
           foreach ($flowers as $flower):
           $description = readMore($flower['description'], 200);
       ?>
          
         <div class="card m-2" style="background-color:pink;height:37%;magin-top:15%;flex: 1 1 30rem;
                                            box-shadow: 0 .5rem 0.5rem black;
                                            border-radius: .5rem;
                                            border: .1rem solid gray;
                                            position: relative;">                      
                               <div class="d-flex">
                                    <div class="card-image mr-4">
                                                <img class="img-fluid"src="<?= $flower['image']?>"  width="100"  height="100" alt=""><br><br>
                                                <h1 style='text-align: center;'><?= $flower['price'].'$'?></h1>
                                    </div>
                                </div>
                                <div class="info" >
                                            <h1 class="display-5" style="color:#e84393"><?= $flower['name']?></h1>
                                            <strong><?= $flower['dateTime']?></strong> 
                                            <hr>
                                            <p><?= $flower['description']?></p>
                                         
                                </div>
                                    
                                
        </div>
        <?php endforeach; ?>
    </div>

