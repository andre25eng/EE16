window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var keys = [];
    var raket = { x: 0, y: 0 };

    var imgRaket = new Image();
    imgRaket.src = "raket.png";

    function reset() {
        raket.x = 375;
        raket.y = 500;
    }
    
    function ritaRaket() {
        ctx.beginPath();
        ctx.drawImage(imgRaket, raket.x, raket.y, 50, 50);
        ctx.closePath();
    }

    
    document.addEventListener("keyup", slappPil);
    document.addEventListener("keydown", tryckPil);
    function tryckPil(e) {
        keys[e.key] = true;
    }
    function slappPil(e) {
        keys[e.key] = false;
    }

    function uppdateraRaket() {
        if (keys["ArrowLeft"]) {
            raket.x -= 10;
        }
        if (keys["ArrowRight"]) {
            raket.x += 10;
        }
        if (keys["ArrowUp"]) {
            raket.y -= 10;
        }
        if (keys["ArrowDown"]) {
            raket.y += 10;
        }

        if (raket.x == 0) {
            raket.x = 800;
        }
        if (raket.x == 800) {
            raket.x = 0;
        }
        if (raket.y == 0) {
            raket.y = 600;
        }
        if (raket.y == 700) {
            raket.y = 0;
        }
    }

    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 800, 600);

        uppdateraRaket();
        ritaRaket();

        
        requestAnimationFrame(gameLoop);
    }
    gameLoop();
}