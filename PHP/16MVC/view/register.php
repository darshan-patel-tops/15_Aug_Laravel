<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" />
    <title>Register Page</title>
</head>

<body>
    <section>
        <div class="login-container">
            <h2>Register Page</h2>
            <form action="" method="post">
                <div class="input-box"> <span class="icon"> <i class="fa-solid fa-envelope"></i> </span> <input required
                        type="email" name="email" id="email"> <label for="email">Enter your email</label> </div>
                <div class="input-box"> <span class="icon"> <i class="fa-solid fa-user"></i> </span> <input required
                        type="text" name="username" id="username"> <label for="email">Enter your username</label> </div>
                <div class="input-box"> <span class="icon"> <i class="fa-solid fa-lock"></i> </span> <input required
                        type="password" name="password" id="contraseña"> <label for="contraseña">Enter your password</label> </div>
                <!-- <div class="remember-forgot"> <label> <input type="checkbox"> Recordarme </label> <a href="#">Olvidé la
                        contraseña</a> 
                    </div>  -->
                    <button type="submit" name="register">Register</button>
            </form>
            <div class="create-account"> <a href="login">Already Have an account ????</a> </div>
        </div>
    </section>
</body>

</html>


<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800&display=swap'); */

    *,
    *::after,
    *::before {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a::after {
        content: "";
    }

    a:hover::after {
        display: block;
        border: 1px solid white;
        animation: under-line .5s ease-in-out 1;
    }

    @keyframes under-line {
        0% {
            width: 0%;
        }

        100% {
            width: 100%;
        }
    }

    section {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url(https://images2.alphacoders.com/130/1308322.jpeg) center;
        background-size: cover;
        color: #fff;
    }

    .login-container {
        height: 450px;
        width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        backdrop-filter: blur(5px);
        border: 1px white solid;
        border-radius: 20px;
    }

    h2 {
        font-size: 1.75em;
        margin: 0 0 20px;
        filter: drop-shadow(0 6px 2px black);
    }

    .input-box {
        position: relative;
        border-bottom: 2px solid white;
        margin: 30px 0;
        width: 310px;
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        pointer-events: none;
        font-size: 1em;
        transition: .5s;
    }

    .input-box input:valid~label,
    .input-box input:focus~label {
        top: -5px;
    }

    .input-box input {
        background: transparent;
        border: none;
        outline: none;
        color: white;
        width: 100%;
        height: 50px;
        font-size: 1em;
        padding: 0 40px 0 5px;
    }

    .input-box .icon {
        position: absolute;
        right: 8px;
        font-size: 1.4em;
        line-height: 45px;
    }

    .remember-forgot {
        display: flex;
        justify-content: space-between;
        width: 310px;
        margin: 0 0 20px;
    }

    button {
        height: 40px;
        width: 310px;
        border-radius: 20px;
        margin: 0 0 10px;
        outline: none;
        border: none;
        background: white;
        color: black;
        transition: .3s;
    }

    button:hover {
        background-color: rgba(255, 255, 255, .8);
    }

    .create-account {
        margin: 12px 0 0 0;
    }

    @media screen and (max-width: 360px) {
        .login-container {
            height: 100vh;
            border: none;
            border-radius: none;
        }
    }
</style>