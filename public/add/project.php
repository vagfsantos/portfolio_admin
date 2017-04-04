<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/layout/header.php"; ?>

<div class="col-md-6 col-md-offset-3">
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
            <label for="thumb_url">Thumb Url</label>
            <input name="thumb_url" type="text" class="form-control" id="thumb_url" placeholder="Thumb Url">
        </div>

        <div class="form-group">
            <label for="large_url">Large Image Url</label>
            <input name="large_url" type="text" class="form-control" id="large_url" placeholder="Large Image Url">
        </div>
        
        <div class="form-group">
            <label for="model">Model</label>
            <input name="model" type="text" class="form-control" id="model" placeholder="Model">
        </div>
        
        <div class="form-group">
            <label for="year">Year</label>
            <input name="year" type="text" class="form-control" id="year" placeholder="dddd" value="<?php echo date('Y')?>">
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
            <textarea name="copyright" class="form-control" id="copyright" placeholder="Copyright"></textarea>
        </div>
        
        <div class="form-group">
            <label for="copyright_url">Copyright Reference</label>
            <textarea name="copyright_url" class="form-control" id="copyright_url" placeholder="Copyright Reference"></textarea>
        </div>

        <button name="submit" type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/portfolio/inc/layout/footer.php"; ?>