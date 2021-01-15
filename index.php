<?php
/* ASSIGNMENT
  è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
  vengono istanziati almeno due oggetti ‘Movie’
  e stampati a schermo i valori delle relative proprietà
*/

// CLASS CREATION
class Movie {
  // INSTANCE VARIABLES INTIALIZATION
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


  // ------------------------------ CONSTRUCTOR ------------------------------

  function __construct($_original_title, $_release_year) {
    $this->original_title = $_original_title;
    $this->release_year = $_release_year;
  }

  // ------------------------------ METHODS ------------------------------

  // GETTER FUNCTION
  public function getRelease() {
    return $this->release_year;
  }

  // SETTER FUNCTION
  public function setNewRelease($release_year) {
    $current_year = 2021;
    if($release_year >= $current_year) {
      $this->new_release = true;
    } else {
      $this->new_release = false;
    }
  }
}
// INSTANCES (OR OBJECTS) CREATION
$inception = new Movie('Inception', 2010);
  $inception->italian_title = 'Inception';
  $inception->original_language = 'English';
  $inception->director = 'Christopher Nolan';
  $inception->lead_actor = 'Leonardo Di Caprio';
  $inception->film_composer = 'Hans Zimmer';
  $inception->film_distributor = 'Warner Bros. Pictures';
  $inception->running_time = '148 minutes';

$dead_poets_society = new Movie('Dead Poets Society', 1989);
  $dead_poets_society->italian_title = 'L\'Attimo Fuggente';
  $dead_poets_society->original_language = 'English';
  $dead_poets_society->director = 'Peter Weir';
  $dead_poets_society->lead_actor = 'Robin Williams';
  $dead_poets_society->film_composer = 'Maurice Jarre';
  $dead_poets_society->film_distributor = 'Buena Vista Pictures Distribution';
  $dead_poets_society->running_time = '129 minutes';

$the_last_samurai = new Movie('The Last Samurai', 2003);
  $the_last_samurai->italian_title = 'L\'Ultimo Samurai';
  $the_last_samurai->original_language = 'English';
  $the_last_samurai->director = 'Edward Zwick';
  $the_last_samurai->lead_actor = 'Tom Cruise';
  $the_last_samurai->film_composer = 'Hans Zimmer';
  $the_last_samurai->film_distributor = 'Warner Bros. Pictures';
  $the_last_samurai->running_time = '154 minutes';

$suicide_squad_2 = new Movie('Suicide Squad 2', 2021);
  $suicide_squad_2->italian_title = 'Suicide Squad 2';
  $suicide_squad_2->original_language = 'English';
  $suicide_squad_2->director = 'James Gunn';
  $suicide_squad_2->lead_actor = 'Jared Leto';
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
        <h1>MOVIE DATABASE</h1>
        <h2>Movies list</h2>
        <ul>
          <!-- Inception -->
          <li>
            <h3>
              <?php
              echo($inception->original_title);
              ?>
            </h3>
            <p>Director:
              <span>
                <?php
                echo($inception->director);
                ?>
              </span>
            </p>
            <p>Release Year:
              <span>
                <?php
                echo($inception->release_year);
                ?>
              </span>
            </p>
            <p>New Release:
              <span>
                <?php
                // setNewRelease($inception->release_year);
                echo($inception->new_release);
                ?>
              </span>
            </p>
          </li>
          <!-- Dead Poets Society -->
          <li>
            <h3>
              <?php
              echo($dead_poets_society->original_title);
              ?>
            </h3>
            <p>Director:
              <span>
                <?php
                echo($dead_poets_society->director);
                ?>
              </span>
            </p>
            <p>Release Year:
              <span>
                <?php
                echo($dead_poets_society->release_year);
                ?>
              </span>
            </p>
            <p>New Release:
              <span>
                <?php
                echo($dead_poets_society->new_release);
                ?>
              </span>
            </p>
          </li>
          <!-- The Last Samurai -->
          <li>
            <h3>
              <?php
              echo($the_last_samurai->original_title);
              ?>
            </h3>
            <p>Director:
              <span>
                <?php
                echo($the_last_samurai->director);
                ?>
              </span>
            </p>
            <p>Release Year:
              <span>
                <?php
                echo($the_last_samurai->release_year);
                ?>
              </span>
            </p>
            <p>New Release:
              <span>
                <?php
                echo($the_last_samurai->new_release);
                ?>
              </span>
            </p>
          </li>
          <!-- Suicide Squad 2 -->
          <li>
            <h3>
              <?php
              echo($suicide_squad_2->original_title);
              ?>
            </h3>
            <p>Director:
              <span>
                <?php
                echo($suicide_squad_2->director);
                ?>
              </span>
            </p>
            <p>Release Year:
              <span>
                <?php
                echo($suicide_squad_2->release_year);
                ?>
              </span>
            </p>
            <p>New Release:
              <span>
                <?php
                echo($suicide_squad_2->new_release);
                ?>
              </span>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
