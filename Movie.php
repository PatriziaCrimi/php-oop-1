<?php
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
?>
