<?php
//    if ($_SERVER['REQUEST_METHOD']!='POST') header("location:/WebApp/index.php");
//
//    $target = "uploads/" .  basename($_FILES["fichier"]["name"]);
//    
//    if (!move_uploaded_file($_FILES["fichier"]["tmp_name"], $target)) {
//        header("location:/WebApp/index.php?error=");
//    }

    require_once 'Classes/PHPExcel/IOFactory.php';

    $xlsFile = PHPExcel_IOFactory::load("uploads/test.xlsx");

    $activeSheet = $xlsFile->getSheet(0);

    $c_nom = $c_prenom = $activeSheet->getHighestDataColumn()-1;
    $firstRow = $activeSheet->getHighestDataRow();
    $cellValue = "";

    while (!strcasecmp($cellValue, "nom") && $cellValue!=NULL) {
        $c_nom++;
        $cellValue = $activeSheet->getCellByColumnAndRow($c_nom, $firstRow)->getValue();
    }
    $colFound = strcasecmp($cellValue, "nom");

    if ($colFound) {
        while (!strcasecmp($cellValue, "prénom") && $cellValue!=NULL) {
            $c_prenom++;
            $cellValue = $activeSheet->getCellByColumnAndRow($c_prenom, $firstRow)->getValue();
        }
        $colFound = strcasecmp($cellValue, "nom");
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
            
            .btn {
                font-size: 20pt;
                padding-top: 15px;
            }
            
            .btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus {
                outline: none;
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
                <h1>Importation du fichier</h1>
                
                <div id="tableau"></div>
                    <h2>Aperçu :</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>Prénom</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
            </div>
        </section>
        
    </body>
</html>
