<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserire dati</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="width: 30rem; margin: 20px;">
        <div class="card-body">
            <div class=" mt-5">
                <h2>Inserisci i dati</h2>
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="class">Classe</label>
                        <select class="form-select" name="classe" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Sezione</label>
                        <select class="form-select" name="sezione" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Q">Q</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="course">Corso</label>
                        <select class="form-select" name="corso" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="SIA">SIA</option>
                            <option value="AFM">AFM</option>
                            <option value="RIM">RIM</option>
                            <option value="TURISMO">TURISMO</option>
                            <option value="LINGUISTICO">LINGUISTICO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="orale">Orale</label>
                        <input type="number" class="form-control" id="orale" name="orale" min="1" max="10" required>
                    </div>
                    <div class="form-group">
                        <label for="scritto">Scritto</label>
                        <input type="number" class="form-control" id="scritto" name="scritto" min="1" max="10" required>
                    </div>
                    <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Invia</button>
                    <a href="view.php" class="btn btn-success float-end" style="margin-top: 10px;">Visualizza</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
