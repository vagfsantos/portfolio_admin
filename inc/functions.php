<?php
// redirect to some page
// it requires a url as parameter
function redirect_to($url){
    header("Location: {$url}");
}

// check if there is any errors
// return true if so
function has_errors(){
    return isset($_SESSION['errors']);
} 

// display possibles errors
// returns html errors
function display_errors(){
    $output = "<ul>";

    for( $i = count($_SESSION['errors']) - 1; $i; $i-- ){
        $output .= "<li>{$_SESSION['errors'][$i]}</li>";
    }

    $output .= "</ul>";

    return $output;
}

// flush data from a $_SESSION
// it requires the field to empty

function flush_data_from($key){
    if( isset($_SESSION[$key]) ){
        $_SESSION[$key] = null;
    }
}

?>