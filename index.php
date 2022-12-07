<?php
if (is_file('../debugger.php')) {
  include '../debugger.php';
}

include_once './Models/Movie.php';

$movie1 = new Movie("Shining", "S. Kubrik", 1980, "Horror");
$movie1->setPoster("https://product-image.juniqe-production.juniqe.com/media/catalog/product/seo-cache/x800/171/230/171-230-101P/The-Shining-Retro-Movie-Poster-Vintage-Photography-Archive-Poster.jpg");

$movie2=new Movie("The Mask", "C. Russell", 1994, "Comedy");
$movie2->setPoster("https://upload.wikimedia.org/wikipedia/en/thumb/4/4b/The_Mask_%28film%29_poster.jpg/220px-The_Mask_%28film%29_poster.jpg");

$movie3=new Movie("Léon", "L. Besson", 1994, "Action");

$moviesList=[$movie1, $movie2, $movie3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>Movies-Classes</title>
  <style>
    body{
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    h1{
      text-align: center;
      margin:20px;
    }
    img{
      width:100%;
      height:100%;
      object-fit: cover;
      object-position:center;
    }
  </style>
</head>
<body>
  <h1>Movies</h1>
  <div class="dc-cont">
    <div class="container-fluid">
      <div class="row">

      <?php foreach($moviesList as $movie) : ?>
        <div class="card mx-2" style="width: 18rem;">
          <img src="<?php echo $movie->getPoster() ?>" class="card-img-top" alt="<?php echo $movie->title ?>">
          <div class="card-body text-center">
            <h4 class="card-title"><?php echo $movie->title ?></h4>
            <h6><?php echo $movie->director ?></h6>
            <p class="card-text"><?php echo $movie->year ?> || Genre: <?php echo $movie->genre ?></p>
            
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>

</body>
</html>