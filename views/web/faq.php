<?php
echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/web/images/logo.png">
    <title>FAQ | FillTime</title>
    <link rel="stylesheet" href="assets/web/css/faq.css">
  </head>
  <body>
    <main>
      <section class="hero">
        <div class="container">
          <h1>Perguntas Frequentes</h1>
          <p>Encontre respostas para as perguntas mais comuns sobre nossa plataforma e serviços.</p>
        </div>
      </section>

      <section class="faq-filters">
        <div class="container">
          <div class="search-bar">
            <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/search.svg" alt="Buscar" class="search-icon">
            <input type="text" placeholder="Pesquisar perguntas frequentes..." id="faqSearch">
          </div>

          <div class="category-filters">
            <button class="category-btn active" data-category="all">Todas</button>
            <button class="category-btn" data-category="general">Geral</button>
            <button class="category-btn" data-category="product">Produto</button>
            <button class="category-btn" data-category="pricing">Preços</button>
            <button class="category-btn" data-category="technical">Técnico</button>
          </div>
        </div>
      </section>

      <section class="faq-list">
        <div class="container">
          <div class="faq-items">
            <div class="faq-item" data-category="general">
              <button class="faq-question">
                <span>O que é o FillTime?</span>
                <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/chevron-down.svg" alt="Expandir" class="chevron">
              </button>
              <div class="faq-answer">
                <p>FillTime é uma plataforma completa de gestão empresarial que ajuda empresas a automatizar processos, reduzir desperdícios e obter insights em tempo real. Nossa solução é ideal para empresas de todos os tamanhos que buscam aumentar a eficiência operacional e maximizar resultados.</p>
              </div>
            </div>

            <div class="faq-item" data-category="pricing">
              <button class="faq-question">
                <span>Quais são os planos disponíveis?</span>
                <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/chevron-down.svg" alt="Expandir" class="chevron">
              </button>
              <div class="faq-answer">
                <p>Oferecemos três planos principais: Básico, Profissional e Empresarial. Cada plano inclui diferentes funcionalidades e níveis de suporte, adaptados para atender desde pequenas empresas até grandes corporações. Consulte nossa página de preços para mais detalhes sobre cada plano.</p>
              </div>
            </div>

            <div class="faq-item" data-category="pricing">
              <button class="faq-question">
                <span>Como funciona o período de teste?</span>
                <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/chevron-down.svg" alt="Expandir" class="chevron">
              </button>
              <div class="faq-answer">
                <p>Oferecemos um período de teste gratuito de 14 dias para todos os nossos planos. Durante este período, você terá acesso a todas as funcionalidades do plano escolhido, permitindo que você experimente a plataforma antes de fazer um compromisso financeiro. Não é necessário fornecer dados de cartão de crédito para iniciar o período de teste.</p>
              </div>
            </div>

            <div class="faq-item" data-category="technical">
              <button class="faq-question">
                <span>O FillTime é compatível com dispositivos móveis?</span>
                <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/chevron-down.svg" alt="Expandir" class="chevron">
              </button>
              <div class="faq-answer">
                <p>Sim, o FillTime é totalmente responsivo e pode ser acessado em smartphones e tablets. Além disso, no futuro pretendemos implementar aplicativos nativos para iOS e Android, permitindo que você gerencie sua empresa de qualquer lugar, a qualquer momento. Tudo isso sem acresentar R$1 na sua fatura</p>
              </div>
            </div>

            <div class="faq-item" data-category="technical">
              <button class="faq-question">
                <span>Quais são os requisitos técnicos para utilizar o FillTime?</span>
                <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/chevron-down.svg" alt="Expandir" class="chevron">
              </button>
              <div class="faq-answer">
                <p>O FillTime é uma plataforma baseada em nuvem, o que significa que você não precisa instalar nenhum software especial. Tudo o que você precisa é de um navegador web moderno (como Chrome, Firefox, Safari ou Edge) e uma conexão à internet. Recomendamos uma velocidade mínima de conexão de 1Mbps para uma experiência ideal.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-cta">
        <div class="container">
          <h2>Não encontrou o que procurava?</h2>
          <p>Entre em contato conosco diretamente e teremos prazer em ajudar com suas dúvidas.</p>
          <a href="contact.html" class="btn-primary">Entre em contato</a>
        </div>
      </section>
    </main>

    <script>
      document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
          const item = button.parentElement;
          const answer = button.nextElementSibling;
          const chevron = button.querySelector('.chevron');
          
          item.classList.toggle('active');
          
          if (item.classList.contains('active')) {
            answer.style.maxHeight = answer.scrollHeight + 'px';
            chevron.style.transform = 'rotate(180deg)';
          } else {
            answer.style.maxHeight = null;
            chevron.style.transform = 'rotate(0)';
          }
        });
      });

      document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', () => {

          document.querySelectorAll('.category-btn').forEach(btn => {
            btn.classList.remove('active');
          });
          
          button.classList.add('active');
          
          const category = button.dataset.category;
          
          document.querySelectorAll('.faq-item').forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });

      document.getElementById('faqSearch').addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        
        document.querySelectorAll('.faq-item').forEach(item => {
          const question = item.querySelector('.faq-question span').textContent.toLowerCase();
          const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
          
          if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    </script>
  </body>
</html>