<?php
include_once './Models/Movie.php';
include_once './Models/Genres.php';

$movie1 = new Movie("Shining", "S. Kubrik", 1980, new Genres("Horror", "Thriller"));
$movie1->setPoster("https://product-image.juniqe-production.juniqe.com/media/catalog/product/seo-cache/x800/171/230/171-230-101P/The-Shining-Retro-Movie-Poster-Vintage-Photography-Archive-Poster.jpg");

$movie2=new Movie("The Mask", "C. Russell", 1994, new Genres("Comedy"));
$movie2->setPoster("https://upload.wikimedia.org/wikipedia/en/thumb/4/4b/The_Mask_%28film%29_poster.jpg/220px-The_Mask_%28film%29_poster.jpg");

$movie3=new Movie("Léon", "L. Besson", 1994, new Genres("Action", "Thriller", "Drama"));

$moviesList=[$movie1, $movie2, $movie3];
?>