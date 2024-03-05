<?php
session_start();

if(isset($_POST['nome']) && isset($_POST['classe']) && isset($_POST['sezione']) && isset($_POST['corso']) && isset($_POST['orale']) && isset($_POST['scritto'])) {
    $student_data = array(
        'nome' => $_POST['nome'],
        'classe' => $_POST['classe'],
        'sezione' => $_POST['sezione'],
        'corso' => $_POST['corso'],
        'orale' => $_POST['orale'],
        'scritto' => $_POST['scritto']
    );

    $_SESSION['students'][] = $student_data;
}

header("Location: view.php");
exit();
?>
