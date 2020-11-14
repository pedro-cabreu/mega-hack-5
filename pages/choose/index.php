<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a53009ca2f.js" crossorigin="anonymous"></script>
    <title>Órama Gaming</title>
</head>
<body>
    <div class="back-button">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="illustration">
        <img src="../../assets/images/Group.svg" alt="">
    </div>
    <div class="main-wrapper">
        <div class="main-text">
            <h1>Selecione o perfil que você mais se identifica:</h1>
        </div>
        <div class="boxes">
            <div class="box">
                <img src="../../assets/images/search_engine_.svg" alt="" class="box-illustration">
                <p class="box-text">Eu não tenho tempo para aprender, mas tenho interesse.</p>
            </div>
            <div class="box">
                <img src="../../assets/images/day_dreaming.svg" alt="" class="box-illustration">
                <p class="box-text">Eu não tenho muito interesse em aprender investimentos.</p>
            </div>
        </div>
        <div class="footer-text">
            <h1>Assim podemos te ajudar da forma que você gosta :)</h1>
            <button>Pŕoximo</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $('.box').click(function (e) { 
            
            $(this).hasClass('checked') ? $(this).removeClass('checked') : $(this).addClass('checked')
        });
    </script>
</body>
</html>