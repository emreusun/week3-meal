<?php

spl_autoload_register(function($class ) {
    require_once '../includes/classes/' . $class . '.php';

});


require_once '../includes/classes/Meal.php';

$appterizer = new Appetizer();
$mainDish = new MainDish();
$dessert = new Dessert();

// echo $appterizer->eat();
// echo $mainDish->eat();
// correct 
 $myMeal = new Meal($appterizer, $mainDish, $dessert);
 echo $myMeal->eat();

// wrong
// $myMeal = new Meal($dessert, $appterizer, $mainDish);

var_dump($myMeal);

die;