<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/layout/header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/connection.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/session.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/functions.php"; ?>



<?php

$is_edit_mode = get_get_var('edit');

if( $is_edit_mode ){
    $query = "SELECT * FROM projects";
    
    $results = mysqli_query($connection, $query);
    while( $data = mysqli_fetch_assoc($results) ){
        foreach( $data as $field => $value ){
            echo "{$field} ====== {$value}";
            echo "<br>";
        }
        
        echo "<br>";
        echo "<br>";
    }
}
?>



<div class="col-md-6 col-md-offset-3">
    <?php // check if exists errors to display ?>
    <?php if( has_errors() ) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo display_errors(); ?>  
    </div>
    <?php flush_data_from('errors'); ?>
    <?php endif; ?>

    <form method="post" action="save/save-project.php">
        <div class="form-group">
            <label for="title">Project Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Project Title">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="type" class="form-control">
                <option value="professional">professional</option>
                <option value="experimental">experimental</option>
                <option value="participated">participated</option>
                <option value="contributed">contributed</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Project Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Project Description"></textarea>
        </div>

        <div class="form-group">
            <label for="img_thumb_url">Thumb Url</label>
            <input name="img_thumb_url" type="text" class="form-control" id="img_thumb_url" placeholder="Thumb Url">
        </div>

        <div class="form-group">
            <label for="img_large_url">Large Image Url</label>
            <input name="img_large_url" type="text" class="form-control" id="img_large_url" placeholder="Large Image Url">
        </div>

        <div class="form-group">
            <label for="model">Model</label>
            <input name="model" type="text" class="form-control" id="model" placeholder="Model">
        </div>

        <div class="form-group">
            <label for="time_year">Year</label>
            <input name="time_year" type="text" class="form-control" id="year" placeholder="dddd" value="<?php echo date('Y')?>">
        </div>

        <div class="form-group">
            <label for="site_url">Site URL</label>
            <input name="site_url" type="text" class="form-control" id="site_url" placeholder="Site URL">
        </div>

        <div class="form-group">
            <label for="code_url">Code URL</label>
            <input name="code_url" type="text" class="form-control" id="code_url" placeholder="Code URL">
        </div>

        <div class="form-group">
            <label for="work_done">What did I do?</label>
            <textarea name="work_done" class="form-control" id="work_done" placeholder="What did I do?"></textarea>
        </div>

        <div class="form-group">
            <label for="copyright">Copyright</label>
            <input name="copyright" type="text" class="form-control" id="copyright" placeholder="Copyright">
        </div>

        <div class="form-group">
            <label for="copyright_url">Copyright Reference</label>
            <input name="copyright_url" type="text" class="form-control" id="copyright_url" placeholder="Copyright Reference">
        </div>

        <input name="submit" type="submit" type="text" class="btn btn-default" value="submit">
    </form>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/layout/footer.php"; ?>