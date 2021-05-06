<?php 

class Messages{
    public static function setMessage($text, $type)
    {
        if($type == 'error') {
            $_SESSION['errorMsg'] = $text;
        } else {
            $_SESSION['successMsg'] = $text;
        }
    }

    public static function displayMsg()
    {
        if(isset($_SESSION['errorMsg'])){
            echo '<div class="alert alert-danger mt-2">' . $_SESSION['errorMsg'] . '</div>';
        }
        if(isset($_SESSION['successMsg'])){
            echo '<div class="alert alert-success mt-2">' . $_SESSION['successMsg'] . '</div>';
        }

    }
}

?>