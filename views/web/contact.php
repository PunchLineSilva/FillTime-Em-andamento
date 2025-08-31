<?php
echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/web/images/logo.png">
    <title>Contato | FillTime</title>
    <link rel="stylesheet" href="assets/web/css/contact.css">
  </head>
  <body>
    <main>
      <section class="hero">
        <div class="container">
          <h1>Entre em Contato</h1>
          <p>Estamos prontos para ajudar com qualquer dúvida ou solicitação. Entre em contato conosco hoje mesmo.</p>
        </div>
      </section>

      <section class="contact">
        <div class="container">
          <div class="contact-grid">
            <div class="contact-form">
              <h2>Envie uma mensagem</h2>
              <form id="contactForm">
                <div class="form-group">
                  <label for="name">Nome Completo *</label>
                  <input type="text" id="name" name="name" required placeholder="Seu nome completo">
                </div>

                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" id="email" name="email" required placeholder="seu.email@exemplo.com">
                </div>

                <div class="form-group">
                  <label for="phone">Telefone</label>
                  <input type="tel" id="phone" name="phone" placeholder="(00) 00000-0000">
                </div>

                <div class="form-group">
                  <label for="subject">Assunto</label>
                  <select id="subject" name="subject">
                    <option value="">Selecione um assunto</option>
                    <option value="sales">Vendas</option>
                    <option value="support">Suporte Técnico</option>
                    <option value="billing">Financeiro</option>
                    <option value="partnership">Parcerias</option>
                    <option value="other">Outros</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="message">Mensagem *</label>
                  <textarea id="message" name="message" required placeholder="Digite sua mensagem aqui..."></textarea>
                </div>

                <button type="submit" class="btn-primary">Enviar Mensagem</button>
              </form>
            </div>

            <div class="contact-info">
              <h2>Informações de Contato</h2>
              
              <div class="info-card">
                <div class="info-items">
                  <div class="info-item">
                    <div class="info-icon">
                      <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/map-pin.svg" alt="Endereço">
                    </div>
                    <div>
                      <h3>Endereço</h3>
                      <p>
                        R. Gen. Balbão, 81<br>
                        Charqueadas, Rio Grande do Sul - RS, 96745-000<br>
                        Brasil
                      </p>
                    </div>
                  </div>

                  <div class="info-item">
                    <div class="info-icon">
                      <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/phone.svg" alt="Telefone">
                    </div>
                    <div>
                      <h3>Telefones</h3>
                      <p>
                        +55 (51) 1234-5678<br>
                        +55 (51) 8765-4321
                      </p>
                    </div>
                  </div>

                  <div class="info-item">
                    <div class="info-icon">
                      <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/mail.svg" alt="Email">
                    </div>
                    <div>
                      <h3>Email</h3>
                      <p>
                        contato@filltime.com.br<br>
                        suporte@filltime.com.br
                      </p>
                    </div>
                  </div>

                  <div class="info-item">
                    <div class="info-icon">
                      <img src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/clock.svg" alt="Horário">
                    </div>
                    <div>
                      <h3>Horário de Atendimento</h3>
                      <p>
                        Segunda a Sexta: 9h às 18h<br>
                        Sábado: 9h às 13h<br>
                        Domingo: Fechado
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="map">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4302.6895866252125!2d-51.626574288107605!3d-29.963505474859957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951bc13e43cbbe5d%3A0xf07991596275fd4e!2sR.%20Gen.%20Balb%C3%A3o%2C%2081%20-%20Centro%2C%20Charqueadas%20-%20RS%2C%2096745-000!5e1!3m2!1spt-BR!2sbr!4v1747611785407!5m2!1spt-BR!2sbr" 
                  width="100%" 
                  height="300" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="faq-teaser">
        <div class="container">
          <h2>Ainda tem dúvidas?</h2>
          <p>Confira nossa página de perguntas frequentes para encontrar respostas rápidas para as dúvidas mais comuns.</p>
          <a href="faq.html" class="btn-outline">Ver Perguntas Frequentes</a>
        </div>
      </section>
    </main>
  </body>
</html>