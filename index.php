<!DOCTYPE html>
<html>

<head>
    <title>Happy Birthday Andre!</title>
    <style>
        .floating-balloons {
            position: fixed;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .balloon {
            position: absolute;
            width: 30px;
            height: 40px;
            border-radius: 50%;
            animation: float 15s infinite;
            opacity: 0.6;
        }

        .confetti {
            position: fixed;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .confetti-piece {
            position: absolute;
            width: 8px;
            height: 8px;
            animation: confettiFall 6s infinite;
        }

        .header {
            font-family: 'Arial', sans-serif;
            font-size: 40px;
            background: linear-gradient(45deg, #ff5d85, #ffa8b5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);
            text-align: center;
            margin: 20px;
            padding: 20px;
            border: 3px solid transparent;
            border-image: linear-gradient(45deg, #ff5d85, #ffa8b5) 1;
            animation: borderRotate 4s linear infinite;
        }

        body {
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
            overflow-x: hidden;
            padding: 20px;
            padding-top: 50px;
        }

        .cake-container {
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 8px double #fff;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            box-shadow:
                0 0 20px rgba(0, 0, 0, 0.1),
                inset 0 0 30px rgba(255, 255, 255, 0.2),
                0 0 15px rgba(255, 192, 203, 0.5);
            animation: borderGlow 2s infinite alternate, float 6s ease-in-out infinite;
            position: relative;
            overflow: hidden;
        }

        .cake-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    transparent 20%,
                    rgba(255, 255, 255, 0.1) 40%,
                    rgba(255, 255, 255, 0.1) 60%,
                    transparent 80%);
            animation: shine 3s infinite;
            pointer-events: none;
        }

        .cake {
            position: relative;
            width: 250px;
            height: 200px;
            margin: 150px auto;
            text-align: center;
            transform-origin: center bottom;
            animation: cakeAppear 1.5s ease-out;
        }

        .cake-base {
            background: linear-gradient(to right, #f9c6cf, #ff9a9e);
            height: 100px;
            width: 250px;
            border-radius: 10px;
            position: absolute;
            bottom: 0;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .cake-middle {
            background: linear-gradient(to right, #ff99ab, #ff7b98);
            height: 80px;
            width: 230px;
            border-radius: 10px;
            position: absolute;
            bottom: 100px;
            left: 10px;
            transition: transform 0.3s ease 0.1s;
        }

        .cake-top {
            background: linear-gradient(to right, #ff7b98, #ff5d85);
            height: 60px;
            width: 210px;
            border-radius: 10px;
            position: absolute;
            bottom: 180px;
            left: 20px;
            transition: transform 0.3s ease 0.2s;
        }

        .cake:hover .cake-base {
            transform: translateY(10px);
        }

        .cake:hover .cake-middle {
            transform: translateY(-5px);
        }

        .cake:hover .cake-top {
            transform: translateY(-10px);
        }

        .candle {
            background: linear-gradient(#ffeb3b, #fdd835);
            width: 20px;
            height: 40px;
            position: absolute;
            bottom: 240px;
            left: 115px;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .flame {
            background: linear-gradient(#ff5722, #ff9800);
            width: 15px;
            height: 25px;
            position: absolute;
            border-radius: 50% 50% 20% 20%;
            bottom: 280px;
            left: 117px;
            animation: flicker 1s infinite;
            cursor: pointer;
        }

        .text {
            font-family: 'Arial', sans-serif;
            font-size: 32px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
            animation: bounce 2s infinite;
            text-align: center;
        }

        .message {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.2));
            border-radius: 20px;
            padding: 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transform: translateY(0);
            transition: transform 0.3s ease;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
            max-width: 600px;
            text-align: center;
            opacity: 0;
            animation: fadeIn 2s ease-in forwards 1.5s;
            margin-top: 15px;
            margin-bottom: 15px;
            padding: 10px;
        }

        .message:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .sprinkles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .sprinkle {
            position: absolute;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #fff;
            animation: sprinklesFall 2s infinite;
        }

        cake-container {
            padding: 40px;
            border: 8px double #fff;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            animation: borderGlow 2s infinite alternate;
        }

        .photo-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 10px;
            margin: 20px 0;
            gap: 20px;
            width: 90%;
            max-width: 900px;
        }

        .photo-frame {
            width: 250px;
            height: 250px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow:
                0 5px 15px rgba(0, 0, 0, 0.2),
                0 0 20px rgba(255, 255, 255, 0.3),
                inset 0 0 20px rgba(255, 255, 255, 0.2);
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .photo-frame:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow:
                0 15px 30px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 255, 255, 0.5),
                inset 0 0 30px rgba(255, 255, 255, 0.3);
        }

        .photo-wrapper {
            width: 250px;
            margin: 10px;
        }

        .photo-message {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.8));
            border-radius: 12px;
            padding: 15px;
            font-family: 'Arial', sans-serif;
            color: #333;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(10px);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            width: 250px;
            display: none;
            margin-top: 10px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-100px) translateX(20px);
            }
        }

        @keyframes confettiFall {
            0% {
                transform: translateY(-100vh) rotate(0deg);
            }

            100% {
                transform: translateY(100vh) rotate(360deg);
            }
        }

        @keyframes glow {
            from {
                text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6;
            }
        }

        @keyframes shine {
            from {
                transform: rotate(0deg) translate(-50%, -50%);
            }

            to {
                transform: rotate(360deg) translate(-50%, -50%);
            }
        }

        @keyframes frameGlow {
            from {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            }

            to {
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.6);
            }
        }

        @keyframes borderGlow {
            from {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            }

            to {
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.6);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes cakeAppear {
            from {
                transform: translateY(100vh);
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes flicker {

            0%,
            100% {
                transform: scale(1) rotate(-5deg);
            }

            50% {
                transform: scale(1.2) rotate(5deg);
            }
        }

        @keyframes sprinklesFall {
            0% {
                transform: translateY(-10px);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateY(10px);
                opacity: 0;
            }
        }

        @keyframes borderRotate {
            from {
                border-image: linear-gradient(0deg, #ff5d85, #ffa8b5) 1;
            }

            to {
                border-image: linear-gradient(360deg, #ff5d85, #ffa8b5) 1;
            }
        }

        .text {
            font-family: 'Arial', sans-serif;
            font-size: 32px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-top: 320px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-20px) scale(1.1);
            }
        }
    </style>
</head>

<body>

    <body>
        <div class="header">
            HAPPY BIRTHDAY SELFFF LOVE YOUU!!!!
        </div>
        <div class="cake-container">
            <div class="cake">
                <div class="flame"></div>
                <div class="candle"></div>
                <div class="cake-top"></div>
                <div class="cake-middle"></div>
                <div class="cake-base"></div>
                <div class="sprinkles" id="sprinkles"></div>
            </div>
        </div>
        <div class="text">Happy Birthday Andre! 🎉</div>
        <div class="message">
            My message to my future self is unta diha strong pa japon ka and ayaw palabig pa stress sa mga happenings
            diri sa world I love youu self and more birthdays to come 🌟✨
        </div>
        <div class="photo-container">
            <div class="photo-wrapper">
                <div class="photo-frame" onclick="toggleMessage(1)">
                    <img src="1.JPG" alt="Birthday Photo 1">
                </div>
                <div class="photo-message" id="message-1">
                    Happy birthday to me! Keep growing and glowing! 🌟
                </div>
            </div>
            <div class="photo-wrapper">
                <div class="photo-frame" onclick="toggleMessage(2)">
                    <img src="3.JPG" alt="Birthday Photo 2">
                </div>
                <div class="photo-message" id="message-2">
                    Another year of amazing memories and adventures! 🎉
                </div>
            </div>
            <div class="photo-wrapper">
                <div class="photo-frame" onclick="toggleMessage(3)">
                    <img src="2.JPG" alt="Birthday Photo 3">
                </div>
                <div class="photo-message" id="message-3">
                    Grateful for another beautiful year! 💖
                </div>
            </div>
        </div>
        <div class="floating-balloons" id="balloons"></div>
        <div class="confetti" id="confetti">
        </div>

        <audio id="birthdaySong" loop>
            <source src="HAPPY Birthday Song, Happy Birthday to You.mp3" type="audio/mpeg">
        </audio>

        <script>
            // Add sprinkles randomly
            const sprinklesContainer = document.getElementById('sprinkles');
            for (let i = 0; i < 30; i++) {
                const sprinkle = document.createElement('div');
                sprinkle.className = 'sprinkle';
                sprinkle.style.left = Math.random() * 100 + '%';
                sprinkle.style.top = Math.random() * 100 + '%';
                sprinkle.style.backgroundColor = `hsl(${Math.random() * 360}deg, 100%, 75%)`;
                sprinkle.style.animationDelay = `${Math.random() * 2}s`;
                sprinklesContainer.appendChild(sprinkle);
            }

            // Flame interaction
            document.querySelector('.flame').addEventListener('click', function () {
                this.style.display = 'none';
                alert('You blew out the candle! Make a wish! 🎂');
                document.body.style.background = 'linear-gradient(45deg, #2196f3, #4caf50)';
            });
            // Add balloons
            const balloonsContainer = document.getElementById('balloons');
            const colors = ['#ff9a9e', '#fad0c4', '#ff5d85', '#ff7b98'];
            for (let i = 0; i < 15; i++) {
                const balloon = document.createElement('div');
                balloon.className = 'balloon';
                balloon.style.left = Math.random() * 100 + '%';
                balloon.style.top = Math.random() * 100 + '%';
                balloon.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                balloon.style.animationDelay = `${Math.random() * 5}s`;
                balloonsContainer.appendChild(balloon);
            }

            // Add confetti
            const confettiContainer = document.getElementById('confetti');
            for (let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti-piece';
                confetti.style.left = Math.random() * 100 + '%';
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.animationDelay = `${Math.random() * 6}s`;
                confettiContainer.appendChild(confetti);
            }

            function toggleMessage(photoId) {
                const message = document.getElementById(`message-${photoId}`);
                const allMessages = document.querySelectorAll('.photo-message');

                allMessages.forEach(msg => {
                    if (msg !== message) {
                        msg.style.display = 'none';
                    }
                });

                message.style.display = message.style.display === 'block' ? 'none' : 'block';
            }

            // Fix audio autoplay
            window.addEventListener('click', function () {
                const audio = document.getElementById('birthdaySong');
                audio.play().catch(function (error) {
                    console.log("Audio playback failed:", error);
                });
            }, { once: true });

            document.addEventListener('DOMContentLoaded', function () {
                const audio = document.getElementById('birthdaySong');
                const playPromise = audio.play();

                if (playPromise !== undefined) {
                    playPromise.then(_ => {
                        console.log("Autoplay started");
                    }).catch(error => {
                        console.log("Autoplay prevented");
                    });
                }
            });
        </script>
    </body>

</html>
