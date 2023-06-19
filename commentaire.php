<?php
    // Insérez ici votre code de connexion à la base de données

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $commentaire = $_POST['commentaire'];

        // Insérez ici votre code pour ajouter un commentaire à la base de données
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un commentaire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h1 class="text-center">Ajouter un commentaire</h1>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="commentaire">Commentaire</label>
                    <textarea class="form-control" id="commentaire" name="commentaire" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
