<?php

    require 'fpdf181/fpdf.php';
    
    $pdf = new FPDF();
    $pdf->SetTitle(utf8_decode("Liste des livres empruntés"));
    $pdf->AddPage();
    $pdf->SetFont("Arial", 'B', 20);
    $pdf->Cell(40);
    $pdf->Cell(110, 15, utf8_decode("Livres empruntés"), 1, 1, 'C');
    $pdf->Ln();
    $pdf->SetFont("Arial", 'B', 13);
    $pdf->Cell(70, 10, "Titre", 1, 0, 'C');
    $pdf->Cell(60, 10, "Auteur", 1, 0, 'C');
    $pdf->Cell(60, 10, "Emprunteur", 1, 1, 'C');
    $pdf->Ln(3);
    $pdf->SetFont("Arial", '', 12);
    
    $db = new pdo('mysql:host=localhost;dbname=BDDbibliotheque', 'root', 'password');
    
    $select = "SELECT * FROM livres WHERE idEmprunteur IS NOT NULL ORDER BY titre";
    $query = $db->prepare($select);
    $query->execute();
    while ($book = $query->fetch(PDO::FETCH_ASSOC)) {
        $pdf->Cell(70, 10, utf8_decode($book['titre']), 'B');
        $pdf->Cell(60, 10, utf8_decode($book['auteur']), 'B');
        
        $select2 = "SELECT nom, prenom FROM eleves WHERE id=$book[idEmprunteur]";
        $query2 = $db->prepare($select2);
        $query2->execute();
        $pupil = $query2->fetch(PDO::FETCH_ASSOC);
        $name = utf8_decode($pupil['nom']) . " " . utf8_decode($pupil['prenom']);
        if (strlen($name)>22) {
            if (strlen($name)>25) {
                if (strlen($name)>29) 
                    $pdf->SetFont("Arial", '', 8);
                else
                    $pdf->SetFont("Arial", '', 9);
            } else
                $pdf->SetFont("Arial", '', 11);
            $pdf->Cell(60, 10, $name , 'B', 1);
            $pdf->SetFont("Arial", '', 13);
        } else
            $pdf->Cell(60, 10, $name , 'B', 1);
    }
    
    $pdf->Output();

