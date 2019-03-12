window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var keys = [];
    var raket = { x: 0, y: 0, v: 0, h: 0 };

    var imgRaket = new Image();
    imgRaket.src = "raket.png";

    function reset() {
        raket.x = 375;
        raket.y = 500;
    }
    
    function rad(v) {
        return v / 180 * Math.PI;
    }

    function ritaRaket() {
        raket.x = raket.h * Math.cos(raket.v);
        raket.y = raket.h * Math.cos(raket.v);
        raket.v = 0;
        raket.h = 0;

        ctx.translate(raket.x, raket.y);
        ctx.rotate(rad(raket.v));
        ctx.drawImage(imgRaket, 0 - 25, 0 -25, 50, 50);
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
            raket.v -= 1;
        }
        if (keys["ArrowRight"]) {
            raket.v += 1;
        }
        if (keys["ArrowUp"]) {
            raket.h += 1;
        }

        if (raket.x < 0) {
            raket.x = 800;
        }
        if (raket.x > 800) {
            raket.x = 0;
        }
        if (raket.y < 0) {
            raket.y = 600;
        }
        if (raket.y > 600) {
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