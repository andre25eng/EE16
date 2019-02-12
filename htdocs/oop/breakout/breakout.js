window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var bollX, bollY, vx, vy, racketX, racketY, antalKlossar;
    var keys = [];
    var klossar = [];

    function reset() {
        bollX = 400;
        bollY = 300;
        vx = Math.ceil(Math.random() * 5 + 3);
        vy = Math.ceil(Math.random() * 3 + 3);
        racketX = 360;
        racketY = 560;

        antalKlossar = 0;
        skapaAllaKlossar();
    }
    
    function ritaBoll(x, y) {
        ctx.beginPath();
        ctx.arc(x, y, 20, 0, Math.PI * 2, false);
        ctx.fillStyle = "cyan";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath();
    }

    function ritaRacket(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 80, 10);
        ctx.fillStyle = "cyan";
        ctx.fill();
        ctx.closePath();
    }

    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 100, 30);
        ctx.fillStyle = "#FFFF00";
        ctx.fill();
        ctx.closePath();
    }

    function skapaAllaKlossar() {
        for (let j = 1; j < 5; j++) {
            klossar[j] = [];
            for (let i = 0; i < 6; i++) {
                klossar[j][i] = { x: 40 + i * 120, y: j * 50, hit: false };
                antalKlossar++;
            }
        }
    }

    function uppdateraAllaKlossar() {
        for (let j = 1; j < 5; j++) {
            for (let i = 0; i < 6; i++) {
                if (!klossar[j][i].hit) {
                    ritaKloss(40 + i * 120, j * 50);
                }
            }
        }
    }

    function traffaKloss(params) {
        for (let j = 1; j < 5; j++) {
            for (let i = 0; i < 6; i++) {
                if (!klossar[j][i].hit) {
                    if ((bollX >= klossar[j][i].x && bollX <= (klossar[j][i].x + 100)) && (bollY >= klossar[j][i].y && bollY <= (klossar[j][i].y + 30))) {
                        klossar[j][i].hit = true;
                        vy = - vy;
                        antalKlossar--;
                    }
                }
            }
        }
    }

    document.addEventListener("keyup", slappPil);
    document.addEventListener("keydown", tryckPil);
    function tryckPil(e) {
        keys[e.key] = true;
    }
    function slappPil(e) {
        keys[e.key] = false;
    }

    function uppdateraRacket() {
        if (keys["ArrowLeft"] && racketX > 10) {
            racketX -= 10;
        }
        if (keys["ArrowRight"] && racketX < 720) {
            racketX += 10;
        }
    }

    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 800, 600);

        ritaBoll(bollX, bollY);
        bollX += vx;
        bollY += vy;
        
        if (bollY <= 0 || bollY >= 600) {
            vy = - vy;
        }

        if (bollX <= 0 || bollX >= 800) {
            vx = - vx;
        }

        uppdateraAllaKlossar();
        traffaKloss();
        uppdateraRacket();
        ritaRacket(racketX, racketY);

        if (bollY >= 560) {
            if ((bollX >= (racketX - 20)) && (bollX <= (racketX + 90))) {
                vy = -vy;
            }
        }
        if (((bollY + 10)>= racketY && (bollY <= (racketY + 10))) && (bollX >= racketX && (bollX <= (racketX + 80)))) {
            vy = -vy;
        }

        if (bollY >= 600) {
                alert("Game Over!");
                reset();
        }

        if (antalKlossar == 0) {
            alert("You won!");
            reset();
        }
        
        requestAnimationFrame(gameLoop);
    }
    gameLoop();
}