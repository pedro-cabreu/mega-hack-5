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
    <div class="main-wrapper">
       <div class="nav">
            <div class="hide">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-buttons">
                <i class="fas fa-envelope"></i>
                <i class="fas fa-home"></i>
                <i class="far fa-calendar"></i>
                <i class="far fa-clock"></i>
            </div>
            <div class="profile">
                <img src="../../assets/images/nykolas.jpg" alt="">
                <h3>Nykolas</h3>
                <h4>Iniciante</h4>
                <p><i class="fas fa-arrow-left"></i> Voltar</p>
            </div>
       </div>
       <div class="level-select">
            <div class="level-header">
                <h2>Trilha de Aprendizado</h2>
                <span id="tasks">1 de 6 tarefas</span>
                <i class="fas fa-cog"></i>
            </div>
            <div class="boxes">
                <div class="box" id="active">
                    <h4><i class="fas fa-check-square"></i> Fase 1: Inflação x Poupança</h4>
                    <p>Sabia que você está ficando mais pobre todos os dias mesmo tendo seu dinheiro rendendo mensalmente na poupança?</p>
                </div>
                <div class="box">
                    <h4><i class="fas fa-lock"></i> Fase 2: A reserva de emergência</h4>
                    <p>Quer ficar mais seguro quanto à imprevistos? A gente te ensina!</p>
                </div>
                <div class="box">
                    <h4><i class="fas fa-lock"></i> Fase 3: Criando uma reserva de emergência</h4>
                    <p>Qual o melhor investimento para criar sua reserva e ficar protegido da inflação?</p>
                </div>
                <div class="box">
                    <h4><i class="fas fa-lock"></i> Fase 4: Qual seu tipo de investidor?</h4>
                    <p>Moderado, conservador ou arrojado? Descubra!</p>
                </div>
                <div class="box">
                    <h4><i class="fas fa-lock"></i> Fase 5: Pensando na aposentadoria</h4>
                    <p>Conheça os melhores investimentos para se aposentar mais cedo</p>
                </div>
            </div>
       </div>
       <div class="question">
            <div class="question-content">
                <div class="arrows">
                    <i class="fas fa-arrow-left"></i>
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="question-title">
                    <h2>Inflação x Poupança <span id=value-question><i class="fas fa-coins"></i> 25</span></h2>
                </div>
                <div class="question-video">
                    <embed type="video/webm" src="../../assets/videos/1.mp4" width="82%" height="100%"> 
                </div>
                <div class="question-buttons">
                    <button>Próxima Fase <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="question-description">
                    <p>Sabia que você está ficando mais pobre todos os dias mesmo tendo seu dinheiro rendendo mensalmente na poupança?</p>
                </div>
            </div>
            <div class="friends">
                <div class="coins">
                    737 <i class="fas fa-coins"></i>
                </div>
                <div class="user-friends">
                    <a href="">Consultar Ranking</a><br>
                    <img src="../../assets/images/avatars/1.jpeg" alt=""><br>
                    <img src="../../assets/images/avatars/2.jpeg" alt=""><br>
                    <img src="../../assets/images/avatars/3.jpeg" alt=""><br>
                    <img src="../../assets/images/avatars/4.jpeg" alt=""><br>
                    <img src="../../assets/images/avatars/5.jpeg" alt=""><br>
                    <img src="../../assets/images/avatars/1.jpeg" alt=""><br>
                    <img src="../../assets/images/avatars/3.jpeg" alt=""><br>
                    <button><i class="fas fa-plus"></i></button>
                </div>
            </div>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>