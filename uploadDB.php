<?php
    if ($_SERVER['REQUEST_METHOD']!='POST') header("location:/BiblioPi/index.php");

    if (isset($_FILES["fichier"])) {
	mkdir("uploads");
        $target = "uploads/" .  basename($_FILES["fichier"]["name"]);
    
        if (!move_uploaded_file($_FILES["fichier"]["tmp_name"], $target)) {
            header("location:/BiblioPi/database.php?error=");
        }
    } else if (isset ($_POST['insert']))
        $target = $_POST['insert'];
    
    else header("location:/BiblioPi/database.php?error=");

    require_once 'Classes/PHPExcel/IOFactory.php';
    
    $db = new pdo('mysql:host=localhost;dbname=BDDbibliotheque', 'root', 'password', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',));

    $xlsFile = PHPExcel_IOFactory::load($target);
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
            
            .valid {
                background-color: #86b300;
                border: #e4ff99 solid 1px;
            }
            
            .valid:hover {
                background-color: #608000;
                color: white;
            }
            
            .error {
                background-color: #b30000;
                border: #ff9999 solid 1px;
            }
            
            .error:hover {
                background-color: #800000;
                color: white;
            }
            
            table {
                background-color: rgba(253,212,198,.3);
                border: #fdd4c6 solid 1px;
            }
            
            table>tbody>tr:hover {
                background-color: #fdd4c6;
                color: #ff6136;
            }
            
            #alert-p {
                font-size: 15pt;
                margin-top: 10px;
            }
            
        </style>
    </head>
    
    <body>
        <?php $i=2; include 'navbar.php'; ?>
        
        <section class="container">
            <div class="col-lg-10 col-lg-offset-1 content">
                <h1>Importation du fichier</h1>
                
                <div <?php echo $colFound? 'hidden':''; ?>>
                    <div class="alert alert-danger">
                        <strong>Erreur !</strong> Il semblerait que la lecture du fichier ai échouée.
                        <p id="alert-p">Vérifiez que les colonnes "Nom" et "Prénom" sont bien présentes et que le tableau commence à la ligne 1.</p>
                    </div>
                </div>
                
                <form id="tableau" <?php echo $colFound? '':'hidden'; ?> method="POST">
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
                                    $name = $surname = "";
                                    
                                    $cellIterator = $row->getCellIterator();
                                    foreach ($cellIterator as $cell) {
                                        if ($name=="") $name = strtoupper($cell->getValue());
                                        else $surname = strtolower ($cell->getValue());
                                    }
                                    
                                    if (isset($_POST['insert'])) {
                                        $nbErrors = 0;
                                        $insert = "INSERT INTO eleves (nom, prenom) "
                                                . "VALUES ('$name', '$surname')";
                                        $request = $db->prepare($insert);
                                        $result = $request->execute();
                                        if ($result) echo '<tr class="valid">';
                                        else {
                                            echo '<tr class="error">';
                                            $nbErrors++;
                                        }
                                    } else
                                        echo '<tr>';
                                    
                                    echo "<td>$name</td>";
                                    echo "<td>$surname</td>";
                                    echo '</tr>';
                                }
                                
                                if (isset($_POST['insert']))
                                    unlink($target);
                            ?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function() {
                            <?php
                                if ($nbErrors==0)
                                    echo 'alert("Toutes les données on été enregistrée!");';
                                else 
                                    echo 'alert("Attention! Certaines données (surlignées en rouge dans le tableau) n\'ont pas pu être enregistrée.");';
                            ?>
                        });
                    </script>
                    
                    <p <?php echo ($colFound && !isset($_POST['insert']))? '':'hidden'; ?>>
                        <button type="submit" class="btn btn-success btn-block" name="insert" value="<?php echo $target; ?>">Valider</button>
                    </p>
                </form>
                <p <?php echo (!$colFound || isset($_POST['insert']))? '':'hidden'; ?>>
                    <a href="database.php" class="btn btn-default btn-block">Retourner à l'importation</a>
                </p>
            </div>
        </section>
        
    </body>
</html>
