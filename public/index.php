<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battleship - Lobby</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <main id="lobby-container">
        <div id="div-join-room" class="lobby-rooms">
            <label for="input-join-key" class="lobbyDivs-text">Entrer le code de la partie </label>
            <input type="number" id="input-join-key" name="input-join-key" placeholder="testkey: 12345" onkeydown="return event.keyCode !== 69">
        </div>
        <div id="div-create-room" class="lobby-rooms">
            <p class="lobbyDivs-text">Voici le code de la partie</p>
            <span id="span-room-key" class="lobbyDivs-text">123456</span>
        </div>

        <div id="lobby-btn-container">
            <button id="btn-join-room" onclick="joinRoom()">Rejoindre une partie</button>
            <button id="btn-create-room" onclick="createRoom()">Créer une partie</button>
        </div>
    </main>

    <script defer type="application/javascript" src="../js/index.js"></script>
</body>
</html>