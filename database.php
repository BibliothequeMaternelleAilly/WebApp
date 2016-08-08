<?php
    $db = new pdo('mysql:host=localhost;dbname=BDDbibliotheque', 'root', 'password');

    if (isset($_GET['reset'])) {
        $reset = "TRUNCATE eleves";
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
                padding-bottom: 7%;
            }
            
            #import_button {
                border-radius: 100px;
                padding-top: 10pt;
                padding-bottom: 2pt;
                padding-left: 10pt;
                padding-right: 10pt;
            }
            
            #d_aide {
                margin-bottom: 30px;
            }
            
            #lien_aide {
                display: block;
                border: white solid 1px;
                border-radius: 5px;
                text-align: center;
                text-decoration: none;
                color: #fdd4c6;
                padding: 7px;
            }
            
            #lien_aide:hover {
                border: none;
                border-radius: 0px;
                background-color: rgba(253,212,198,.7);
                color: #ff4e00;
                padding: 8px;
            }
            
            #lien_aide:active {
                border: none;
                border-radius: 0px;
                color: #ff4e00;
                text-decoration: underline;
                background-color: rgba(253,212,198,.5);
                padding: 8px;
            }
            
            #lien_aide[aria-expanded=true] {
                border: none;
                border-radius: 0px;
                color: #fdd4c6;
                text-decoration: underline;
                background-color: rgba(255,78,0,.5);
                padding: 8px;
            }
            
            #instructions {
                background-color: rgba(253,212,198,.2);
                margin-top: 2%;
                padding-left: 3%;
                padding-right: 3%;
                padding-top: 1%;
                border: #fdd4c6 solid 1px;
            }
            
            #instructions ul {
                line-height: 1.5;
            }
            
            .btn {
                font-size: 20pt;
                padding-top: 15px;
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
            
            .alert {
                text-align: center;
            }
            
        </style>
    </head>
    
    <body>
        <?php $i=2; include 'navbar.php'; ?>
        
        <section class="container">
            <div class="col-lg-10 col-lg-offset-1 content">
                <h1>Bases de Données</h1>
                <div class="alert alert-danger fade in" <?php echo isset($_GET['error'])? '':'hidden'; ?>>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Impossible de transférer le fichier! Veuillez réessayer.
                </div>
                <div id="d_aide">
                    <a data-toggle="collapse" data-target="#instructions" id="lien_aide">Instructions</a>
                    <div id="instructions" class="collapse">
                        <p><span class="lettrine">D</span>ans l'onglet "Importer des élèves" :</p>
                        <ul>
                            <li>
                                Vous pouvez ajouter une liste d'élèves à la liste existante en sélectionnant
                                un tableur excel sur votre ordinateur.
                            </li>
                            <li>
                                Supprimer totalement la liste des élèves existante en cliquant sur le bouton 
                                "Réinitialiser la liste des élèves". <strong>Attention, cette action n'est pas
                                réversible!</strong>
                            </li>
                        </ul>
                        <p><span class="lettrine">D</span>ans l'onglet "Liste des élèves" :</p>
                        <ul>
                            <li>
                                Vous pouvez consulter la liste complète des élèves et voir leurs emprunts en 
                                cliquant sur le bouton "emprunts"
                            </li>
                            <li>
                                Vous pouvez télécharger format pdf la liste des élèves ayant un emprunt en cours au 
                                en cliquant sur le bouton "Sauvegarder"
                            </li>
                        </ul>
                        <p><span class="lettrine">D</span>ans l'onglet "Liste des livres" :</p>
                        <ul>
                            <li>
                                Vous pouvez consulter la liste complète des livres et de leur emprunteur
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#importer">Importer des élèves</a></li>
                    <li><a data-toggle="tab" href="#eleves">Liste des élèves</a></li>
                    <li><a data-toggle="tab" href="#livres">Liste des livres</a></li>
                </ul>
                
                <div class="tab-content">
                    <div id="importer" class="tab-pane fade in active">
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
                            <button type="submit" class="btn btn-danger btn-block" name="reset">Réinitialiser la liste des élèves</button>
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