<?php

$db = new pdo('mysql:host=localhost;dbname=BDDbibliotheque', 'root', 'password');

$select = "SELECT * FROM livres WHERE idEmprunteur IS NOT NULL";
$query = $db->prepare($select);
$query->execute();

if ($result = $query->fetch(PDO::FETCH_ASSOC))
    echo 'true';
else
    echo 'false';

