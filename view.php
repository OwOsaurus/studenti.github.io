<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div>
            <h2>Dati Studenti</h2>
            <a href="insert.php" style="margin-right: 8%;" type="submit" class="btn btn-primary float-end">Inserisci</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sezione</th>
                    <th>Classe</th>
                    <th>Corso</th>
                    <th>Orale</th>
                    <th>Scritto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                if(isset($_SESSION['students'])) {
                    foreach($_SESSION['students'] as $key => $student) {
                        echo "<tr>";
                        echo "<td>".$student['nome']."</td>";
                        echo "<td>".$student['classe']."</td>";
                        echo "<td>".$student['sezione']."</td>";
                        echo "<td>".$student['corso']."</td>";
                        echo "<td>".$student['orale']."</td>";
                        echo "<td>".$student['scritto']."</td>";
                        echo "<td><a href='delete.php?key=$key' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
