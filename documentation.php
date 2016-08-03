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
            
            #chap1_content, #chap2_content {
                margin-left: 12%;
            }
            
            #sublist1:hover, #sublist1:active, #sublist1:focus,
            #sublist2:hover, #sublist2:active, #sublist2:focus {
                background-color: transparent;
            }
            
            #doc_container {
                background-color: rgba(218,94,238,.9);
                padding-top: 5px;
                padding-bottom: 5px;
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
            
            .nav>li>a {
                color: #ffccd6;
            }
            
            .nav>li:hover {
                background-color: #fd819a;
            }
            
            .nav>li.active>a:active, .nav>li.active>a {
                border-radius: 0;
                background-color: #fc0335;
                color: #fee2a5;
            }
            
        </style>
    </head>
    
    <body>
        <?php $i=3; include 'navbar.php'; ?>
    
        <section class="container">
            <div class="col-lg-3 col-lg-offset-1">
                <div class="panel panel-default">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a name="uncollapsible" href="#demarrage" data-toggle="pill">Démarrage</a></li>
                        <li data-toggle="collapse" data-target="#chap1_content">
                            <a href="#chapitre1" data-toggle="pill">Chapitre 1</a>
                        </li>
                        <li id="sublist1">
                            <div id="chap1_content" class="collapse">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#chapitre1-1" data-toggle="pill">Chapitre 1.1</a></li>
                                    <li><a href="#chapitre1-2" data-toggle="pill">Chapitre 1.2</a></li>
                                    <li><a href="#chapitre1-3" data-toggle="pill">Chapitre 1.3</a></li>
                                    <li><a href="#chapitre1-4" data-toggle="pill">Chapitre 1.4</a></li>
                                    <li><a href="#chapitre1-5" data-toggle="pill">Chapitre 1.5</a></li>
                                </ul>
                            </div>
                        </li>
                        <li data-toggle="collapse" data-target="#chap2_content">
                            <a href="#chapitre2" data-toggle="pill">Chapitre 2</a>
                        </li>
                        <li id="sublist2">
                            <div id="chap2_content" class="collapse">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#chapitre2-1" data-toggle="pill">Chapitre 2.1</a></li>
                                    <li><a href="#chapitre2-1" data-toggle="pill">Chapitre 2.2</a></li>
                                    <li><a href="#chapitre2-1" data-toggle="pill">Chapitre 2.3</a></li>
                                    <li><a href="#chapitre2-1" data-toggle="pill">Chapitre 2.4</a></li>
                                    <li><a href="#chapitre2-1" data-toggle="pill">Chapitre 2.5</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a name="uncollapsible" href="#chapitre3" data-toggle="pill">Chapitre 3</a></li>
                        <li><a name="uncollapsible" href="#chapitre4" data-toggle="pill">Chapitre 4</a></li>
                        <li><a name="uncollapsible" href="#chapitre5" data-toggle="pill">Chapitre 5</a></li>
                    </ul>
                    <script>
                        $(".collapse").on("show.bs.collapse", function() {
                            $(".collapse").collapse("hide");
                        });
                        $("[name='uncollapsible']").focus(function() {
                            $(".collapse").collapse("hide");
                        });
                    </script>
                </div>
            </div>
            <div id="doc_container" class="col-lg-7">
                <div class="tab-content">
                    <div id="demarrage" class="tab-pane fade in active">
                        <h1>Démarrage rapide</h1>
                        documentation
                    </div>
                    <div id="chapitre1" class="tab-pane fade">
                        <h1>Chapitre 1</h1>
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                Introduction au chapitre
                            </div>
                            <div id="chapitre1-1" class="tab-pane fade">
                                <h2>Partie 1</h2>
                                documentation
                            </div>
                            <div id="chapitre1-2" class="tab-pane fade">
                                <h2>Partie 2</h2>
                                documentation
                            </div>
                            <div id="chapitre1-3" class="tab-pane fade">
                                <h2>Partie 3</h2>
                                documentation
                            </div>
                            <div id="chapitre1-4" class="tab-pane fade">
                                <h2>Partie 4</h2>
                                documentation
                            </div>
                            <div id="chapitre1-5" class="tab-pane fade">
                                <h2>Partie 5</h2>
                                documentation
                            </div>
                        </div>
                    </div>
                    <div id="chapitre2" class="tab-pane fade">
                        <h1>Chapitre 2</h1>
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                Introduction au chapitre
                            </div>
                            <div id="chapitre2-1" class="tab-pane fade">
                                <h2>Partie 1</h2>
                                documentation
                            </div>
                            <div id="chapitre2-2" class="tab-pane fade">
                                <h2>Partie 2</h2>
                                documentation
                            </div>
                            <div id="chapitre2-3" class="tab-pane fade">
                                <h2>Partie 3</h2>
                                documentation
                            </div>
                            <div id="chapitre2-4" class="tab-pane fade">
                                <h2>Partie 4</h2>
                                documentation
                            </div>
                            <div id="chapitre2-5" class="tab-pane fade">
                                <h2>Partie 5</h2>
                                documentation
                            </div>
                        </div>
                    </div>
                    <div id="chapitre3" class="tab-pane fade">
                        <h1>Chapitre 3</h1>
                        documentation
                    </div>
                    <div id="chapitre4" class="tab-pane fade">
                        <h1>Chapitre 4</h1>
                        documentation
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
