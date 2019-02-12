window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var 
        bollX = 200;
        bollY = 400;
        dx = Math.ceil(Math.random() * 10);
        dy = Math.ceil(Math.random() * 10);
        racketX = 10;
        racketY = 100;



    /* ctx.beginPath();
    ctx.rect(0, 0, 800, 600);
    ctx.fillStyle = "#0000FF";
    ctx.fill();
    ctx.closePath();

    ctx.beginPath();
    ctx.rect(250, 0, 100, 600);
    ctx.fillStyle = "#FFFF00";
    ctx.fill();
    ctx.closePath();

    ctx.beginPath();
    ctx.rect(0, 250, 800, 100);
    ctx.fillStyle = "#FFFF00";
    ctx.fill();
    ctx.closePath(); */

    function boll(x, y) {
        ctx.beginPath();
        ctx.arc(x, y, 20, 0, Math.PI * 2, false);
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath();
    }

    function racket(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 10, 80);
        ctx.fillStyle = "#FFFF00";
        ctx.fill();
        ctx.closePath();
    }

    document.addEventListener("keydown", flyttaRacket);
    function flyttaRacket(e) {
        console.log("Flytta racket");
        if (e.key == "ArrowUp") {
            racketY -= 10;
        }

        if (e.key == "ArrowDown") {
            racketY += 10;
        }
        
    }

    function loop() {
        ctx.clearRect(0, 0, 800, 600);

        boll(bollX, bollY);
        bollX += dx;
        bollY -= dy;
        
        if (bollY <= 0) {
            dy = - dy;
        }

        if (bollX >= 800) {
            dx = - dx;
        }

        if (bollY >= 600) {
            dy = - dy;
        }

        if (bollX <= 0) {
            dx = - dx;
        }

        racket(racketX, racketY);
    }
    setInterval(loop, 25);
}