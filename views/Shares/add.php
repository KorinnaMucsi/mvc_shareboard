<div class="card p-0 mt-5">
    <div class="card-header">
        Share Something
    </div>
    <div class="card-body">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body:</label>
                <textarea name="body" id="body" cols="30" rows="5" name="body" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link:</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <input type="submit" value="Save" name="submit" class="btn btn-primary">
            <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>