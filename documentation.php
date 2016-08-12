<!DOCTYPE html>
<html>
    <head>
        <title>Documentation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="icon" type="image/png" href="css/favicon.png">
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
                            <a href="#chapitre4" data-toggle="pill">Livres</a>
                        </li>
                        <li name="sublist">
                            <div id="chap4_content" class="collapse">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#chapitre4-1" data-toggle="pill">Sélection</a></li>
                                    <li><a href="#chapitre4-2" data-toggle="pill">Les informations</a></li>
                                    <li><a href="#chapitre4-3" data-toggle="pill">Gestion</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a name="uncollapsible" href="#chapitre5" data-toggle="pill">Utilisation avancée</a></li>
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
                    <?php include 'documentation.html'; ?>
                </div>
            </div>
        </section>

    </body>
</html>
