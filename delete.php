<?php
session_start();

if(isset($_GET['key']) && isset($_SESSION['students'])) {
    $key = $_GET['key'];
    if(array_key_exists($key, $_SESSION['students'])) {
        unset($_SESSION['students'][$key]);
        $_SESSION['students'] = array_values($_SESSION['students']);
    }
}

header("Location: view.php");
exit();
?>
