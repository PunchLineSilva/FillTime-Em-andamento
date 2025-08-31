<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/web/images/logo.png">
  <title>FillTime - Gestão Simplificada para seu Negócio</title>
  <link rel="stylesheet" href="assets/web/css/_theme.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
</head>

<body>
  <header class="header">
    <div class="container header-container">
      <div class="logo">
        <span class="logo-icon"></span>
       <a href="/FillTime/" style="text-decoration: none;"><h1>FillTime</h1></a>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="/FillTime/faqs">FAQs</a></li>
          <li><a href="/FillTime/sobre">Sobre</a></li>
          <li><a href="/FillTime/contato">Contato</a></li>
        </ul>
      </nav>
      <div class="auth-buttons">
        <a href="/FillTime/login" class="btn btn-secondary">Entrar</a>
        <a href="/FillTime/cadastro" class="btn btn-primary">Começar Grátis</a>
      </div>
      <button class="mobile-menu-toggle" aria-label="Abrir menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

        <?php echo $this->section("content") ?>

  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="logo footer-logo">
            <span class="logo-icon"></span>
            <h2>FillTime</h2>
          </div>
          <p>Simplifique a gestão do seu negócio e maximize seus resultados com nossa plataforma completa.</p>
        </div>

        <div class="footer-col">
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 FillTime. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>
</body>

</html>