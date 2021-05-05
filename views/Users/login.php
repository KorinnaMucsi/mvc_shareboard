<div class="col-6 offset-3">
    <div class="card p-0 mt-5">
        <div class="card-header">
            Login User
        </div>
        <div class="card-body">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <input type="submit" value="Save" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
