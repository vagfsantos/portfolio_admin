<?php

// get post datas
// return empty string or the post value
function getPostVar($name){
    return $_POST[$name] ? $_POST[$name] : '';
}

// check if existes empty required values
// returns null
function validate_required_fields($array){
    foreach( $array as $field => $key ){
        if( empty( $field[$key] ) ){
            $_SESSION['errors'][] = "The field {$field}, can't be empty";
        }
    }
}

?>