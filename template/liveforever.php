<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'>
    <title>What It's Like To Live Forever</title>
</head>

<audio id="hoverSound" src="sounds/whatdoyoulookfor.mp3" preload="auto"></audio>

<style>
    @font-face {
        font-family: ArsenicaTrial;
        src: url(fonts/ArsenicaTrial-Regular.ttf) format('truetype');
    }

    @font-face {
        font-family: ArsenicaTrial-Bold;
        src: url(fonts/ArsenicaTrial-Bold.ttf) format('truetype');
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header {
        font-family: ArsenicaTrial;
        text-align: center;
        font-size: 3vw;
        color: #c7b518;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    body {
        font-family: Garamond;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        background-image: url('images/iknowwhatyouaredoing.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .content {
        width: 100%;
        max-width: 1000px;
        text-align: center;
        padding: 20px;
    }

    form {
        width: 100%;
    }

    .input-container {
        position: relative;
        width: 100%;
    }

    input[type="text"] {
        background: transparent;
        border: none;
        width: 100%;
        color: #c7b518;
        font-size: 1.2rem;
        font-family: Garamond;
        padding: 10px 0;
        outline: none;
        text-align: center;
        border-bottom: 2px solid #c7b518;
    }

    .input-container::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        height: 2px;
        width: 0%;
        background-color: #c7b518;
        transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
        transform: translateX(-50%);
    }

    .input-container:hover::after {
        width: 90%;
    }

    .submit-button {
        display: none;
    }
</style>

<body>
    <div class="container">
        <div class="content">
            <h1 class="header">TELL ME WHAT IT'S LIKE TO LIVE FOREVER</h1>
            
            <form action="process_forever.php" method="POST">
                <div class="input-container">
                    <input type="text" name="howtoliveforever" placeholder="Your thoughts..." required>
                </div>
                <input type="submit" class="submit-button" value="Submit">
            </form>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const input = document.querySelector('input[name="howtoliveforever"]');
            const hoverSound = document.getElementById('hoverSound');

            input.addEventListener('mouseenter', () => {
                if (hoverSound.paused) {
                    hoverSound.play();
                }
            });

            input.addEventListener('keydown', (event) => {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    input.form.submit();
                }
            });
        });
    </script>
</body>
</html>
