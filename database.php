<?php
    $db = new pdo('mysql:host=localhost;dbname=BDDbibliotheque', 'root', 'password');

    if (isset($_GET['reset'])) {
        $reset = "DELETE FROM eleves";
        $request = $db->prepare($reset);
        $request->execute();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bases de données</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
            h1 {
                color: #fdd4c6;
                margin-bottom: 50px;
            }
            
            .content {
                background-color: rgba(255,97,54,.9);
                padding-top: 5%;
                padding-bottom: 2%;
            }
            
            #import_button {
                border-radius: 100px;
                padding-top: 10pt;
                padding-bottom: 2pt;
                padding-left: 10pt;
                padding-right: 10pt;
            }
            
            #lien_aide {
                display: block;
                text-decoration: none;
                text-align: center;
                color: #fdd4c6;
                margin-bottom: 20px;
                padding-top: 15px;
                padding-bottom: 10px;
            }
            
            #lien_aide:hover {
                background-color: rgba(253,212,198,.7);
                color: #ff4e00;
            }
            
            #lien_aide:active, #lien_aide:focus {
                color: #ff4e00;
                text-decoration: underline;
                background-color: rgba(253,212,198,.5);
            }
            
            .btn {
                font-size: 20pt;
                padding-top: 15px;
            }
            
            .btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus {
                outline: none;
            }

            .nav-tabs > li > a {
                margin: 0;
                color: #fdd4c6;
            }
            
            .nav-tabs>li:hover {
                background-color: #ff3700;
            }
            
            .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
                background-color: #fdd4c6;
                color: #ff3700;
                border: 1px solid #ff3700;
            }
            
            .form-control {
                background-color: #fdd4c6;
                color: #793b20;
                border: #8d4525 solid 1px;
            }
            
            .form-control:focus {
                background-color: #fdd4c6;
                border: #ffb760 solid 1px;
                box-shadow: 0 0 2px 2px #ffb760;
            }
            
        </style>
    </head>
    
    <body>
        <?php $i=2; include 'navbar.php'; ?>
        
        <section class="container">
            <div class="col-lg-10 col-lg-offset-1 content">
                <h1>Bases de Données</h1>
                <a href="#" id="lien_aide">Instructions</a>
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#importer">Importer des élèves</a></li>
                    <li><a data-toggle="tab" href="#eleves">Liste des élèves</a></li>
                    <li><a data-toggle="tab" href="#livres">Liste des livres</a></li>
                </ul>
                
                <div class="tab-content">
                    <div id="importer" class="tab-pane fade">
                        <h2>Ajouter une classe</h2>
                        <form class="form-inline" id="importer-form" action="uploadDB.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="fichier">Sélectionnez le fichier à importer</label>
                                <input type="file" class="form-control" id="fichier" name="fichier" accept="application/excel" />
                            </div>
                            <button type="submit" class="btn btn-success" id="import_button">
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </form>
                        <hr>
                        <form id="reset">
                            <button type="submit" class="btn btn-danger btn-block" name="reset">Réinitialiser la base de donnée</button>
                        </form>
                        <script>
                            
                            $("#reset").submit(function() {
                                return confirm("Attention! Vous êtes sur le point de supprimer tous les élèves de la base de donnée.\nVoulez-vous continuer ?");
                            });
                            
                            
                            
                        </script>
                    </div>
                    <div id="eleves" class="tab-pane fade">
                        <h2>Élèves</h2>
                        <form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Emprunts</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div id="livres" class="tab-pane fade">
                        <h2>Livres</h2>
                        <form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>Thème</th>
                                        <th>ISBN</th>
                                        <th>Mots-clés</th>
                                        <th>Emprunté</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>