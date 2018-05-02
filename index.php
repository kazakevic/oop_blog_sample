<?php
require("vendor/autoload.php");
use Models\Helpers\Page;
use Models\Post;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-4">

            <form action="store_post.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

               <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" id="author">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <?php Page::getFlashMessages(); ?>
            </div>

            <div class="col-md-6">
            <?php
            $post = new Post;
            foreach($post->getAllPosts() as $post ): ?>

            <div class="card">
            <h5 class="card-header"><?php echo $post['title'] ?></h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><?php echo $post['content'] ?></p>
               <small>Created at: [<?php echo $post['created_at'] ?>] by <?php echo $post['author'] ?> </small>
            </div>
            </div>
            <br>

            <?php endforeach; ?>
            </div>
        </div>
    </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>


