<?php

header('Content-Type: text/xml'); 
echo '<?xml version="1.0" encoding="UTF-8" standalone="no" ?>';

echo '<response>'; 
    $food = $_GET['food'];
    $foodArray = array('Mexican', 'Italian', 'Salad', 'American', 'Sushi', 'Pho'); 
        if($food == 'Mexican'){
            echo 'Las Cuatros Milpas is an excellent '.$food.' restaurant';
        } elseif($food == 'Italian') {
            echo 'Buca di Beppo is an excellent '.$food.' restaurant';
        } elseif($food == 'Salad') {
            echo 'Souplantation is an excellent '.$food.' restaurant';
        } elseif($food == 'American') {
            echo 'In-N-Out is an excellent '.$food.' restaurant';
        } elseif($food == 'Sushi') {
            echo 'LoveBoat Sushi is an excellent '.$food.' restaurant';
        } elseif($food == 'Pho') {
            echo 'Pho-Ever is an excellent '.$food.' restaurant';
        } elseif ($food =='') {
            echo 'Choose a genre of food, yo!'; 
        } else
            echo 'We have great suggestions for Mexican, Italian, Salad, American, Sushi, and Pho!'; 
   
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
