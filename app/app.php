<?php
    require_once __DIR__."/../vendor/autolaod.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvicer(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('search_form.html.twig');
    });

    $app->get('/search_form', function() use ($app) {
        $my_RepeatCounter = new RepeatCounter;
        $repeat_count = $my_RepeatCounter->countRepeats($_GET['string'], $_GET['keyword']);
        return $app['twig']->render('results.html.twig', array('repeats' => $repeat_count));
    });

    return $app;
?>
