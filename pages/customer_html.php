<br><br><br><br><br>
<!-- about section ends -->
 <!-- prodcuts section starts  -->
<section class="products" id="products">

        <h1 class="heading"> latest <span>products</span> </h1>
        <form class="example" action="" method="post">
        <input type="text"placeholder="Search by title" name = "search">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="container p-4">
                <div class="d-flex justify-content-end p-2">
                <a href="create_customer.php" class="btn btn-primary">Add +</a>
            </div>
        <div class="box-container">
            <?php
                        require_once('database/database.php');
                        $customers = "";
                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            //search//
                            $customers = searchByName($_POST);
                        }else{
                            $customers = selectAllCustomers();
                        }
                        foreach($customers as $customer):
                        ?>
            
                        <div class="box">
                            <span class="discount"><?= $customer['address']?></span>
                            <div class="image">
                                <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" width="200" height="50" alt="">
                                
                            </div>
                            <div class="content">
                                <h3><?= $customer['name']?></h3>
                                <div class="price"><?= $customer['phoneNumber']?></div>
                                <a href="edit_customer.php?id=<?= $customer['customerID'] ?>" class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></a>
                                <a href="delet_customer.php?id=<?= $customer['customerID'] ?>"  style="background:#e84393"class="btn  btn-sm"><i class="fa fa-trash "></i></i></a>
                                        
                            </div>
                        </div>

            

           
            
            
            <?php endforeach; ?>
    </div>

</section>

<!-- prodcuts section ends -->
