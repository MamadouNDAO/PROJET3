<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="main" class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 cadre">
                    <div class="col-md-7 tom">Administrer les Chambres</div>
                    <div class="col-md-7 tom2">Administrer les étudiants</div>
                </div>
            </div>
        </div>
        
        <!-- Afficher Les Vues du Layout -->
        <?php echo  $content_for_layout?>
    </div>
</body>
</html>