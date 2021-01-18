<?php
  /* ASSIGNMENT
    è definita una classe ‘Movie’
      => all'interno della classe sono dichiarate delle variabili d'istanza
      => all'interno della classe è definito un costruttore
      => all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’
    e stampati a schermo i valori delle relative proprietà
  */

  // VARIABLES & CONSTANTS INITIALIZATION
  $current_year = date('Y');

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
    public $vote;
    public $plot;
    public $new_release;


    // ------------------------------ CONSTRUCTOR ------------------------------

    function __construct($_original_title, $_director, $_release_year) {
      $this->original_title = $_original_title;
      $this->director = $_director;
      $this->release_year = $_release_year;
    }

    // ------------------------------ METHODS ------------------------------

    // GETTER FUNCTION
    public function getRelease() {
      return $this->release_year;
    }

    // SETTER FUNCTION
    public function setNewRelease($release_year, $this_year) {
      if($release_year >= $this_year) {
        $this->new_release = true;
      } else {
        $this->new_release = false;
      }
    }
  }
  // INSTANCES (OR OBJECTS) CREATION
  $inception = new Movie('Inception', 'Christopher Nolan', 2010);
    $inception->italian_title = 'Inception';
    $inception->original_language = 'English';
    $inception->lead_actor = 'Leonardo Di Caprio';
    $inception->film_composer = 'Hans Zimmer';
    $inception->film_distributor = 'Warner Bros. Pictures';
    $inception->running_time = '148 minutes';
    $inception->vote = 8.9;
    $inception->plot = 'Cobb a unique con artist can enter anyone\'s dreams and extract the most valuable ideas and secrets of people with the help of \'inception\' (a dream sharing technology) when the state of mind is at its vulnerable best. Cobbs ability has made him the face of corporate spying, hence a wanted man too.';
    $inception->setNewRelease($inception->release_year, $current_year);

  $suicide_squad_2 = new Movie('Suicide Squad 2', 'James Gunn', 2021);
    $suicide_squad_2->italian_title = 'Suicide Squad 2';
    $suicide_squad_2->original_language = 'English';
    $suicide_squad_2->lead_actor = 'Jared Leto';
    $suicide_squad_2->setNewRelease($suicide_squad_2->release_year, $current_year);

  $dead_poets_society = new Movie('Dead Poets Society', 'Peter Weir', 1989);
    $dead_poets_society->italian_title = 'L\'Attimo Fuggente';
    $dead_poets_society->original_language = 'English';
    $dead_poets_society->lead_actor = 'Robin Williams';
    $dead_poets_society->film_composer = 'Maurice Jarre';
    $dead_poets_society->film_distributor = 'Buena Vista Pictures Distribution';
    $dead_poets_society->running_time = '129 minutes';
    $dead_poets_society->vote = 9.9;
    $dead_poets_society->plot = 'Dead Poets Society is a 1989 American teen drama film written by Tom Schulman, directed by Peter Weir, and starring Robin Williams. Set in 1959 at the fictional elite conservative Vermont boarding school Welton Academy, it tells the story of an English teacher who inspires his students through his teaching of poetry.';
    $dead_poets_society->setNewRelease($dead_poets_society->release_year, $current_year);

  $the_last_samurai = new Movie('The Last Samurai', 'Edward Zwick', 2003);
    $the_last_samurai->italian_title = 'L\'Ultimo Samurai';
    $the_last_samurai->original_language = 'English';
    $the_last_samurai->lead_actor = 'Tom Cruise';
    $the_last_samurai->film_composer = 'Hans Zimmer';
    $the_last_samurai->film_distributor = 'Warner Bros. Pictures';
    $the_last_samurai->running_time = '154 minutes';
    $the_last_samurai->vote = 9.5;
    $the_last_samurai->plot = 'Will the last samurai find peace in his quest for redemption? Set in Japan during the 1870s, this movie tells the story of Captain Nathan Algren (Tom Cruise), a respected American military officer hired by the Emperor of Japan to train the country\'s first Army in the art of modern warfare.';
    $the_last_samurai->setNewRelease($the_last_samurai->release_year, $current_year);

  $cinderella = new Movie('Cinderella', 'Kay Cannon', 2021);
    $cinderella->italian_title = 'Cenerentola';
    $cinderella->original_language = 'English';
    $cinderella->lead_actor = 'Camila Cabello';
    $cinderella->setNewRelease($cinderella->release_year, $current_year);
?>
