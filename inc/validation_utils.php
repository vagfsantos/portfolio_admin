<?php

function getPostVar($name){
    return $_POST[$name] ? $_POST[$name] : '';
}

?>