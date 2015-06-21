<?php

header('Content-Type: text/xml'); 
echo '<?xml version="1.0" encoding="UTF-8" standalone="no" ?>';

echo '<response>'; 
    $food = strtolower($_GET['food']);
    $foodArray = array('mexican', 'italian', 'salad', 'american', 'sushi', 'pho'); 
        if($food == 'mexican'){
            echo 'Las Cuatro Milpas in Barrio Logan is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'italian') {
            echo 'Buca di Beppo in San Diego is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'salad') {
            echo 'Souplantation in Vista is an excellent '.$food.' restaurant';
        } elseif($food == 'american') {
            echo 'In-N-Out is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'sushi') {
            echo 'LoveBoat Sushi in San Marcos is an excellent '.ucfirst($food).' restaurant';
        } elseif($food == 'pho') {
            echo 'Pho-Ever in Vista is an excellent '.ucfirst($food).' restaurant';
        } elseif ($food =='') {
            echo 'Choose a genre of food.'; 
        } else
            echo 'We have great suggestions for Mexican, Italian, Salad, American, Sushi, and Pho'; 
   
echo'</response>'; 

/*
echo '<response>';
    $food = $_GET['food']; 
    $foodArray = array('Mexican', 'Italian', 'salad', 'American', 'Sushi', 'Pho');
    if(in_array($food, $foodArray)){
        echo 'We have some great suggestions for '.$food.'!';
    } elseif($food==''){
        echo 'Enter in a type of food!';
    }else {
        echo 'Sorry, we do not have any suggestions for you';
    }
echo '</response>';
*/

?>
