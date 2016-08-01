<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
            .container {
                background-color: rgba(77,23,0,.8);
                border: #fee2a5 solid 1px;
                margin-top: 5%;
                text-align: center;
                align-items: center;
                font-family: clearLine;
                font-size: 4em;
            }
            .content {
                padding-top: 15%;
                padding-bottom: 15%;
            }
        </style>
    </head>
    
    <body>
        <?php $i=0; include 'navbar.php'; ?>
        <section class="container">
            <div class="col-lg-10 col-lg-offset-1 content">
                Bienvenue sur le site de la Bibliothèque
            </div>
        </section>
    </body>
</html>