<?php
  function crypto($value) {

    $real = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z"];
    
    $fake = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z","9","8","7","6","5","4","3","2","1","0","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    

    $ecryptedValue = array();
    
    $keys = str_split($value);
    
    foreach ($keys as $value) {
        $key = array_search($value, $real);
        array_push($ecryptedValue, $fake[$key]);
    }
    
    return implode($ecryptedValue);
  }
  
?>