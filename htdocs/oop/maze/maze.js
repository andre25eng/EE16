window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var map = [];
    var keys = [];
    var player = { x: 0, y: 0 };
    var monster = { x: 0, y: 0 };
    var img = new Image();

    var imgPlayer = new Image();
    imgPlayer.src = "favicon.png";
    
    var imgMonster = new Image();
    imgMonster.src = "monster.png";

    map = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 0, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 0, 1, 1, 1, 1, 0, 1],
        [1, 0, 0, 0, 1, 0, 0, 0, 0, 1],
        [1, 1, 1, 0, 1, 0, 1, 1, 1, 1],
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 1, 1, 0, 1, 1, 0, 1],
        [1, 0, 1, 0, 0, 0, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 1, 0, 1],
        [1, 0, 0, 0, 1, 0, 0, 0, 0, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ];

    function reset() {
        player.x = 1;
        player.y = 1;

        monster.x = 5;
        monster.y = 6;
    }

    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 50, 50);
        ctx.fillStyle = "#fff";
        ctx.fill();
        ctx.closePath();
    }

    function ritaLabyrint() {
        for (var j = 0; j < 11; j++) {
            for (var i = 0; i < 10; i++) {
                if (map[j][i] == 0) {
                    ritaKloss(i * 50, j * 50);
                }
            }
        }
    }

    function ritaPlayer(x, y) {
        ctx.beginPath();
        ctx.drawImage(imgPlayer, x * 50, y * 50, 50, 50);
        ctx.closePath();
    }

    function ritaMonster(x, y) {
        ctx.beginPath();
        ctx.drawImage(imgMonster, x * 50, y * 50, 50, 50);
        ctx.closePath();
    }

    function uppdateraMonster() {
        monster.x += Math.ceil(Math.random() * 3 - 2);
        monster.y += Math.ceil(Math.random() * 3 - 2);

        if (monster.x < 0) {
            monster.x = 10;
        }
        if (monster.x > 10) {
            monster.x = 0;
        }
        if (monster.y > 11) {
            monster.y = 0;
        }
        if (monster.y < 0) {
            monster.y = 11;
        }
    }
    setInterval(uppdateraMonster, 500);

    /* Styr character */
    document.addEventListener("keydown", uppdateraPlayer);

    function uppdateraPlayer(e) {
        var gamlaX = player.x;
        var gamlaY = player.y;

        if (e.key == "ArrowLeft") {
            player.x -= 1;
        }
        if (e.key == "ArrowRight") {
            player.x += 1;
        }
        if (e.key == "ArrowUp") {
            player.y -= 1;
        }
        if (e.key == "ArrowDown") {
            player.y += 1;
        }
        
        if (map[player.y][player.x] == 1) {
            player.x = gamlaX;
            player.y = gamlaY;
        }
    }

    function death() {
        if (player.x == monster.x && player.y == monster.y) {
            alert("You died!");
        }
    }

    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 700, 700);

        ritaLabyrint();

        ritaPlayer(player.x, player.y);
        ritaMonster(monster.x, monster.y);
        requestAnimationFrame(gameLoop);
        death();
    }
    gameLoop();
}