<!-- Nom : Gaille
Prénom: Sébastien
date de réalisation du projet: 02.05.2022-18.05.2022
temps à disposition: 90 heures 
description: le fichier PHP menu.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High-Way-Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/menu.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" href="favicon.ico" />
</head>
<body>
    <header>
        <div class="container">
            <div class ="title-menu">
            <h1 class="display-1" id="gameName">High Way </h1>
            <h1 class="display-1" id="pseudo">Pseudo : <?php echo $_SESSION['username'];?></h1>
            </div>       
            <div class="row p-3">
                <div class="col-12 col-md-6">
                    <h1 class="display-5">
                        <a href="index.php?page=game" class="link">Jouer</a>
                    </h1>
                    <h1 class="display-5">
                        <a href="index.php?page=ranking" class="link">Classement</a>
                    </h1>
                    <h1 class="display-5">
                        <a href="index.php?page=rules" class="link">Règles</a>
                    </h1>
                    <h1 class="display-5">
                        <a href="index.php?page=logout" class="link">Déconnexion</a>
                    </h1>
                </div>

            </div>
        </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>