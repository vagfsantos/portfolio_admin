<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/connection.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/validation_utils.php"; ?>

<?php

$form_submit = getPostVar('submit');

// if it wasn't sent by a form
if( !$form_submit ){
    echo "Está página requer que dados sejam enviados via formulário";
    exit;
}


// Form data storage
$title = getPostVar('title');
$type = getPostVar('type');
$description = getPostVar('description');
$thumb_url = getPostVar('thumb_url');
$large_url = getPostVar('large_url');
$model = getPostVar('model');
$year = getPostVar('year');
$site_url = getPostVar('site_url');
$code_url = getPostVar('code_url');
$work_done = getPostVar('work_done');
$copyright = getPostVar('copyright');
$copyright_url = getPostVar('copyright_url');


// Form data validation


// insert query
$query = 'INSERT INTO projects';
$query .= ' ()';


?>