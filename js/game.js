let playerZone = document.getElementById('playerZone');
let enemyZone = document.getElementById('enemyZone');

for (let i = 0; i < 100; i++) {
    let playerDivBlock = document.createElement('div');
    playerDivBlock.classList.add('player-block');
    playerZone.appendChild(playerDivBlock);

    let enemyDivBlock = document.createElement('div');
    enemyDivBlock.classList.add('enemy-block');
    enemyZone.appendChild(enemyDivBlock);
}

function playerClick(evt) {
    let playerBlockID = evt.currentTarget.id;
    $.ajax({
        type: "POST",
        url: 'sendmove.php',
        data: {position: playerBlockID},
        success: function() {
            playerBlocks[playerBlockID].classList.add("player-block-off"); 
            playerBlocks[playerBlockID].removeEventListener('click', playerClick, false);
          },
        error: function() {
            alert("Connection Error");
        }
    });
}

let playerBlocks = document.getElementsByClassName('player-block');
let enemyBlocks = document.getElementsByClassName('enemy-block');

$(document).ready(function() {
    for (let i = 0; i < 100; i++) {
        playerBlocks[i].addEventListener('click', playerClick, false);
        playerBlocks[i].id = i;
    }
});