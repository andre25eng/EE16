window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var antalKlossar;
    var keys = [];
    var klossar = [];

    racket = { x: 0, y: 0 };

    var imgRaket = new Image();
    imgRaket.src = "raket.png";

    class Skott {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.hastighet = 0;
            this.live = true;
            this.shot = false;
        }
        rita() {
            ctx.beginPath();
            ctx.rect(this.x, this.y, 5, 5);
            ctx.fillStyle = "cyan";
            ctx.fill();
            ctx.closePath();
        }
        uppdatera() {
            if (this.shot) {
                this.x += this.hastighet;
            }
        }
        kollision() {

        }
    }

    var skott1 = new Skott();

    function reset() {
        racket.x = 360;
        racket.y = 560;

        skott1.y = racket.y;

        antalKlossar = 0;
        skapaAllaKlossar();
    }

    function ritaRacket() {
        ctx.beginPath();
        ctx.drawImage(imgRaket, racket.x, racket.y, 50, 50);
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

    /* function traffaKloss(params) {
        for (let j = 1; j < 5; j++) {
            for (let i = 0; i < 6; i++) {
                if (!klossar[j][i].hit) {
                    if ((boll.x >= klossar[j][i].x && boll.x <= (klossar[j][i].x + 100)) && (boll.y >= klossar[j][i].y && boll.y <= (klossar[j][i].y + 30))) {
                        klossar[j][i].hit = true;
                        boll.vy = - boll.vy;
                        antalKlossar--;
                    }
                }
            }
        }
    } */

    document.addEventListener("keyup", slappPil);
    document.addEventListener("keydown", tryckPil);
    function tryckPil(e) {
        keys[e.key] = true;
    }
    function slappPil(e) {
        keys[e.key] = false;
    }

    function uppdateraRacket() {
        if (keys["ArrowLeft"] && racket.x > 10) {
            racket.x -= 10;
        }
        if (keys["ArrowRight"] && racket.x < 720) {
            racket.x += 10;
        }
        if (keys[" "]) {
            skott1.hastighet = 10;
            skott1.shot = true;
        }
        skott1.y -= skott1.hastighet;
    }

    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 800, 600);

        uppdateraAllaKlossar();
        uppdateraRacket();
        ritaRacket();
        skott1.rita();

        if (antalKlossar == 0) {
            alert("You won!");
            reset();
        }
        
        requestAnimationFrame(gameLoop);
    }
    gameLoop();
}