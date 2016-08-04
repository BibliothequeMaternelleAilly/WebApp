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
    
    $lastCol = $activeSheet->getHighestDataColumn();
    $col = 'A';
    
    for($i='A'; $i<=$lastCol; $i++) {
        $cellValue = $activeSheet->getCell($col.'1')->getValue();
        if (strcasecmp($cellValue, "nom")!=0 && strcasecmp($cellValue, "prénom")!=0)
            $activeSheet->removeColumn ($col);
        else $col++;
    }
    
    $colFound = $col=='C';
    
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
                padding-bottom: 10%;
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
            
            table {
                background-color: rgba(253,212,198,.3);
                border: #fdd4c6 solid 1px;
            }
            
            table>tbody>tr:hover {
                background-color: #fdd4c6;
                color: #ff6136;
            }
            
        </style>
    </head>
    
    <body>
        <?php $i=2; include 'navbar.php'; ?>
        
        <section class="container">
            <div class="col-lg-10 col-lg-offset-1 content">
                <h1>Importation du fichier</h1>
                
                <form id="tableau" <?php echo $colFound? '':'hidden'; ?>>
                    <h2>Aperçu :</h2>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NOM</th>
                                <th>Prénom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $rowIterator = $activeSheet->getRowIterator(2);
                                foreach ($rowIterator as $row) {
                                    echo '<tr>';
                                    
                                    $cellIterator = $row->getCellIterator();   
                                    foreach ($cellIterator as $cell)
                                        echo '<td>' . $cell->getValue() . '</td>';
                                    
                                    echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                    
                    <button type="submit" class="btn btn-success btn-block">Valider</button>
                </form>
            </div>
        </section>
        
    </body>
</html>
