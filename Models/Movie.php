<!-- 
- è definita una classe Movie
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà
 -->

<?php
class Movie{

  public $title;
  public $director;
  public $year;
  public $genres;
  public $poster;

  /**
   * @param String $title;
   * @param String $director;
   * @param Number $year;
   * @param Genres $genres;
  */

  public function __construct($_title, $_director, $_year, Genres $_genres)
    {
    $this->title=$_title;
    $this->director=$_director;
    $this->year=$_year;
    $this->genres=$_genres;
    }

  public function setPoster($_poster)
    {
      $this->poster = $_poster;
    }

  public function getPoster()
    {
      $placeholder = 'http://www.theprintworks.com/wp-content/themes/psBella/assets/img/film-poster-placeholder.png';

      if ($this->poster) {
          return $this->poster;
      }
      return $placeholder;
    }
}