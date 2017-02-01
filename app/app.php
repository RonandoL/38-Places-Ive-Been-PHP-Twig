<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/places.php";

    session_start();
    if (empty($_SESSION['xxxxx'])) {
        $_SESSION['xxxxx'] = xxxxx;
    }

    $app = new Silex\Application();

    $app->get("/", function() {

        xxxx .= "
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
        ";

        if (!empty($all_tasks)) {         // 4. IF array of tasks is NOT empty
            foreach ($all_tasks as $task) {
                xxxxx .= "
                    xxxxx
              ";
            }
        }
        xxxxx .= "
                    xxxxx


                  </div> <!-- .col-md-4 -->
                </div> <!-- .row -->
              </div> <!-- .container -->
            </body>
          </html>
        ";

    return xxxxx;
    });

    $app->post("/tasks", function() {   // 5. New Route to confirmation page
        xxxxxxxxxx
        xxxxx

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
                <h1>Your new task</h1>
                <div class='row'>
                  <div class='col-md-4'>"

                      "</div> <!-- .col-md-4 -->
                    </div> <!-- .row -->
                  </div> <!-- .container -->
                </body>
              </html>
              ";
    });

    $app->post('/', function() {
        xxxxxxxxxx

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


    xxxxxxxxxx;

?>
