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
            .content {
                padding-top: 5px;
                padding-bottom: 5px;
                background-color: rgba(254,172,59,.9);
                margin-top: 5%;
            }
            
            .container {
                background-color: #fe9501;
                padding-bottom: 1%;
                margin-top: 2%;
                border: #fee2a5 solid 1px;
            }
            
            .glyphicon {
                color: #ff5e1a;
            }
            
            .btn {
                font-size: 20pt;
                padding-top: 15px;
            }
            
            .btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus {
                outline: none;
            }
            
            .btn-default {
                background-color: #fee2a5;
                color: #793b20;
                border: #8d4525 solid 1px;
            }
            
            .btn-default:hover {
                background-color: #fdd681;
                color: #3c1d10;
                border: #ff5e1a solid 1px;
                box-shadow: 0 0 2px 2px #ff5e1a;
            }
            
            .btn-default.focus,.btn-default:focus {
                background-color: #fcc54f;
                color: #3c1d10;
                border-color: #ff5e1a;
            }
            
            .btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover {
                background-color: #fcc54f;
                color: #3c1d10;
                border: #ff5e1a solid 1px;
                box-shadow: 0 0 2px 2px #cc3d00 inset;
            }
            
            #javaButton {
                background-color: white;
                color: #333;
            }
            
            #javaButton>img {
                margin-right: 10px;
                height: 22pt;
            }
        </style>
    </head>
    
    <body>
        <?php $i=1; include 'navbar.php'; ?>
        <section class="content">
            <h1 style="color: #ff5e1a">Téléchargements</h1>
            <div class="container">
                <div class="col-lg-3 col-lg-offset-1">
                    <h2><span class="glyphicon glyphicon-triangle-right"></span>Java :</h2>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
                    Pour pouvoir faire fonctionner le logiciel, il est nécessaire d'installer Java sur votre ordinateur.&NewLine;
                    <div style="text-align: center; margin-top: 5px">
                        <a id="javaButton" href="https://www.java.com/inc/BrowserRedirect1.jsp?locale=fr" target="_blank" class="btn btn-default btn-lg"><img src="css/java.png" alt=""/>Télécharger Java</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-3 col-lg-offset-1">
                    <h2><span class="glyphicon glyphicon-triangle-right"></span>Logiciel :</h2>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
                    Téléchargez ici le logiciel de gestion de la bibliothèque
                    <div style="text-align: center; margin-top: 10px">
                        <a class="btn btn-success btn-lg" href="Bibliotheque.jar">Bibliothèque.jar</a>
                        <a class="btn btn-default btn-lg" href="#">Instructions d'utilisation</a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>