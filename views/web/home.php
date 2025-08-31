<?php
echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/web/images/logo.png">
    <title>Home | FillTime</title>
    <link rel="stylesheet" href="assets/web/css/home.css">
    <!-- <link rel="stylesheet" href="assets/web/_theme.css"> -->
  </head>
  <body>

 <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Gerencie sua empresa de Forma Inteligente</h1>
        <p>Aumente sua receita, reduza desistências e otimize horários com nossa plataforma completa de gestão.</p>
        <div class="hero-cta">
          <a href="signup.html" class="btn btn-primary btn-large">Experimente Grátis por 14 Dias</a>
        </div>
      </div>
      <div class="hero-image">
        <div class="dashboard-preview">
          <img src="https://gestaoclick.com.br/wp-content/uploads/gestao-financeira-pratica-e-completa.webp">
        </div>
      </div>
    </div>
  </section>

  <section id="beneficios" class="benefits section">
    <div class="container">
      <div class="section-header">
        <h2>Por que escolher a FillTime?</h2>
        <p>Nossa plataforma oferece ferramentas completas para transformar a gestão do seu negócio</p>
      </div>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon efficiency-icon"></div>
          <h3>Aumento de Eficiência</h3>
          <p>Automatize agendamentos e pagamentos, liberando tempo para focar no crescimento do seu negócio.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon revenue-icon"></div>
          <h3>Maximize Receitas</h3>
          <p>Otimize preços para horários de pico e identifique oportunidades para aumentar a ocupação.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon retention-icon"></div>
          <h3>Reduza Desistências</h3>
          <p>Acompanhe o comportamento dos clientes e implemente estratégias eficazes de retenção.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon insights-icon"></div>
          <h3>Insights em Tempo Real</h3>
          <p>Acesse relatórios e análises para tomar decisões estratégicas baseadas em dados concretos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="funcionalidades" class="features section">
    <div class="container">
      <div class="section-header">
        <h2>Funcionalidades Completas</h2>
        <p>Tudo o que você precisa para gerenciar seu negócio em um único lugar</p>
      </div>
      
      <div class="features-tabs">
        <div class="tabs-nav">
          <button class="tab-btn active" data-tab="agendamentos">Agendamentos</button>
          <button class="tab-btn" data-tab="financeiro">Financeiro</button>
          <button class="tab-btn" data-tab="clientes">Clientes</button>
          <button class="tab-btn" data-tab="relatorios">Relatórios</button>
        </div>
        
        <div class="tab-content">
          <div class="tab-pane active" id="agendamentos">
            <div class="feature-showcase">
              <div class="feature-image">
                <div class="feature-screenshot scheduling"></div>
              </div>
              <div class="feature-info">
                <h3>Sistema de Agendamentos Inteligente</h3>
                <p>Calendario intuitivo com confirmações automáticas e lembretes para clientes.</p>
                <ul class="feature-list">
                  <li>Visão diária, semanal e mensal</li>
                  <li>Reservas recorrentes</li>
                  <li>Bloqueio de horários para manutenção</li>
                  <li>Notificações automáticas</li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <section id="precos" class="pricing section">
    <div class="container">
      <div class="section-header">
        <h2>Planos que se adaptam ao seu negócio</h2>
        <p>Escolha a opção ideal para suas necessidades</p>
      </div>
      
      <div class="pricing-toggle">
        <span>Mensal</span>
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
        <span>Anual <span class="discount">Economize 20%</span></span>
      </div>
      
      <div class="pricing-grid">
        <div class="pricing-card">
          <div class="pricing-header">
            <h3>Básico</h3>
            <div class="price">
              <span class="currency">R$</span>
              <span class="amount">99</span>
              <span class="period">/mês</span>
            </div>
            <p>Ideal para negócios pequenos</p>
          </div>
          <div class="pricing-features">
            <ul>
              <li>Até 2 franquias</li>
              <li>Agendamentos ilimitados</li>
              <li>Painel de controle básico</li>
              <li>Suporte por e-mail</li>
            </ul>
          </div>
          <div class="pricing-cta">
            <a href="signup.html" class="btn btn-outline btn-full">Começar Agora</a>
          </div>
        </div>
        
        <div class="pricing-card featured">
          <div class="popular-tag">Mais Popular</div>
          <div class="pricing-header">
            <h3>Profissional</h3>
            <div class="price">
              <span class="currency">R$</span>
              <span class="amount">199</span>
              <span class="period">/mês</span>
            </div>
            <p>Para negócios em crescimento</p>
          </div>
          <div class="pricing-features">
            <ul>
              <li>Até 5 franquias</li>
              <li>Agendamentos ilimitados</li>
              <li>Relatórios avançados</li>
              <li>Integração com pagamentos</li>
              <li>Suporte prioritário</li>
            </ul>
          </div>
          <div class="pricing-cta">
            <a href="signup.html" class="btn btn-primary btn-full">Começar Agora</a>
          </div>
        </div>
        
        <div class="pricing-card">
          <div class="pricing-header">
            <h3>Empresarial</h3>
            <div class="price">
              <span class="currency">R$</span>
              <span class="amount">349</span>
              <span class="period">/mês</span>
            </div>
            <p>Para redes e grandes operações</p>
          </div>
          <div class="pricing-features">
            <ul>
              <li>Franquias ilimitadas</li>
              <li>Multi-localização</li>
              <li>API completa</li>
              <li>Equipe dedicada de suporte</li>
              <li>Personalização completa</li>
            </ul>
          </div>
          <div class="pricing-cta">
            <a href="contact.html" class="btn btn-outline btn-full">Fale Conosco</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials section">
    <div class="container">
      <div class="section-header">
        <h2>O que nossos clientes dizem</h2>
        <p>Histórias de sucesso de quem já está usando a FillTime</p>
      </div>
      
      <div class="testimonial-slider">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"Desde que implementamos a FillTime, reduzimos nossas desistências em 35% e aumentamos a receita em mais de 20%."</p>
          </div>
          <div class="testimonial-author">
            <div class="author-image">
              <img src="https://img.freepik.com/vetores-premium/avatar-de-homem-barbudo-foto-generica-de-perfil-masculino_53562-20202.jpg" width="100%">
            </div>
            <div class="author-info">
              <h4>Rafael Santos</h4>
              <p>Arena Vôlei, São Paulo</p>
            </div>
          </div>
        </div>

        <br>
        
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p>"A facilidade de visualizar os horários mais rentáveis nos permitiu otimizar nossos preços e maximizar a ocupação."</p>
          </div>
          <div class="testimonial-author">
            <div class="author-image">
              <img src="https://www.creativefabrica.com/wp-content/uploads/2022/07/04/Female-user-avatar-Generic-app-profile-Graphics-33541506-1-1-580x387.png" width="120%" height="100%">
            </div>
            <div class="author-info">
              <h4>Carla Mendes</h4>
              <p>Centro veterinário Beira-Mar, Florianópolis</p>
            </div>
          </div>
        </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2>Pronto para transformar a gestão do seu negócio?</h2>
        <p>Comece agora e veja os resultados em poucos dias.</p>
        <a href="signup.html" class="btn btn-primary btn-large">Experimente Grátis por 14 Dias</a>
        <p class="no-card">Não é necessário cartão de crédito</p>
      </div>
    </div>
  </section>
</html>