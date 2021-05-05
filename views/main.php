<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link rel="stylesheet" href="/mvc/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/mvc/assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo ROOT_PATH; ?>">Shareboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_PATH; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_PATH; ?>shares">Shares</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <?php if(!isset($_SESSION['is_logged_in'])) : ?>
            <li>
                <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/login">Login</a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/register">Register</a>
            </li>
            <?php elseif(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true ) : ?>
            <li>
                <a class="nav-link" href="<?php echo ROOT_PATH; ?>">Welcome, <?php echo $_SESSION['user_data']['name']; ?></a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/logout">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php require_once($view); ?>   
        </div>        
    </div>
    
</body>
</html>