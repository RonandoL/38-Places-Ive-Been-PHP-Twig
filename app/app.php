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

  // 2. POST Route to Confirmation page with newly added Place
    $app->post("/places", function() use ($app) {
        $place = new Place($_POST['place']);     // Instantiation of new Place object
        $save = $place->save();                  // Saving the new place object

        return $app['twig']->render('new_place.html.twig', array('newplace' => $place));
    });

  // 3. POST Route to confirm Deletion of all places, before going to home page
    $app->post("/delete", function() use ($app) {
        Place::deleteAll();
        return $app['twig']->render('delete_place.html.twig');
    });


    return $app;

?>
