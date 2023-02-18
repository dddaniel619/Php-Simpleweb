<?php
    include "blog.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>


        <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container mt-5 main">
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-danger" role="alert">
                Post Added
            </div>
            <?php }else if($_REQUEST['info'] == "updated") { ?>
                <div class="alert alert-danger" role="alert">
                Post Updated
            </div>
            <?php }else if($_REQUEST['info'] == "deleted") { ?>
                <div class="alert alert-danger" role="alert">
                Post Deleted
            </div>
            <?php }?>
        <?php }?>

        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark bg-secondary">Create Blog</a>
        </div>
    </div>
        
<?php foreach($query as $q) {?>
    <div class="col-4 d-flex justify-content-center align-item-center">
        <div class="card text-black bg-info mt-5">
            <div class="card-body" style="width: 50rem">
              
                    <h5 class="card-title"><?php echo $q['title']?></h5>
                    <p class="card-text"><?php echo $q['content']?></p>
                    <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-primary">Read more <span class="text-danger"></span></a>
        
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>