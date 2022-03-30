<?php
    ini_set('display_errors', 1);
    require_once 'connect-inc.php';

    $position = $_POST['position'];
    echo "<script>console.log($position)</script>";

    $sql = "INSERT INTO Game(player1_lastMove) VALUES ($position)";

    $result = $dbh->exec($sql);

    if (!$result) {
        print "Failed to send move: " . $conn->errorMsg();
    }

    $dbh = null;
?>