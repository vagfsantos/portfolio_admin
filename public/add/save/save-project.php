<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/connection.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/session.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/functions.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/validation_utils.php"; ?>

<?php

$all_data = get_all_post_vars();
$form_submit = $all_data['submit'];

// if it wasn't sent by a form
if( !$form_submit ){
    echo "Está página requer que dados sejam enviados via formulário";
    exit;
}

// ## CATCHING DATA
// Form data storage
//$title = getPostVar('title');
//$type = getPostVar('type');
//$description = getPostVar('description');
//$img_thumb_url = getPostVar('thumb_url');
//$img_large_url = getPostVar('large_url');
//$model = getPostVar('model');
//$time_year = getPostVar('year');
//$site_url = getPostVar('site_url');
//$code_url = getPostVar('code_url');
//$work_done = getPostVar('work_done');
//$copyright = getPostVar('copyright');
//$copyright_url = getPostVar('copyright_url');

// ## FORM VALIDATION
// required values
validate_required_fields($all_data);

// verify year
validate_is_year($all_data['time_year']);

 # REDIRECT
if( isset($_SESSION['errors']) ){
    redirect_to('../project.php');
}

// ## ESCAPING ALL VALUES
// escape for insert into databases
$data = validate_prepare_to_database($all_data);

// insert query
$query = "INSERT INTO projects";
$query .= " (";
$query .= "title, type, description,";
$query .= "img_thumb_url, img_large_url,";
$query .= "model, time_year,";
$query .= "site_url, code_url,";
$query .= "work_done, copyright, copyright_url";
$query .= ") ";
$query .= "VALUES ";
$query .= "(";
$query .= "'{$data['title']}', '{$data['type']}', '{$data['description']}',";
$query .= "'{$data['img_thumb_url']}', '{$data['img_large_url']}',";
$query .= "'{$data['model']}', {$data['time_year']},";
$query .= "'{$data['site_url']}', '{$data['code_url']}',";
$query .= "'{$data['work_done']}', '{$data['copyright']}', '{$data['copyright_url']}'";
$query .= ");";


$inserted = mysqli_query($connection, $query);
if( $inserted ){
    echo "Done";
}else{
    echo "Fail";
}

?>