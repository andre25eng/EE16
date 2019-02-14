window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var map = [];
    var keys = [];
    var player = { x: 0, y: 0 };
    var img = new Image();
    var points = 0;

    var imgPlayer = new Image();
    imgPlayer.src = "favicon.png";

    map = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1],
        [1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1],
        [1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1],
        [1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1],
        [1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1],
        [1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1],
        [1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 1],
        [1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1],
        [1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1],
        [1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1],
        [1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1],
        [1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1],
        [1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1],
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    ];

    class Mynt {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.imgMynt = new Image();
            this.imgMynt.src = "coin.png";
            this.live = true;
        }
        reset() {
            this.x = Math.ceil(Math.random() * 24);
            this.y = Math.ceil(Math.random() * 24);
        }
        ritaMynt(x, y) {
            ctx.beginPath();
            ctx.drawImage(this.imgMynt, this.x * 20, this.y * 20, 20, 20);
            ctx.closePath();
        }
        spawnaMynt() {
            if (this.live) {
                if (map[this.y][this.x] == 1) {
                    this.x = Math.ceil(Math.random() * 24);
                    this.y = Math.ceil(Math.random() * 24);
                } else {
                    this.ritaMynt(this.x, this.y);
                }
            }
        }
        getPoints() {
            if (this.live && player.x == this.x && player.y == this.y) {
                points += 1;
                this.live = false;
                console.log("points =" + points);
            }
        }
    }

    var mynt1 = new Mynt();
    var mynt2 = new Mynt();
    var mynt3 = new Mynt();
    var mynt4 = new Mynt();
    var mynt5 = new Mynt();
    var mynt6 = new Mynt();
    var mynt7 = new Mynt();
    var mynt8 = new Mynt();
    var mynt9 = new Mynt();
    var mynt10 = new Mynt();

    class Monster {
        constructor() {
            this.x = 0;
            this.y = 0;
            this.imgMonster = new Image();
            this.imgMonster.src = "monster.png";
        }
        ritaMonster() {
            ctx.beginPath();
            ctx.drawImage(imgMonster, this.x * 20, this.y * 20, 20, 20);
            ctx.closePath();
        }
        uppdateraMonster() {
            this.gamlaMX = this.x;
            this.gamlaMY = this.y;
    
            this.x += Math.ceil(Math.random() * 3 - 2);
            this.y += Math.ceil(Math.random() * 3 - 2);
    
            if (map[this.y][this.x] == 1) {
                this.x = this.gamlaMX;
                this.y = this.gamlaMY;
            }
        }
        reset() {
            var that = this;
            setInterval(function() {
                that.uppdateraMonster();
            }, 300);
        }
        death(player) {
            if (player.x == this.x && player.y == this.y) {
                alert("You died!");
            }
        }
    }

    var monster1 = new Monster();
    var monster2 = new Monster();
    var monster3 = new Monster();
    var monster4 = new Monster();

    function reset() {
        player.x = 1;
        player.y = 1;

        monster1.x = 23;
        monster1.y = 23;
        monster1.reset();
        monster2.x = 23;
        monster2.y = 1;
        monster2.reset();
        monster3.x = 1;
        monster3.y = 23;
        monster3.reset();
        monster4.x = 13;
        monster4.y = 13;
        monster4.reset();

        mynt1.reset();
        mynt2.reset();
        mynt3.reset();
        mynt4.reset();
        mynt5.reset();
        mynt6.reset();
        mynt7.reset();
        mynt8.reset();
        mynt9.reset();
        mynt10.reset();
    }

    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 20, 20);
        ctx.fillStyle = "darkBlue";
        ctx.fill();
        ctx.closePath();
    }

    function ritaLabyrint() {
        for (var j = 0; j < 25; j++) {
            for (var i = 0; i < 25; i++) {
                if (map[j][i] == 0) {
                    ritaKloss(i * 20, j * 20);
                }
            }
        }
    }

    function ritaPlayer() {
        ctx.beginPath();
        ctx.drawImage(imgPlayer, player.x * 20, player.y * 20, 20, 20);
        ctx.closePath();
    }

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

    function win() {
        if (points == 10) {
            alert("You win!");
        }
    }

    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 700, 700);

        ritaLabyrint();
        ritaPlayer();

        mynt1.spawnaMynt();
        mynt2.spawnaMynt();
        mynt3.spawnaMynt();
        mynt4.spawnaMynt();
        mynt5.spawnaMynt();
        mynt6.spawnaMynt();
        mynt7.spawnaMynt();
        mynt8.spawnaMynt();
        mynt9.spawnaMynt();
        mynt10.spawnaMynt();

        mynt1.getPoints();
        mynt2.getPoints();
        mynt3.getPoints();
        mynt4.getPoints();
        mynt5.getPoints();
        mynt6.getPoints();
        mynt7.getPoints();
        mynt8.getPoints();
        mynt9.getPoints();
        mynt10.getPoints();

        monster1.uppdateraMonster();
        monster2.uppdateraMonster();
        monster3.uppdateraMonster();
        monster4.uppdateraMonster();

        monster1.death(player);
        monster2.death(player);
        monster3.death(player);
        monster4.death(player);

        requestAnimationFrame(gameLoop);
        win();
    }
    gameLoop();
}