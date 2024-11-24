<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="shortcut icon" href="Favicon/Anel pintado.png" type="image/x-icon">
  <script src="JS/script_login.js" defer></script>
  <style>
    @font-face {
      font-family: poppins;
      src: url('Fonts/poppins-light-webfont.woff2') format('woff2');
      font-weight: 300;
      font-style: normal;
    }

    @font-face {
      font-family: poppins;
      src: url('Fonts/poppins-regular-webfont.woff2') format('woff2');
      font-weight: 400;
      font-style: normal;
    }
  </style>
</head>

<body>
  <!-- Imagem de fundo -->
  <div class="fundo">
    <img src="Imagem/Background-Banner-Desktop.webp" alt="Imagem de fundo decorativa">
  </div>

  <!-- Logo no topo -->
  <div class="topo">
    <a href="https://simdigosim.com.br/">
      <img src="Imagem/Logo-retangular-2-branca.webp" alt="Logo Sim, Digo Sim!">
    </a>
  </div>

  <!-- Formulário de login -->
  <form id="loginForm" action="PHP/processa_login.php" method="POST" novalidate>
    <h1>Login</h1>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
    <br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
    <br>

    <div>
      <input type="checkbox" id="lembrar" name="lembrar">
      <label for="lembrar">Lembrar de mim</label>
    </div>
    <br>

    <button type="submit">Entrar</button>
    <br>

    <a href="2fa.php">Esqueceu a senha?</a>
    <br>

    <a href="cadastro.php">Ainda não tenho uma conta</a>
    <br>

    <div id="mensagemErro" style="color:red; display:none;"></div>
  </form>
</body>

</html>
