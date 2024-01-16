<?php
// index.php

require_once 'Autoloader.php';

// Konekcija na bazu podataka
$db = Database::getInstance()->getConnection();

// Ovdje možete izvršiti upite i raditi s bazom podataka
// Na primjer:
$stmt = $db->prepare("SELECT * FROM neka_tablica");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Ispis rezultata
print_r($result);
