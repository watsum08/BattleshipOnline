<?php
    ini_set('display_errors', 1);
    require_once 'connect-inc.php';

    function createRandomKey() {
        $letters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $keyLength = 6;
        $randomKey = '';

        for ($i = 0; $i < $keyLength; $i++) {
            $randomKey .= $letters[rand(0, strlen($letters) - 1)];
        }

        return $randomKey;
    }

    function createRoom($dbh) {
        $roomKey = null;
        $existingKey = null;
        //do {
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            try {
                $roomKey = createRandomKey();
                //$sqlSelect = 'SELECT COUNT(roomID) AS NbSameRooms FROM Room WHERE roomKey IS' . $roomKey . ';';
                $sqlSelect = "SELECT * FROM Room;";
                $sth = $dbh->query($sqlSelect);
                $existingKey = $sth->fetchAll(PDO::FETCH_ASSOC);
                foreach ($existingKey as $row) {
                    if($row['roomKey'] == $roomKey) {
                        $roomKey = createRandomKey();
                    }
                }
                echo $roomKey;
            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        $sqlDelete = "DELETE FROM Room WHERE gameEnded=1;";
        $sqlInsert = "INSERT INTO Room (roomKey, nbPlayers) VALUES ('$roomKey', 1);";
        $result2 = $dbh->exec($sqlDelete);
        $result3 = $dbh->exec($sqlInsert);

        $dbh = null;
    }

    createRoom($dbh);
?>