<!DOCTYPE html>
<html>
<head>
    <title>Flipbird Game</title>
    <style>
        #game-container {
            position: relative;
            width: 400px;
            height: 600px;
            border: 1px solid #000;
        }
        #bird {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div id="game-container">
        <div id="bird"></div>
    </div>
    <script>
        const bird = document.getElementById("bird");
        let gravity = 1;
        let jumpPower = -15;
        let birdPosition = 250;

        document.addEventListener("keydown", function (event) {
            if (event.keyCode === 32) {
                birdJump();
            }
        });

        function birdJump() {
            gravity = jumpPower;
        }

        function updateBird() {
            gravity += 1;
            birdPosition += gravity;
            bird.style.top = birdPosition + "px";

            if (birdPosition > 550) {
                birdPosition = 550;
                gravity = 0;
            }

            if (birdPosition < 0) {
                birdPosition = 0;
                gravity = 0;
            }
        }

        function gameLoop() {
            updateBird();
            requestAnimationFrame(gameLoop);
        }

        gameLoop();
    </script>
</body>
</html>






