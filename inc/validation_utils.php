<?php
function get_all_post_vars(){
    $newArray = [];
    foreach( $_POST as $field => $value ){
        $newArray[$field] = $value ? $value : '';
    }
    
    return $newArray;
}

function validate_prepare_to_database($array){
    global $connection;
    $scapedArray = [];
    
    foreach( $array as $key => $val ){
        $scapedArray[$key] = mysqli_real_escape_string($connection, $val);
    }
    
    return $scapedArray;
}

// check if existes empty required values
// returns null
function validate_required_fields($array){
    foreach( $array as $key => $value ){
        if( empty( $array[$key] ) ){
            $_SESSION['errors'][] = "The field {$key}, can't be empty";
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