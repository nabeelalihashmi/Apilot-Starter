<?php return array (
  0 => 
  array (
    'method' => 'GET',
    'url' => '/hello',
    'callback' => './custom_cockpit/say_hello.php',
    'before' => false,
    'after' => false,
  ),
  1 => 
  array (
    'method' => 'GET',
    'url' => '/list/:what?/:order?',
    'callback' => './cockpit/list/:what?:order?.php',
    'before' => false,
    'after' => false,
  ),
  2 => 
  array (
    'method' => 'GET',
    'url' => '/about/:who?/:how?',
    'callback' => './cockpit/about:who?:how?.php',
    'before' => false,
    'after' => false,
  ),
  3 => 
  array (
    'method' => 'GET',
    'url' => '/list/:what?',
    'callback' => './cockpit/list/:what?:order?.php',
    'before' => false,
    'after' => false,
  ),
  4 => 
  array (
    'method' => 'GET',
    'url' => '/about/:who?',
    'callback' => './cockpit/about:who?:how?.php',
    'before' => false,
    'after' => false,
  ),
  5 => 
  array (
    'method' => 'GET',
    'url' => '/user/:id',
    'callback' => './cockpit/user/:id.php',
    'before' => true,
    'after' => true,
  ),
  6 => 
  array (
    'method' => 'GET',
    'url' => '/about',
    'callback' => './cockpit/about:who?:how?.php',
    'before' => false,
    'after' => false,
  ),
  7 => 
  array (
    'method' => 'GET',
    'url' => '/list',
    'callback' => './cockpit/list/:what?:order?.php',
    'before' => false,
    'after' => false,
  ),
  8 => 
  array (
    'method' => 'GET',
    'url' => '/:id',
    'callback' => './cockpit/:id.php',
    'before' => false,
    'after' => false,
  ),
  9 => 
  array (
    'method' => 'GET',
    'url' => '/',
    'callback' => './cockpit/index.php',
    'before' => false,
    'after' => false,
  ),
  10 => 
  array (
    'method' => 'POST',
    'url' => '/',
    'callback' => './cockpit/index.php',
    'before' => false,
    'after' => false,
  ),
);