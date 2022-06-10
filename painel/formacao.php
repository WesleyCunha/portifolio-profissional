<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="./resources/css/style.css">
  <title>Painel Administrativo</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <h1><span>Wes</span>ley Santos</h1>
      <nav>
        <ul id="menu-princial" group="teste" class="menu-principal">
          <li><a ref_menu="inicio" menu_sys="inicio" href="./index.php">Incio</a></li>
          <li><a href="./experiencia.php">Experiência</a></li>
          <li><a href="#">Formações</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container dashboard">
    <div class="dash-avatar">
      <div class="avatar">
        <img src="./resources/img/avatar.png" alt="">
        <h2>Olá, Wesley</h2>
      </div>
      <ul class="dash-menu" group="teste" id="menu-dash">
        <li><a ref_menu="inicio" href="./index.php"><i class="fa-solid fa-house"></i> Incio</a></li>
        <li><a href="./experiencia.php"><i class="fa-solid fa-computer"></i> Experiência</a></li>
        <li><a href="./perfil.php"><i class="fa-solid fa-user"></i> Perfil</a></li>
        <li><a href="#"><i class="fa-solid fa-building-columns"></i> Formações</a></li>
        <li><a href="#"><i class="fa-solid fa-xmark"></i> Sair</a></li>
      </ul>
    </div>
    <div class="dash-conteudo">
      <div class="inicio-conteudo">
        <div class="title-geral">
          <h2><i class="fa-solid fa-computer"></i> Experiência</h2>
          <a href="#">Listar</a>
        </div>
        <form class="formulario-experiencia" action="">
          <div class="title-form">
            <span>Back-end</span>
          </div>
          <div class="lista-checbox">
            <div>
              <label for="">php</label>
              <input type="checkbox" placeholder="html">
            </div>
            <div>
              <label for="">javascript</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">mysql</label>
              <input type="checkbox" placeholder="css">
            </div>
          </div>
          <div class="title-form">
            <span>Front-End</span>
          </div>
          <div class="lista-checbox">
            <div>
              <label for="">html5</label>
              <input type="checkbox" placeholder="html">
            </div>
            <div>
              <label for="">css3</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">javascript</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">jquery</label>
              <input type="checkbox" placeholder="css">
            </div>
            </div>
          <div class="title-form">
            <span>Auxiliar</span>
          </div>
          <div class="lista-checbox">
            <div>
              <label for="">sass</label>
              <input type="checkbox" placeholder="html">
            </div>
            <div>
              <label for="">css</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">jquery</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">swiper</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">gsap</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">git</label>
              <input type="checkbox" placeholder="css">
            </div>
            <div>
              <label for="">Aos</label>
              <input type="checkbox" placeholder="css">
            </div>
          </div>
          <div class="col-100">
            <button type="submit">Atualizar</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script src="./resources/js/app.js"></script>
</body>

</html>