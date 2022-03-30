<?php
/*
define('DSN', 'mysql:host=localhost;dbname=BattleshipGame');
define('USER', 'watsum08');
define('PASS', 'Motdepasse123-');
*/

$dsn = 'mysql:host=localhost;dbname=BattleshipGame';
$username = 'watsum08';
$password = 'Motdepasse123-';

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die('Erreur de connexion: ' . $e->getMessage());
}
?>