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

// check if the input is in an year format
// returns true if so
function validate_is_year($input){
    $pattern = '/^\d{4}$/';
    $is_year = preg_match($pattern, $input, $matches, PREG_OFFSET_CAPTURE);
    if( !$is_year ) {
        $_SESSION['errors'][] = "The field year, Must follow the pattern 'dddd'";
    }
}
?>