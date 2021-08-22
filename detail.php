
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Readmore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];
            $flowers = selectOneFlowers($id);
            foreach ($flowers as $flower):
            $description = readMore($flower['description'], 20);
        ?>
        <div class="card mb-2">
            <div class="card-body bg-danger text-white">
                <h1 class="display-2"><?= $flower['name'] ?></h1>
                <p><?= $flower['description'] ?></p>
               
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>