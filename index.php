<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

    // Start seesion
    session_start();
    // Turn on error reporting
    ini_set('display_error', 1);
    error_reporting(E_ALL);

    //require autoload file
    require_once ('vendor/autoload.php');

    // create an instance of the base class
    $f3 = Base::instance();

    // Turn on Fat-free error reporting
    $f3->set('DEBUG', 3);

    // define a default route
    $f3->route('GET /', function($f3)
    {
        //Set a F3 variable
        $f3->set('title', 'Practicing with Templates');
        $f3->set('temp', 67);
        $f3->set('radius', 10);

        $fruits = ['apple', 'orange', 'banana'];
        $f3->set('fruits', $fruits);

        $bookmarks = ['reddit', 'google', 'youtube'];
        $f3->set('bookmarks', $bookmarks);

        $bookmarks2 = ['reddit'=>'http://reddit.com', 'google'=>'http://google.com', 'youtube'=>'http://youtube.com'];
        $f3->set('bookmarks2', $bookmarks2);

        $view = new Template();
        echo $view->render("views/info.html");
    });

    // Run Fat-Free
    $f3->run();
