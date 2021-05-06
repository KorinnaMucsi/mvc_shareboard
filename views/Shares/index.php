<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-success mt-5">Share Something</a>
    <?php endif; ?>
    <?php foreach($viewmodel as $item): ?>
    <div class="list-group">
        <div class="list-group-item list-group-item-action p-4 mt-5" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php echo $item['title'] ?></h5>
                <small><?php echo $item['create_date'] ?></small>
            </div>
            <p class="mb-1"><?php echo $item['body'] ?></p>
            <small><a class="btn btn-warning" href="<?php echo $item['link'] ?>">Go To Website</a></small>
        </div>
    </div>
    <?php endforeach; ?>
</div>