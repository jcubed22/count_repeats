<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('search_form.html.twig');
    });

    $app->get('/search_form', function() use ($app) {
        $my_RepeatCounter = new RepeatCounter;
        $keyword = $_GET['keyword'];
        $string = $_GET['search_string'];
        $repeat_count = $my_RepeatCounter->countRepeats($_GET['search_string'], $_GET['keyword']);
        return $app['twig']->render('results.html.twig', array('repeats' => $repeat_count, 'keyword' => $keyword, 'string' => $string));
    });

    return $app;
?>
