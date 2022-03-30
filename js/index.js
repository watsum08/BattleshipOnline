/* JOIN ROOM */

let joinRoomDiv = document.getElementById("div-join-room");
let joinRoomInput = document.getElementById("input-join-key");

function joinRoom() {
    if (joinRoomDiv.style.display != "block") {
        createRoomDiv.style.display = "none";
        joinRoomDiv.style.display = "block";
    } else {
        if (joinRoomInput.value === "12345") {
            alert("goodjob");
        } else {
            alert("invalid code");
        }
    }
}


/* CREATE ROOM */

let createRoomDiv = document.getElementById("div-create-room");

function createRoom() {
    if (createRoomDiv.style.display != "block") {
        joinRoomDiv.style.display = "none";
        createRoomDiv.style.display = "block";
    } else {
        $.ajax({
            type: "GET",
            url: '../php/createroom.php',
            dataType: "html",
            success: function() {
                alert("[GET] Room created");
              },
            error: function() {
                alert("[GET] Connection Error");
            }
        }).done(function (data) {
            $('#span-room-key').html(data);
            console.log(data);
        })
    }
}