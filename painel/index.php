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
      <h1>PAINEL</h1>
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

  <main class="container dashboard-layout">
    <div class="dash-menu">
      <div class="avatar">
        <img src="./resources/img/avatar.png" alt="">
        <h2>Olá, Wesley</h2>
      </div>
      <ul class="menu-dash" group="teste" id="menu-dash">
        <li><a ref_menu="inicio" href="./index.php"><i class="fa-solid fa-house"></i> Incio</a></li>
        <li><a href="./experiencia.php"><i class="fa-solid fa-computer"></i> Experiência</a></li>
        <li><a href="#"><i class="fa-solid fa-user"></i> Perfil</a></li>
        <li><a href="#"><i class="fa-solid fa-building-columns"></i> Formações</a></li>
        <li><a href="#"><i class="fa-solid fa-xmark"></i> Sair</a></li>
      </ul>
    </div>
    <div class="dash-conteudo">
      <div class="inicio-conteudo">
        <h2><i class="fa-solid fa-house"></i> Inicio</h2>
        <span>Reset para o original Titulo</span>
        <p>Desenvolvedor Front-End & Back-End.</p>

        <form action="">
          <input type="text" placeholder="Seu titulo">
          <span>Reset para o original texto</span>
          <p>Desenvolvo projetos como este utilizando apenas HTML, CSS e JavaScript. Para sistemas web como rede social, lojas virtuais, e entre outros sob demanda, trabalho com php, mysql e na prototipagem utilizo o software o Figma.</p>
          <h3>Atualizar informação principais</h3>
          <textarea name="" id="" rows="10" placeholder="Seu titulo Aqui"></textarea>
          <button type="submit">Atualizar</button>
        </form>
      </div>
    </div>
  </main>

  <script src="./resources/js/app.js"></script>
</body>

</html>