<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="../assets/images/logo.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a53009ca2f.js" crossorigin="anonymous"></script>

    <title>Orama Gaming</title>
</head>
<body>
    <div class="main-wrapper">
        <div class="login-box">
            <div class="login-image">
                <div class="text-baloon">
                    <img id="baloon" src="../../assets/images/baloon.svg" alt="" srcset="">
                </div>
                <div class="illustration">
                    <img src="../../assets/images/finance_app.svg" alt="" srcset="">
                </div>
                <div class="button">
                    <button id="btn-mobile">Acesse também pelo celular</button>
                </div>
            </div>
            <div class="login-form">
                <img id="logo" src="../../assets/images/orama.jpg" alt="">
                <form action="">
                    <div id="email-field">
                        <img src="../../assets/images/mail.svg" alt="">
                        <input placeholder="exemplo@orama.com.br" type="email" name="" id="email">
                    </div>
                    <div id="pass-field">
                        <img src="../../assets/images/key.svg" alt="">
                        <input placeholder="Senha" type="password" name="" id="password">
                    </div>
                </form>
                <div class="password-things">
                <label class="container">Lembrar de mim
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                    <a id="forgot" href="">Esqueceu a senha?</a>
                </div>
                <div class="buttons">
                    <button id="btn-login">Entrar</button>
                    <button id="btn-sign">Quero ser Órama</button>
                </div>
                <div class="social-login">
                    <p>Ou faça login via</p>
                    <div id="net">
                        <i class="fab fa-google"></i>
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>

</body>
</html>