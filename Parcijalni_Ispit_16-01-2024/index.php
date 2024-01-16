<?php

require_once 'Autoloader.php';

$db = Database::getInstance()->getConnection();

$stmt = $db->prepare("SELECT * FROM neka_tablica");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result);
