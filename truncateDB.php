<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['reset'])) {
    $db = new pdo('mysql:host=localhost;dbname=BDDbibliotheque', 'root', 'password');
    
    $reset = "TRUNCATE eleves";
    $query = $db->prepare($reset);
    
    if ($query->execute()) {
        $update = "UPDATE livres SET idEmprunteur=NULL, date_emprun=NULL";
        $query1 = $db->prepare($update);
        echo $query1->execute()? 'true':'false';
    }
}

