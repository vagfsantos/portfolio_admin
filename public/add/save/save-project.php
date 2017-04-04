<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/connection.php"; ?>

<?php

$form_submit = $_POST['submit'] ? $_POST['submit'] : null;

// if it wasn't sent by a form
if( !$form_submit ){
    echo "Está página requer que dados sejam enviados via formulário";
    exit;
}


// form data validation


// insert query
$query = 'INSERT INTO projects';
$query .= ' ()';


?>