<?php
/* ASSIGNMENT
  è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
  vengono istanziati almeno due oggetti ‘Movie’
  e stampati a schermo i valori delle relative proprietà
*/

// VARIABLES AND CONSTANTS INITIALIZATION
$current_year = 2021;

// CLASS CREATION
class Movie {
  // INSTANCE VARIABLES
  public $original_title;
  public $italian_title;
  public $original_language;
  public $director;
  public $lead_actor;
  public $film_composer;
  public $film_distributor;
  public $release_year;
  public $running_time;
  public $new_release;

  // GETTER FUNCTION
  public function getRelease() {
    return $this->release_year;
  }

  // SETTER FUNCTION
  public function setNewRelease($release_year) {
    if($release_year >= $current_year) {
      $this->new_release = true;
    } else {
      $this->new_release = false;
    }
  }
}
// INSTANCES CREATION
$inception = new Movie();
  $inception->original_title = 'Inception';
  $inception->italian_title = 'Inception';
  $inception->original_language = 'English';
  $inception->director = 'Christopher Nolan';
  $inception->lead_actor = 'Leonardo Di Caprio';
  $inception->film_composer = 'Hans Zimmer';
  $inception->film_distributor = 'Warner Bros. Pictures';
  $inception->release_year = '2010';
  $inception->running_time = '148 minutes';
  $inception->new_release;

$dead_poets_society = new Movie();
  $dead_poets_society->original_title = 'Dead Poets Society';
  $dead_poets_society->italian_title = 'L\'Attimo Fuggente';
  $dead_poets_society->original_language = 'English';
  $dead_poets_society->director = 'Peter Weir';
  $dead_poets_society->lead_actor = 'Robin Williams';
  $dead_poets_society->film_composer = 'Maurice Jarre';
  $dead_poets_society->film_distributor = 'Buena Vista Pictures Distribution';
  $dead_poets_society->release_year = '1989';
  $dead_poets_society->running_time = '129 minutes';
  $dead_poets_society->new_release;

$the_last_samurai = new Movie();
  $the_last_samurai->original_title = 'The Last Samurai';
  $the_last_samurai->italian_title = 'L\'Ultimo Samurai';
  $the_last_samurai->original_language = 'English';
  $the_last_samurai->director = 'Edward Zwick';
  $the_last_samurai->lead_actor = 'Tom Cruise';
  $the_last_samurai->film_composer = 'Hans Zimmer';
  $the_last_samurai->film_distributor = 'Warner Bros. Pictures';
  $the_last_samurai->release_year = '2003';
  $the_last_samurai->running_time = '154 minutes';
  $the_last_samurai->new_release;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Object-oriented programming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <h1>prova titolo</h1>
        <h2>prova sottotitolo</h2>
        <?php
        echo('prova');
        ?>
      </div>
    </div>
  </body>
</html>
