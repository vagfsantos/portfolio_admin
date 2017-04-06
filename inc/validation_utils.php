<?php

$errors;

// display possibles errors
// returns html errors
function display_errors(){
    global $errors;
    $output = "<ul>";
    
    for( $i = count($errors) - 1; $i; $i-- ){
        $output .= "<li>{$errors[$i]}</li>";
    }
    
    $output .= "</ul>";
    
    return $output;
}

// get post datas
// return empty string or the post value
function getPostVar($name){
    return $_POST[$name] ? $_POST[$name] : '';
}

// check if existes empty required values
// returns null
function validate_required_fields($array){
    global $errors;
    
    foreach( $array as $field => $key ){
        if( empty( $field[$key] ) ){
            $errors[] = "The field {$field}, can't be empty";
        }
    }
}

?>