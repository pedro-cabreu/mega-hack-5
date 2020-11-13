<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="shortcut icon" href="./assets/images/logo.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a53009ca2f.js" crossorigin="anonymous"></script>

    <title>Orama Gaming</title>
</head>
<body>
    <div class="main-wrapper">
        <div class="nav-wrapper">
            <div class="logo">
                <img src="./assets/images/logo.svg" alt="" srcset="">
            </div>
            <div class="navbar">
                <a href="">órama gaming</a>
                <a href="">site</a>
                <a href="">sobre</a>
                <a href="">contato</a>
                <a href="">sair</a>
            </div>
            <div class="login">
                <button id="btn-login-nav" href="">LOGIN</button>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="info">
                <label id="orama-title">ÓRAMA GAMING</label><br>
                <label id="orama-subtitle">INVISTA DE FORMA DIVERTIDA</label>
                <p>Apresentamos a ÓRAMA GAMING: uma plataforma de gamificação a qual você aprende a investir jogando.</p>
                <div class="buttons">
                    <button id="btn-login">Login</button>
                    <button id="btn-invest">Quero ser um investidor</button>
                </div>
            </div>
            <div class="image">
                <img id="image-1" src="./assets/images/wallet(1).svg" alt="">
            </div>
        </div>
        <div class="footer">
            <i class="fas fa-share-alt"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
    <script>
        $('#btn-login').click(function (e) { 
            e.preventDefault();

            window.location.href = "/mega-hack-5/pages/login.php";
        });
    </script>
</body>
</html>