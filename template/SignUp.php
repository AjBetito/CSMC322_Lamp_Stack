<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'>
    <title>Sign Up</title>
</head>
<style>
    @font-face {
        font-family: ArsenicaTrial;
        src: url(fonts/ArsenicaTrial-Regular.ttf) format('truetype');
    }

    @font-face {
        font-family: ArsenicaTrial-Bold;
        src: url(fonts/ArsenicaTrial-Bold.ttf) format('truetype');
    }

    .header {
        font-family: ArsenicaTrial-Bold;
        text-align: center;
        font-size: 2.5em;
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
        background-image: url('images/iknowwhatyouaredoing.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .content {
        width: 400px;
    }

    .inputbox {
        padding-left: 10px;
        width: 400px;
        background-color: #011b05;
        margin-top: 5px;
        border: 2px solid #c7b518;
        display: flex;
        padding: 0 10px;
    }

    input {
        width: 100%;
        border: none;
        outline: none;
        padding: 10px;
        background: transparent;
        font-size: 1rem;
        color: #c7b518;
        font-family: Garamond;
    }

    .bold {
        font-weight: bold;
        margin-bottom: 0;
        color: #c7b518;
        font-size: 1.15em;
        padding: 0;
    }

    .registerbox {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .register-button {
        width: 100%;
        border: none;
        background: none;
        padding: 30px;
        cursor: pointer;
        color: #c7b518;
        font-family: Garamond;
        font-size: 1.5em;
        position: relative;
        overflow: hidden;
    }

    .register-button::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 10px;
        height: 2px;
        width: 0%;
        background-color: #c7b518;
        transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
        transform: translateX(-50%);
    }

    .register-button:hover::after {
        width: 100%;
    }

    .faded {
        color: #D3D3D3;
        margin-top: 15px;
        text-align: center;
    }
</style>
<body>
    <div class="container">
        <div class="content">
            <h1 class="header">SIGN UP</h1>


            <form action="process_signup.php" method="POST">
                <p class="bold">Name</p>
                <div class="inputbox">
                    <input type="text" name="name" required>
                </div>

                <p class="bold">Email</p>
                <div class="inputbox">
                    <input type="email" name="email" required>
                </div>

                <p class="bold">Password</p>
                <div class="inputbox">
                    <input type="password" name="password" required>
                </div>

                <p class="bold">Confirm Password</p>
                <div class="inputbox">
                    <input type="password" name="confirm_password" required>
                </div>

                <div class="registerbox">
                    <button type="submit" class="register-button">Register</button>
                </div>
            </form>

            <p class="faded">Have an account? Sign In</p>
        </div>
    </div>
</body>
</html>
