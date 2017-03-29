<?php

$app->router->add("", function () use ($app) {
    $app->view->add("me/header", ["title" => "Home"]);
    $app->view->add("me/navbar");
    $app->view->add("me/home");
    $app->view->add("me/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});

$app->router->add("about", function () use ($app) {
    $app->view->add("me/header", ["title" => "Home"]);
    $app->view->add("me/navbar");
    $app->view->add("me/about");
    $app->view->add("me/footer");

    $app->response->setBody([$app->view, "render"])
                  ->send();
});
