<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link id="favicon" rel="icon" type="image/png" href="css/favicon.png">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
            .container {
                background-color: rgba(77,23,0,.9);
                border: #fee2a5 solid 1px;
                margin-top: 5%;
                margin-bottom: 1%;
            }
            
            .content {
                padding-top: 3%;
                padding-bottom: 6%;
            }
            
            address {
                background-color: rgba(201,80,29,.6);
                padding: 30px;
                border-radius: 10px;
                border: #f2520d 1px solid;
            }
            
            #github {
                background-color: #fee2a5;
                border-radius: 100px;
                font-size: 19pt;
            }
            #github>img {
                width: 20pt;
                height: 20pt;
            }
            
            #easteregg {
                text-decoration: none;
                color: #fee2a5;
            }
        </style>
    </head>
    
    <body>
        <?php $i=4; include 'navbar.php'; ?>
        <section class="container">
            <div class="col-lg-10 col-lg-offset-1 content">
                <h1>Une question? Un problème?</h1>
                <br>
                <h2>Contactez moi :</h2>
                <address>
                    <p>
                        <span class="glyphicon glyphicon-user"></span> <a href="#" id="easteregg">Emeric Descoings</a> (seul et unique développeur-technicien-stagiaire sur ce projet)
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:emericdescoings@yahoo.fr">emericdescoings@yahoo.fr</a>
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-phone"></span> 06.04.46.13.64
                    </p>
                    <p>
                    <span id="github"><img src="css/GitHub-Mark.png" /></span> <a href="https://github.com/QuantumSoul">https://github.com/QuantumSoul</a>
                    </p>
                    <script src="js/easteregg.js"></script>
                </address>
            </div>
        </section>
    </body>
</html>

