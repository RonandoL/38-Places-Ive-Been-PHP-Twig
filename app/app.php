<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/places.php";

    session_start();      // For global variable, saving Array of all places in browser cache
    if (empty($_SESSION['array_of_places'])) {
        $_SESSION['array_of_places'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));                   // Tells the project that the Twig files exist
  // End Red Tape

  // 1. Route to home page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('places.html.twig', array('places' => Place::getAll()));
    });

    $app->post("/places", function() {   // 5. New Route to confirmation page
        // xxxxxxxxxx
        // xxxxx


    });

    $app->post('/', function() {
        // xxxxxxxxxx

        return "
          <!DOCTYPE html>
          <html>
            <head>
              <meta charset='utf-8'>
              <title>Tasks: To Do List</title>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            </head>

            <body>
              <div class='container'>
                <h1>Tasks: To Do List</h1>
                <div class='row'>
                  <div class='col-md-4'>


                  </div>  <!-- .col-md-4 -->
                </div>  <!-- .row -->
              </div>  <!-- .container -->
            </body>
          </html>
        ";
    });


    return $app;

?>
