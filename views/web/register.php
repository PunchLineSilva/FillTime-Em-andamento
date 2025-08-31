<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/web/images/logo.png">
  <title>Cadastro | FillTime</title>
  <link rel="stylesheet" href="assets/web/css/register.css">
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
        <h2>Crie sua conta</h2>
        <p>Comece a gerenciar seu negócio de forma eficiente</p>
      </div>
      
      <form class="auth-form">
        <div class="form-row">
          <div class="form-group">
            <label for="first-name">Nome</label>
            <input type="text" id="first-name" placeholder="Seu nome" required>
          </div>
          
          <div class="form-group">
            <label for="last-name">Sobrenome</label>
            <input type="text" id="last-name" placeholder="Seu sobrenome" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="business-name">Nome da Empresa</label>
          <input type="text" id="business-name" placeholder="Nome da sua empresa" required>
        </div>
        
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" placeholder="seu@email.com" required>
        </div>

        <div class="form-group">
          <label for="photo">Foto de Perfil</label>
          <input type="file" id="photo" name="photo">
        </div>
        
        <div class="form-group">
          <label for="password">Senha</label>
          <div class="password-input">
            <input type="password" id="password" placeholder="Crie uma senha forte" required>
            <button type="button" class="password-toggle" aria-label="Mostrar senha"></button>
          </div>
          <div class="password-strength">
            <div class="strength-meter">
              <div class="strength-segment"></div>
              <div class="strength-segment"></div>
              <div class="strength-segment"></div>
              <div class="strength-segment"></div>
            </div>
            <span class="strength-text">Senha fraca</span>
          </div>
        </div>
        
        <div class="form-group">
          <label for="plan">Plano</label>
          <select id="plan" required>
            <option value="" disabled selected>Selecione um plano</option>
            <option value="basic">Básico - R$ 99/mês</option>
            <option value="pro">Profissional - R$ 199/mês</option>
            <option value="enterprise">Empresarial - R$ 349/mês</option>
          </select>
        </div>
        
        <div class="form-group">
          <label class="checkbox-container">
            <input type="checkbox" id="terms" required>
            <span class="checkmark"></span>
            Eu concordo com os <a href="terms.html">Termos de Serviço</a> e <a href="privacy.html">Política de Privacidade</a>
          </label>
        </div>
        
        <button type="submit" class="btn btn-primary btn-full">Criar Conta</button>
      </form>
      
      <div class="auth-footer">
        <p>Já tem uma conta? <a href="login.html">Entrar</a></p>
      </div>
    </div>
    
    <div class="auth-info">
      <div class="auth-info-content">
        <h2>Comece sua jornada com a FillTime</h2>
        <p>Junte-se a centenas de empresas que já estão otimizando a gestão de suas quadras esportivas e aumentando sua receita.</p>
        
        <div class="auth-testimonial">
          <div class="testimonial-content">
            <p>"Desde que implementamos a FillTime, nossa taxa de ocupação aumentou em 40% e reduzimos o tempo gasto com agendamentos em mais de 70%."</p>
          </div>
          <div class="testimonial-author">
            <div class="author-image"></div>
            <div class="author-info">
              <h4>Marcelo Oliveira</h4>
              <p>Centro Esportivo Vitória</p>
            </div>
          </div>
        </div>
        
        <div class="auth-stats">
          <div class="stat-item">
            <h3>1,200+</h3>
            <p>Empresas usando</p>
          </div>
          <div class="stat-item">
            <h3>98%</h3>
            <p>Satisfação</p>
          </div>
          <div class="stat-item">
            <h3>30%</h3>
            <p>Aumento médio de receita</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="module" src="assets/web/js/register.js"></script>
</body>
</html>