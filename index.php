<?php
  /* ASSIGNMENT
    è definita una classe ‘Movie’
      => all'interno della classe sono dichiarate delle variabili d'istanza
      => all'interno della classe è definito un costruttore
      => all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’
    e stampati a schermo i valori delle relative proprietà
  */
  require 'Movie.php';
  require 'movies.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Object-oriented programming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="action.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <h1>MOVIES DATABASE</h1>
        <h2>Movies list</h2>
        <div class="cards-wrapper">
          <!-- Inception -->
          <div class="movie-card">
            <h3>
              <?php
                echo($inception->original_title);
              ?>
            </h3>
            <ul class="movie-info">
              <li>
                Italian title:
                <span>
                  <?php
                    echo($inception->italian_title);
                  ?>
                </span>
              </li>
              <li>
                Director:
                <span>
                  <?php
                    echo($inception->director);
                  ?>
                </span>
              </li>
              <li>
                Release Year:
                <span>
                  <?php
                    echo($inception->release_year);
                  ?>
                </span>
              </li>
              <li class="vote">
                Vote:
                <span>
                  <?php
                    if ($inception->vote) {
                      echo($inception->vote);
                    } else {
                      echo('n/a');
                    }
                  ?>
                </span>
              </li>
              <li class="plot">
                <span class="show">Read plot</span>
                <span class="hide">Read less</span>
                <div class="plot-text">
                  <?php
                    if ($inception->plot) {
                      echo($inception->plot);
                    } else { ?>
                        <p class="text-center">
                          Plot:
                          <span>n/a</span>
                        </p>
                      <?php
                    }
                  ?>
                </div>
              </li>
              <?php
                if ($inception->new_release) { ?>
                  <li class="release-info">
                    <?php echo('New release!'); ?>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <!-- Suicide Squad 2 -->
          <div class="movie-card">
            <h3>
              <?php
                echo($suicide_squad_2->original_title);
              ?>
            </h3>
            <ul class="movie-info">
              <li>
                Italian title:
                <span>
                  <?php
                    echo($suicide_squad_2->italian_title);
                  ?>
                </span>
              </li>
              <li>
                Director:
                <span>
                  <?php
                    echo($suicide_squad_2->director);
                  ?>
                </span>
              </li>
              <li>
                Release Year:
                <span>
                  <?php
                    echo($suicide_squad_2->release_year);
                  ?>
                </span>
              </li>
              <li class="vote">
                Vote:
                <span>
                  <?php
                    if ($suicide_squad_2->vote) {
                      echo($suicide_squad_2->vote);
                    } else {
                      echo('n/a');
                    }
                  ?>
                </span>
              </li>
              <li class="plot">
                <span class="show">Read plot</span>
                <span class="hide">Read less</span>
                <div class="plot-text">
                  <?php
                    if ($suicide_squad_2->plot) {
                      echo($suicide_squad_2->plot);
                    } else { ?>
                        <p class="text-center">
                          Plot:
                          <span>n/a</span>
                        </p>
                      <?php
                    }
                  ?>
                </div>
              </li>
              <?php
                if ($suicide_squad_2->new_release) { ?>
                  <li class="release-info">
                    <?php echo('New release!'); ?>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <!-- Dead Poets Society -->
          <div class="movie-card">
            <h3>
              <?php
                echo($dead_poets_society->original_title);
              ?>
            </h3>
            <ul class="movie-info">
              <li>
                Italian title:
                <span>
                  <?php
                    echo($dead_poets_society->italian_title);
                  ?>
                </span>
              </li>
              <li>
                Director:
                <span>
                  <?php
                    echo($dead_poets_society->director);
                  ?>
                </span>
              </li>
              <li>
                Release Year:
                <span>
                  <?php
                    echo($dead_poets_society->release_year);
                  ?>
                </span>
              </li>
              <li class="vote">
                Vote:
                <span>
                  <?php
                    if ($dead_poets_society->vote) {
                      echo($dead_poets_society->vote);
                    } else {
                      echo('n/a');
                    }
                  ?>
                </span>
              </li>
              <li class="plot">
                <span class="show">Read plot</span>
                <span class="hide">Read less</span>
                <div class="plot-text">
                  <?php
                    if ($dead_poets_society->plot) {
                      echo($dead_poets_society->plot);
                    } else { ?>
                        <p class="text-center">
                          Plot:
                          <span>n/a</span>
                        </p>
                      <?php
                    }
                  ?>
                </div>
              </li>
              <?php
                if ($dead_poets_society->new_release) { ?>
                  <li class="release-info">
                    <?php echo('New release!'); ?>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <!-- The Last Samurai -->
          <div class="movie-card">
            <h3>
              <?php
                echo($the_last_samurai->original_title);
              ?>
            </h3>
            <ul class="movie-info">
              <li>
                Italian title:
                <span>
                  <?php
                    echo($the_last_samurai->italian_title);
                  ?>
                </span>
              </li>
              <li>
                Director:
                <span>
                  <?php
                    echo($the_last_samurai->director);
                  ?>
                </span>
              </li>
              <li>
                Release Year:
                <span>
                  <?php
                    echo($the_last_samurai->release_year);
                  ?>
                </span>
              </li>
              <li class="vote">
                Vote:
                <span>
                  <?php
                    if ($the_last_samurai->vote) {
                      echo($the_last_samurai->vote);
                    } else {
                      echo('n/a');
                    }
                  ?>
                </span>
              </li>
              <li class="plot">
                <span class="show">Read plot</span>
                <span class="hide">Read less</span>
                <div class="plot-text">
                  <?php
                    if ($the_last_samurai->plot) {
                      echo($the_last_samurai->plot);
                    } else { ?>
                        <p class="text-center">
                          Plot:
                          <span>n/a</span>
                        </p>
                      <?php
                    }
                  ?>
                </div>
              </li>
              <?php
                if ($the_last_samurai->new_release) { ?>
                  <li class="release-info">
                    <?php echo('New release!'); ?>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </div>
          <!-- Cinderella -->
          <div class="movie-card">
            <h3>
              <?php
                echo($cinderella->original_title);
              ?>
            </h3>
            <ul class="movie-info">
              <li>
                Italian title:
                <span>
                  <?php
                    echo($cinderella->italian_title);
                  ?>
                </span>
              </li>
              <li>
                Director:
                <span>
                  <?php
                    echo($cinderella->director);
                  ?>
                </span>
              </li>
              <li>
                Release Year:
                <span>
                  <?php
                    echo($cinderella->release_year);
                  ?>
                </span>
              </li>
              <li class="vote">
                Vote:
                <span>
                  <?php
                    if ($cinderella->vote) {
                      echo($cinderella->vote);
                    } else {
                      echo('n/a');
                    }
                  ?>
                </span>
              </li>
              <li class="plot">
                <span class="show">Read plot</span>
                <span class="hide">Read less</span>
                <div class="plot-text">
                  <?php
                    if ($cinderella->plot) {
                      echo($cinderella->plot);
                    } else { ?>
                        <p class="text-center">
                          Plot:
                          <span>n/a</span>
                        </p>
                      <?php
                    }
                  ?>
                </div>
              </li>
              <?php
                if ($cinderella->new_release) { ?>
                  <li class="release-info">
                    <?php echo('New release!'); ?>
                  </li>
                  <?php
                }
              ?>
            </ul>
          </div>
        </div> <!-- Closing cards-wrapper -->
      </div>  <!-- Closing container -->
    </div>  <!-- Closing page-wrapper -->
  </body>
</html>
