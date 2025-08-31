<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/web/images/logo.png">
  <title>Login | FillTime</title>
  <link rel="stylesheet" href="assets/web/css/login.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
</head>
<body class="auth-page">
  <div class="auth-container">
    <div class="auth-card">
      <div class="auth-header">
        <div class="logo">
          <span class="logo-icon"></span>
          <a href="index.html"><h1>FillTime</h1></a>
        </div>
        <h2>Bem-vindo de volta</h2>
        <p>Entre na sua conta para continuar</p>
      </div>
      
      <form class="auth-form" id="formLogin">
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" name="email" placeholder="seu@email.com" required>
        </div>
        
        <div class="form-group">
          <label for="password">Senha</label>
          <div class="password-input">
            <input type="password" id="password" name="password" placeholder="Sua senha" required>
            <button type="button" class="password-toggle" aria-label="Mostrar senha"></button>
          </div>
          <div class="form-help">
            <a href="reset-password.html" class="forgot-password">Esqueceu a senha?</a>
          </div>
        </div>
        
        <div class="form-group">
          <label class="checkbox-container">
            <input type="checkbox" id="remember">
            <span class="checkmark"></span>
            Manter conectado
          </label>
        </div>
        
        <button type="submit" class="btn btn-primary btn-full">Entrar</button>
      </form>
      
      <div class="auth-footer">
        <p>Não tem uma conta? <a href="/FillTime/cadastro">Cadastre-se</a></p>
      </div>
    </div>
    
    <div class="auth-info">
      <div class="auth-info-content">
        <h2>Gerencie seu negócio com eficiência</h2>
        <p>A FillTime oferece todas as ferramentas que você precisa para gerenciar suas quadras esportivas, otimizar agendamentos e aumentar sua receita.</p>
        
        <div class="auth-features">
          <div class="auth-feature">
            <div class="feature-icon"></div>
            <div class="feature-text">
              <h3>Agendamentos Simplificados</h3>
              <p>Sistema intuitivo para gerenciar reservas e evitar conflitos de horários.</p>
            </div>
          </div>
          
          <div class="auth-feature">
            <div class="feature-icon"></div>
            <div class="feature-text">
              <h3>Análises Detalhadas</h3>
              <p>Relatórios e gráficos para entender o desempenho do seu negócio.</p>
            </div>
          </div>
          
          <div class="auth-feature">
            <div class="feature-icon"></div>
            <div class="feature-text">
              <h3>Gestão de Clientes</h3>
              <p>Mantenha um registro completo dos seus clientes e suas preferências.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="module" src="assets/web/js/login.js"></script>
</body>
</html>