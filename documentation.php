<!DOCTYPE html>
<html>
    <head>
        <title>Documentation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <style>
            
            #doc_container {
                background-color: rgba(218,94,238,.9);
                padding-top: 1%;
                padding-bottom: 5%;
                line-height: 1.4;
                margin-bottom: 7%;
            }
            
            .panel-default {
                padding-top: 2px;
                padding-bottom: 2px;
                background-color: rgba(253,59,99,.9);
                min-height: 85vh;
            }
            
            .container {
                margin-top: 5%;
            }
            
            li[name="sublist"] li { margin-left: 12%; }
            
            #main_list li:hover {
                background-color: #fd819a;
            }
            
            #main_list>li[name="sublist"]:hover,
            #main_list>li[name="sublist"]:active,
            #main_list>li[name="sublist"]:focus {
                background-color: transparent;
            }
            
            .nav-pills a { color: #ffccd6; }
            
            .nav-pills>li.active>a:active, .nav-pills>li.active>a {
                border-radius: 0;
                background-color: #fc0335;
                color: #fee2a5;
            }
            
            .java-btn {
                padding: 5px;
                padding-bottom: 3px;
                margin: 2px;
                color: #fff;
                font-size: 15pt;
            }
            
            .java-valid {
                background-color: #5cb85c;
                border: #4cae4c 1px solid;
            }
            
            .java-warning {
                background-color: #d9534f;
                border: #761c19 1px solid;
            }
            
            .java-default {
                background-color: wheat;
                color: #333;
                border: none;
            }
            
            p {
                text-indent: 25px;
                text-align: justify;
            }
            
            .keyboard {
                border: 2px solid;
                border-radius: 5px;
                padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 4px;
                padding-right: 4px;
                margin: 2px;
                font-size: 18px;
                font-family: sans-serif;
            }
            
        </style>
    </head>
    
    <body>
        <?php $i=3; include 'navbar.php'; ?>
    
        <section class="container">
            <div class="col-lg-3 col-lg-offset-1">
                <div class="panel panel-default">
                    <ul class="nav nav-pills nav-stacked" id="main_list">
                        <li class="active"><a name="uncollapsible" href="#demarrage" data-toggle="pill">Démarrage</a></li>
                        <li data-toggle="collapse" data-target="#chap1_content">
                            <a href="#chapitre1" data-toggle="pill">Les emprunts</a>
                        </li>
                        <li name="sublist">
                            <div id="chap1_content" class="collapse">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#chapitre1-1" data-toggle="pill">Scanner</a></li>
                                    <li><a href="#chapitre1-2" data-toggle="pill">Enregistrement</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a name="uncollapsible" href="#chapitre2" data-toggle="pill">Rendre un livre</a></li>
                        <li data-toggle="collapse" data-target="#chap3_content">
                            <a href="#chapitre3" data-toggle="pill">Élèves</a>
                        </li>
                        <li name="sublist">
                            <div id="chap3_content" class="collapse">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#chapitre3-1" data-toggle="pill">Sélection</a></li>
                                    <li><a href="#chapitre3-2" data-toggle="pill">Les informations</a></li>
                                    <li><a href="#chapitre3-3" data-toggle="pill">Gestion</a></li>
                                </ul>
                            </div>
                        </li>
                        <li data-toggle="collapse" data-target="#chap4_content">
                            <a href="#chapitre4" data-toggle="pill">Élèves</a>
                        </li>
                        <li name="sublist">
                            <div id="chap4_content" class="collapse">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#chapitre4-1" data-toggle="pill">Sélection</a></li>
                                    <li><a href="#chapitre4-2" data-toggle="pill">Les informations</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a name="uncollapsible" href="#chapitre5" data-toggle="pill">Chapitre 5</a></li>
                    </ul>
                    <script>
                        $(".collapse").on("show.bs.collapse", function() {
                            $(".collapse").collapse("hide");
                        });
                        $("[name='uncollapsible']").click(function() {
                            $(".collapse").collapse("hide");
                        });
                    </script>
                </div>
            </div>
            <div id="doc_container" class="col-lg-7">
                <div class="tab-content">
                    <div id="demarrage" class="tab-pane fade in active">
                        <h1>Démarrage rapide</h1>
                        <br>
                        <p>
                            Pour ajouter une classe à la liste des élèves allez sur la page <a href="database.php">Base 
                            de données</a> et cliquez sur <input type="button" value="Parcourir..."/> pour sélectionner 
                            le tableur excel à importer.
                        </p>
                        <br>
                        <p>
                            Si Java est installé sur votre ordinateur et que vous avez téléchargé l'application,
                            il vous suffit de lancer l'application Bibliotheque.jar pour avoir accés à la bibliothèque.
                            Vous devriez normalement obtenir ceci :
                        </p>
                        <br>
                        L'interface est découpée en 4 onglets principaux :
                        <ul>
                            <li>
                                l'onglet d'emprunt de livre
                            </li>
                            <li>
                                l'onglet de rendu de livre
                            </li>
                            <li>
                                l'onglet de gestion des élèves
                            </li>
                            <li>
                                l'onglet de gestion des livres
                            </li>
                        </ul>
                        <p>
                            Vous pouvez naviguer entre les onglets en cliquant sur les boutons à gauche de l'écran.
                        </p>
                        <br>
                        <p>
                            Dans l'onglet d'emprunt il vous sera possible d'enregistrer un nouvel emprunt. 
                            Pour cela commencez par scanner le code-barre du livre, si aucun code ne s'affiche dans le cadre 
                            cliquez simplement dessus.
                        </p>
                        <p>
                            Une fois le code-barre validé vous arriverez sur une interface vous permettant de choisir l'élève
                            empruntant le livre. Tapez son nom et son prénom dans les champs correspondant ou sélectionnez-le 
                            dans la liste et validez l'emprunt.
                        </p>
                        <br>
                        <p>
                            Dans l'onglet de rendu vous pouvez rendre un livre emprunté. Ici aussi, scannez simplement le 
                            code-barre du livre et validez-le pour rendre le livre
                        </p>
                        <br>
                        <p>
                            Dans l'onglet de gestion des élèves il vous sera possible de consulter les informations sur les 
                            élèves enregistrés dans la base de données.
                            <br>La liste à gauche vous permet de voir tous les élèves ayant un ou plusieurs emprunts en cours. 
                            En haut vous trouverez une interface vous permettant de rechercher un élève en particulier dans 
                            toute la base de données, les résultats s'affichant sous forme de liste dans une nouvelle fenêtre.
                        </p>
                        <p>
                            Lorsque vous sélectionnez un élève dans la liste de gauche ou dans les résultats de votre recherche 
                            le nom et le prénom de l'élève s'afficheront, ainsi que l'ensemble des livre qu'il n'a pas rendu.
                            <br>Vous pourrez rendre ces livre directement depuis cette interface en les sélectionnant et en cliquant 
                            sur le bouton <button class=" java-btn java-valid">Rendre</button> ou <button class=" java-btn java-valid">
                                Rendre tous</button> pour rendre tout les livre d'un coup.
                        </p>
                        <p>
                            Il vous sera également possible d'enregistrer un nouvel élève en cliquant sur le bouton 
                            <button class="java-btn java-default">Nouvel élève</button> et de supprimer l'élève sélectionné en cliquant sur 
                            <button class="java-btn java-warning">Supprimer l'élève</button>
                        </p>
                        <br>
                        <p>
                            Dans l'onglet de gestion des livres vous pourrez consulter les informations les élèves enregistrés dans
                            la base de données.
                            <br>Tout comme dans l'onglet Élèves la liste de gauche vous indique les livres empruntés, vous pouvez rechercher
                            un livre dans l'interface du haut. Entre autres informations il y aura également le nom de l'emprunteur 
                            et il sera également possible de rendre le livre à partir de cet onglet.
                        </p>
                        <p>
                            Il sera ici possible d'ajouter des livres, de les supprimer, mais également de modifier les informations du 
                            livre sélectionné en cliquant sur le bouton <button class="java-btn java-default">Enregistrer les modifications</button>.
                        </p>
                    </div>
                    <div id="chapitre1" class="tab-pane fade">
                        <h1>Ajouter un emprunt</h1>
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                Pour accéder à la page des emprunt vous devez tout d'abord cliquer sur l'onglet Emprunter
                            </div>
                            <div id="chapitre1-1" class="tab-pane fade">
                                <h2>Scanner le code-barre</h2>
                                <p>
                                    La première page visible est celle vous permettant de scanner le code-barre du livre.
                                    <br>Pour scanner le code-barre utilisez simplement le lecteur de code-barre ou tapez-le directement 
                                    au clavier si le livre ne dispose pas de code barre lisible.
                                </p>
                                <p>
                                    Vous pouvez également entrer le code ISBN du livre à la place du code-barre, mais il est conseillé 
                                    de ne faire ceci que s'il n'y a pas de code-barre du tout sur le livre car ce sera le seul code enregistré.
                                </p>
                                <p>
                                    Si rien ne s'affiche dans le cadre lorsque vous scannez ou que vous tapez le code, cliquez dessus pour 
                                    l'activer. Le champs est actif par défaut quand vous ouvrez l'onglet, il est désactivé dès que vous cliquez 
                                    sur un autre élément du programme.
                                </p>
                                <p>
                                    Pour valider le code-barre et passer à l'étape suivante cliquez simplement sur le bouton à droite du champs.
                                    Ce bouton n'est cliquable qu'une fois le code-barre entré.
                                </p>
                            </div>
                            <div id="chapitre1-2" class="tab-pane fade">
                                <h2>Enregistrer l'emprunt</h2>
                                <p>
                                    Une fois le livre scanné, vous devez sélectionner l'élève qui l'empunte.
                                    <br>Pour cela, tapez son nom et son prénom dans les deux champs correspondants ou cliquez sur l'un des élèves dans 
                                    la liste de gauche. Dès que vous commencerez à taper la liste s'actualisera et affichera l'ensemble des élèves ayant 
                                    un nom ou un prénom ressemblant à ce que vous avez entré.
                                </p>
                                <p>
                                    &#9733<strong>Astuce :</strong> Vous n'avez donc pas besoin d'entrer le nom complet de l'élève, il vous suffit de 
                                    taper les premières lettres du nom et/ou du prénom puis de sélectionner l'élève dans la liste.
                                </p>
                                <p>
                                    Vous pouvez ensuite de valider l'emprunt en cliquant sur le bouton <button class="java-btn java-valid">Emprunter</button>
                                </p>
                            </div>
                            <div id="chapitre1-3" class="tab-pane fade">
                                
                            </div>
                        </div>
                    </div>
                    <div id="chapitre2" class="tab-pane fade">
                        <h1>Rendre un livre</h1>
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                <p>Pour rendre un livre vous devez tout d'abord cliquer sur l'onglet Rendre.</p>
                                <br>
                                <p>
                                    Dans cet onget vous n'aurez qu'a scanner le code-barre du livre et de le valider pour le rendre.
                                    <br>L'interface de scan est la même que dans le premier onglet, ainsi vous pouvez donc soit utiliser 
                                    le lecteur de code-barre soit taper le code au clavier et vous pouvez utiliser soit le code-barre soit
                                    l'ISBN du livre <strong>en fonction de quel code à été enregistré</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="chapitre3" class="tab-pane fade">
                        <h1>Gestion des élèves</h1>
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                Pour accéder à la page de gestion des élèves cliquez tout d'abord sur l'onglet Élèves.
                            </div>
                            <div id="chapitre3-1" class="tab-pane fade">
                                <h2>Sélectionner un élève</h2>
                                <p>Pour sélectionner un élève vous pouvez soit cliquer sur un élève dans la liste de gauche 
                                    soit en rechercher dans la base de donnée.</p>
                                <p>
                                    La liste contient l'ensemble des élèves ayant emprunté un livre. Chaque modification 
                                    enregistrée met automatiquement la liste à jour.
                                </p>
                                <p>
                                    &#9733<strong>Astuce : </strong>la largeur de la liste et de la zone d'informations est 
                                    variable, déplacez simplement la barre verticale les séparant pour avoir une meilleure 
                                    visibilité sur l'une ou l'autre de ces parties.
                                </p>
                                <br>
                                <p>
                                    Pour rechercher un élève tapez dans les champs de recherche en haut à gauche le nom et/ou
                                    le prénom de l'élève. L'application recherchera tous les élèves dont le nom et le prénom 
                                    ressemblent à ce que vous avez entré, il ne sera donc pas nécessaire de taper entièrement 
                                    ces derniers pour obtenir l'élève recherché.
                                </p>
                                <p>
                                    Les résultats de la recherche s'afficheront dans une nouvelle fenêtre sous forme de liste. 
                                    Sélectionnez simplement l'élève recherché et validez. Si vous ne trouvez pas l'élève vous 
                                    pouvez toujours annuler en cliquant sur la croix rouge ou en fermant manuellement la fenêtre 
                                    de résultats.
                                </p>
                                <p>
                                    &#9733<strong>Astuce : </strong>Comme la recherche est une recherche globale, si vous cliquez 
                                    sur le bouton <button class="java-btn java-default">Rechercher</button> sans rien entrer comme 
                                    filtre vous obtiendrez la liste complète de tous les élèves.
                                </p>
                            </div>
                            <div id="chapitre3-2" class="tab-pane fade">
                                <h2>Informations sur les élèves</h2>
                                <p>Quand vous sélectionnez un élève vous pourrez consulter toutes les informations le concernant, soit :</p>
                                <ul>
                                    <li>Son nom</li>
                                    <li>Son prénom</li>
                                    <li>L'ensemble des livres qu'il a emprunté et leur date d'emprunt</li>
                                </ul>
                                <p>
                                    À partir de cet onglet il vous est possible de rendre un livre emprunté par l'éleve sélectionné en 
                                    cliquant dessus dans la liste et en cliquant sur le bouton <button class="java-btn java-valid">Rendre
                                    </button>. Vous pouvez également rendre tous les livre que l'élève a emprunté en une seule fois en 
                                    cliquant sur le bouton <button class="java-btn java-valid">Rendre tous</button>.
                                </p>
                                <p>
                                    &#9733<strong>Astuce : </strong>Vous pouvez sélectionner plusieurs livres à rendre en même temps. 
                                    Pour ce faire appuyez sur la touche <span class="keyboard">Ctrl</span> et cliquez sur les livres 
                                    à rendre. Il ne vous reste plus qu'a valider en cliquant sur <button class="java-btn java-valid">
                                        Rendre</button>
                                </p>
                            </div>
                            <div id="chapitre3-3" class="tab-pane fade">
                                
                            </div>
                        </div>
                    </div>
                    <div id="chapitre4" class="tab-pane fade">
                        <h1>Gestion des livres</h1>
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                Pour accéder à la page de gestion des livres cliquez tout d'abord sur l'onglet Livres.
                            </div>
                            <div id="chapitre4-1" class="tab-pane fade">
                                <h2>Sélectionner un livre</h2>
                                <p>
                                    Tout comme l'onglet de gestion des élèves vous pourrez sélectionner dans la liste de 
                                    gauche les livres empruntés, ou rechercher un livre dans la zone de recherche en haut 
                                    à droite.
                                </p>
                                <p>
                                    &#9733<strong>Astuce : </strong>ici également la largeur de la liste et de la zone d'informations est 
                                    variable, déplacez simplement la barre verticale les séparant pour avoir une meilleure 
                                    visibilité sur l'une ou l'autre de ces parties.
                                </p>
                                <p>
                                    Vous pourrez rechercher un livre par Titre, thème, auteur, et mots-clés.<br>
                                    Pour la recherche par mots-clés vous devez séparer chaque mot-clé par un ";"
                                </p>
                            </div>
                            <div id="chapitre4-2" class="tab-pane fade">
                                <h2>Informations sur les livres</h2>
                                <p>
                                    Ici les informations affichées seront les informations les plus utilisées sur les livres :
                                </p>
                                <ul>
                                    <li>le titre</li>
                                    <li>l'auteur</li>
                                    <li>l'emprunteur</li>
                                    <li>le thème</li>
                                    <li>les mots-clés</li>
                                </ul>
                                <p>
                                    Il sera également possible de rendre le livre directement depuis l'onglet en cliquant sur le 
                                    bouton <button class="java-btn java-valid">Rendre</button>
                                </p>
                            </div>
                    </div>
                    <div id="chapitre5" class="tab-pane fade">
                        <h1>Chapitre 5</h1>
                        documentation
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>
