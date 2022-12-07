<?php
if (is_file('../debugger.php')) {
  include '../debugger.php';
}

require_once 'db.php';

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
      height:70%;
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
        <div class="card mx-2 p-0" style="width: 18rem;">
          <img src="<?php echo $movie->getPoster() ?>" class="card-img-top p-0" alt="<?php echo $movie->title ?>">
          <div class="card-body text-center">
            <h4 class="card-title"><?php echo $movie->title ?></h4>
            <h6><?php echo $movie->director ?></h6>
            <p class="card-text"><?php echo $movie->year ?> || Genre: <?php echo $movie->genres?->genre1 ?>
            <?php if($movie->genres?->genre2): ?>, 
              <?php echo $movie->genres?->genre2 .', ' ?? '' ?>
              <?php echo $movie->genres?->genre3 ?? '' ?>
            <?php endif; ?>
          </p>
            
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>

</body>
</html>