<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="assets/app/images/logo.png">
  <title>Dashboard | FillTime</title>
  <link rel="stylesheet" href="assets/app/css/home.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.css">
</head>
<body class="dashboard-page">
  <aside class="sidebar">
    <div class="sidebar-header">
      <div class="logo">
        <span class="logo-icon"></span>
        <h1>FillTime</h1>
      </div>
      <button class="sidebar-toggle" aria-label="Fechar menu"></button>
    </div>
    
    <nav class="sidebar-nav">
      <ul>
        <li class="active">
          <a href="#">
            <span class="nav-icon dashboard-icon"></span>
            <span>Dashboard</span>
          </a>
        </li>
      </ul>
    </nav>
    
    <div class="sidebar-footer">
      <a href="#" class="help-link">
        <span class="help-icon"></span>
        <span>Ajuda</span>
      </a>
    </div>
  </aside>

  <main class="main-content">
    <header class="dashboard-header">
      <div class="search-container">
        <span class="search-icon"></span>
        <input type="search" placeholder="Buscar...">
        
      </div>
          <teste id="notificationBtn">
          </teste>
          <div class="notifications-dropdown" id="notificationsDropdown">
          </div>
        </div>
        
        <div class="user-profile" id="userProfile">
    <div class="user-avatar" id="user-avatar-placeholder"></div> 
    <div class="user-info">
        <p class="user-name" id="user-name-placeholder">Carregando...</p> 
        <p class="business-name">Arena Esportiva Central</p>
    </div>
    <span class="dropdown-icon"></span>
    
    <div class="profile-dropdown" id="profileDropdown">
        <div class="profile-header">
            <h3 id="dropdown-user-name">Carregando...</h3>
            <p id="dropdown-user-email">Carregando...</p>
        </div>
        <div class="profile-menu">
            <a href="#" class="profile-menu-item">
                <span class="profile-icon"></span>
                <span>Meu Perfil</span>
            </a>

            <a href="#" class="profile-menu-item danger" id="logout-button">
                <span class="profile-icon"></span>
                <span>Sair</span>
            </a>
        </div>
    </div>
</div>
      </div>
    </header>

    <section class="welcome-section">
      <div class="welcome-content">
        <h1 id="welcome-message">Olá!</h1>
        <p>Gerencie seus recursos, agendamentos e acompanhe o desempenho do seu negócio</p>
      </div>
      
      <div class="date-range-picker">
        <span class="date-label">Período:</span>
        <button class="date-range-btn" id="dateRangeBtn">
          <span>Últimos 30 dias</span>
          <span class="dropdown-icon"></span>
        </button>
        <div class="date-range-dropdown" id="dateRangeDropdown">
          <div class="date-range-option">Hoje</div>
          <div class="date-range-option">Últimos 7 dias</div>
          <div class="date-range-option active">Últimos 30 dias</div>
          <div class="date-range-option">Este mês</div>
          <div class="date-range-option">Personalizado</div>
        </div>
      </div>
    </section>

    <section class="metrics-section">
      <div class="metrics-grid">
        <div class="metric-card">
          <div class="metric-header">
            <h3>Receita Total</h3>
            <span class="trend up">+15%</span>
          </div>
          <p class="metric-value">R$ 24.750</p>
          <div class="metric-chart revenue-chart"></div>
        </div>
        
        <div class="metric-card">
          <div class="metric-header">
            <h3>Agendamentos</h3>
            <span class="trend up">+8%</span>
          </div>
          <p class="metric-value">324</p>
          <div class="metric-chart bookings-chart"></div>
        </div>
        
        <div class="metric-card">
          <div class="metric-header">
            <h3>Taxa de Ocupação</h3>
            <span class="trend up">+5%</span>
          </div>
          <p class="metric-value">68%</p>
          <div class="metric-chart occupancy-chart"></div>
        </div>
        
        <div class="metric-card">
          <div class="metric-header">
            <h3>Horários Vagos</h3>
            <span class="trend down">-3%</span>
          </div>
          <p class="metric-value">152</p>
          <div class="metric-chart empty-slots-chart"></div>
        </div>
      </div>
    </section>

    <section class="resources-section">
      <div class="section-header">
        <h2>Meus Recursos</h2>
        <button class="btn btn-primary" id="addResourceBtn">
          <span class="plus-icon"></span>
          Adicionar Recurso
        </button>
      </div>
      
      <div class="courts-grid">
        <div class="court-card">
          <div class="court-header">
            <h3 class="court-title">Quadra 1</h3>
            <span class="court-status available">Disponível</span>
          </div>
          <div class="court-body">
            <div class="court-info">
              <div class="court-info-item">
                <span class="court-info-icon location-icon"></span>
                <span>Setor A - Arena Central</span>
              </div>
              <div class="court-info-item">
                <span class="court-info-icon type-icon"></span>
                <span>Futsal</span>
              </div>
              <div class="court-info-item">
                <span class="court-info-icon price-icon"></span>
                <span>R$ 120,00/hora</span>
              </div>
            </div>
            <div class="court-actions">
              <button class="court-action-btn btn-primary" data-court="1" data-court-name="Quadra 1">
                <span class="court-action-icon calendar-icon"></span>
                <span>Agendar</span>
              </button>
              <button class="court-action-btn btn-secondary">
                <span class="court-action-icon edit-icon"></span>
                <span>Editar</span>
              </button>
            </div>
          </div>
        </div>
        
        <div class="court-card">
          <div class="court-header">
            <h3 class="court-title">Quadra 2</h3>
            <span class="court-status occupied">Ocupada</span>
          </div>
          <div class="court-body">
            <div class="court-info">
              <div class="court-info-item">
                <span class="court-info-icon location-icon"></span>
                <span>Setor B - Arena Central</span>
              </div>
              <div class="court-info-item">
                <span class="court-info-icon type-icon"></span>
                <span>Vôlei</span>
              </div>
              <div class="court-info-item">
                <span class="court-info-icon price-icon"></span>
                <span>R$ 100,00/hora</span>
              </div>
            </div>
            <div class="court-actions">
              <button class="court-action-btn btn-primary" data-court="2" data-court-name="Quadra 2">
                <span class="court-action-icon calendar-icon"></span>
                <span>Agendar</span>
              </button>
              <button class="court-action-btn btn-secondary">
                <span class="court-action-icon edit-icon"></span>
                <span>Editar</span>
              </button>
            </div>
          </div>
        </div>
        
        <div class="court-card">
          <div class="court-header">
            <h3 class="court-title">Quadra 3</h3>
            <span class="court-status maintenance">Manutenção</span>
          </div>
          <div class="court-body">
            <div class="court-info">
              <div class="court-info-item">
                <span class="court-info-icon location-icon"></span>
                <span>Setor C - Arena Central</span>
              </div>
              <div class="court-info-item">
                <span class="court-info-icon type-icon"></span>
                <span>Basquete</span>
              </div>
              <div class="court-info-item">
                <span class="court-info-icon price-icon"></span>
                <span>R$ 150,00/hora</span>
              </div>
            </div>
            <div class="court-actions">
              <button class="court-action-btn btn-primary" data-court="3" data-court-name="Quadra 3">
                <span class="court-action-icon calendar-icon"></span>
                <span>Agendar</span>
              </button>
              <button class="court-action-btn btn-secondary">
                <span class="court-action-icon edit-icon"></span>
                <span>Editar</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="modal" id="bookingModal">
    <div class="modal-content large">
      <div class="modal-header">
        <h3>Agendar <span id="resourceName">Recurso</span></h3>
        <button class="close-btn" aria-label="Fechar">&times;</button>
      </div>
      
      <div class="court-calendar">
        <div class="calendar-header">
          <div class="calendar-navigation">
            <button class="btn btn-icon" aria-label="Semana anterior" id="prevWeekBtn">
              <span class="nav-arrow prev"></span>
            </button>
            <h4 id="weekRangeDisplay">Semana de 20 a 26 de Maio, 2025</h4>
            <button class="btn btn-icon" aria-label="Próxima semana" id="nextWeekBtn">
              <span class="nav-arrow next"></span>
            </button>
          </div>
        </div>
        
        <div class="weekdays">
          <div></div>
          <div>Segunda</div>
          <div>Terça</div>
          <div>Quarta</div>
          <div>Quinta</div>
          <div>Sexta</div>
          <div>Sábado</div>
          <div>Domingo</div>
        </div>
        
        <div class="time-slots">
          <div class="time-label">08:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Juvenil</span>
              <span class="booking-time">08:00 - 09:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          
          <div class="time-label">09:00</div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Escola Municipal</span>
              <span class="booking-time">09:00 - 10:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Juvenil</span>
              <span class="booking-time">09:00 - 10:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          
          <div class="time-label">10:00</div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Escola Municipal</span>
              <span class="booking-time">10:00 - 11:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">11:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">12:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">13:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">14:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Águias</span>
              <span class="booking-time">14:00 - 16:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">15:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Águias</span>
              <span class="booking-time">14:00 - 16:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Grupo Amigos</span>
              <span class="booking-time">15:00 - 17:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          
          <div class="time-label">16:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Vitória</span>
              <span class="booking-time">16:00 - 18:00</span>
            </div>
          </div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Grupo Amigos</span>
              <span class="booking-time">15:00 - 17:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          
          <div class="time-label">17:00</div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Associação UFPR</span>
              <span class="booking-time">17:00 - 19:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Vitória</span>
              <span class="booking-time">16:00 - 18:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">18:00</div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Associação UFPR</span>
              <span class="booking-time">17:00 - 19:00</span>
            </div>
          </div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Liga Amadora</span>
              <span class="booking-time">18:00 - 20:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Leões</span>
              <span class="booking-time">18:00 - 20:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">19:00</div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Liga Amadora</span>
              <span class="booking-time">18:00 - 20:00</span>
            </div>
          </div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Grupo Empresarial</span>
              <span class="booking-time">19:00 - 21:00</span>
            </div>
          </div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Leões</span>
              <span class="booking-time">18:00 - 20:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">20:00</div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Tigres</span>
              <span class="booking-time">20:00 - 22:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Grupo Empresarial</span>
              <span class="booking-time">19:00 - 21:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Grupo Amigos</span>
              <span class="booking-time">20:00 - 22:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">21:00</div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Time Tigres</span>
              <span class="booking-time">20:00 - 22:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot booked">
            <div class="booking-info">
              <span class="booking-client">Grupo Amigos</span>
              <span class="booking-time">20:00 - 22:00</span>
            </div>
          </div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          
          <div class="time-label">22:00</div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
          <div class="time-slot"></div>
        </div>
      </div>
      
      <form class="appointment-form" id="bookingForm" style="display: none;">
        <div class="form-group">
          <label for="client">Cliente</label>
          <input type="text" id="client" placeholder="Nome do cliente" required>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="date">Data</label>
            <input type="date" id="date" required>
          </div>

          <div class="form-group">
            <label for="start-time">Horário Início</label>
            <input type="time" id="start-time" required>
          </div>

          <div class="form-group">
            <label for="end-time">Horário Fim</label>
            <input type="time" id="end-time" required>
          </div>
        </div>

        <div class="form-group">
          <label for="booking-price">Valor (R$)</label>
          <input type="number" id="booking-price" min="0" step="0.01" required>
        </div>

        <div class="form-group">
          <label for="booking-notes">Observações</label>
          <textarea id="booking-notes" rows="3"></textarea>
        </div>

        <div class="form-actions">
          <button type="button" class="btn btn-secondary" id="backToCalendarBtn">Voltar</button>
          <button type="submit" class="btn btn-primary">Confirmar Agendamento</button>
        </div>
      </form>
    </div>
  </div>

  <div class="modal" id="addResourceModal">
    <div class="modal-content large">
      <div class="modal-header">
        <h3>Adicionar Novo Recurso</h3>
        <button class="close-btn" aria-label="Fechar">&times;</button>
      </div>
      
      <form class="appointment-form">
        <div class="form-row">
          <div class="form-group">
            <label for="resource-name">Nome do Recurso</label>
            <input type="text" id="resource-name" required>
          </div>

          <div class="form-group">
            <label for="resource-type">Tipo de Recurso</label>
            <select id="resource-type" required>
              <option value="">Selecione o tipo</option>
              <option value="quadra">Quadra Esportiva</option>
              <option value="sala">Sala de Reunião</option>
              <option value="equipamento">Equipamento</option>
              <option value="espaco">Espaço para Eventos</option>
              <option value="outro">Outro</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="resource-location">Localização</label>
            <input type="text" id="resource-location" required>
          </div>

          <div class="form-group">
            <label for="resource-price">Valor por Hora (R$)</label>
            <input type="number" id="resource-price" min="0" step="0.01" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="resource-capacity">Capacidade (pessoas)</label>
            <input type="number" id="resource-capacity" min="1" required>
          </div>

          <div class="form-group">
            <label for="resource-status">Status</label>
            <select id="resource-status" required>
              <option value="available">Disponível</option>
              <option value="maintenance">Em Manutenção</option>
              <option value="inactive">Inativo</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="resource-description">Descrição</label>
          <textarea id="resource-description" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label>Horários de Funcionamento</label>
          <div class="form-row">
            <div class="form-group">
              <label for="opening-time">Abertura</label>
              <input type="time" id="opening-time" required>
            </div>

            <div class="form-group">
              <label for="closing-time">Fechamento</label>
              <input type="time" id="closing-time" required>
            </div>
          </div>
        </div>

        <div class="form-actions">
          <button type="button" class="btn btn-secondary" id="cancelAddResourceBtn">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar Recurso</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
  <script>
    const notificationBtn = document.getElementById('notificationBtn');
    const notificationsDropdown = document.getElementById('notificationsDropdown');
    
    notificationBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      notificationsDropdown.classList.toggle('active');
      profileDropdown.classList.remove('active');
      dateRangeDropdown.classList.remove('active');
    });

    const userProfile = document.getElementById('userProfile');
    const profileDropdown = document.getElementById('profileDropdown');
    
    userProfile.addEventListener('click', (e) => {
      e.stopPropagation();
      profileDropdown.classList.toggle('active');
      notificationsDropdown.classList.remove('active');
      dateRangeDropdown.classList.remove('active');
    });

    const dateRangeBtn = document.getElementById('dateRangeBtn');
    const dateRangeDropdown = document.getElementById('dateRangeDropdown');
    
    dateRangeBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      dateRangeDropdown.classList.toggle('active');
      notificationsDropdown.classList.remove('active');
      profileDropdown.classList.remove('active');
    });

    document.addEventListener('click', () => {
      notificationsDropdown.classList.remove('active');
      profileDropdown.classList.remove('active');
      dateRangeDropdown.classList.remove('active');
    });

    notificationsDropdown.addEventListener('click', (e) => e.stopPropagation());
    profileDropdown.addEventListener('click', (e) => e.stopPropagation());
    dateRangeDropdown.addEventListener('click', (e) => e.stopPropagation());

    const bookingModal = document.getElementById('bookingModal');
    const addResourceModal = document.getElementById('addResourceModal');
    const bookingBtns = document.querySelectorAll('.court-action-btn.btn-primary');
    const addResourceBtn = document.getElementById('addResourceBtn');
    const closeBtns = document.querySelectorAll('.close-btn');
    const backToCalendarBtn = document.getElementById('backToCalendarBtn');
    const cancelAddResourceBtn = document.getElementById('cancelAddResourceBtn');
    const bookingForm = document.getElementById('bookingForm');
    const courtCalendar = document.querySelector('.court-calendar');
    const resourceName = document.getElementById('resourceName');

    bookingBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const courtId = btn.getAttribute('data-court');
        const courtName = btn.getAttribute('data-court-name');
        resourceName.textContent = courtName;
        bookingForm.style.display = 'none';
        courtCalendar.style.display = 'block';
        bookingModal.classList.add('active');
      });
    });

    addResourceBtn.addEventListener('click', () => {
      addResourceModal.classList.add('active');
    });

    closeBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        bookingModal.classList.remove('active');
        addResourceModal.classList.remove('active');
      });
    });

    backToCalendarBtn.addEventListener('click', () => {
      bookingForm.style.display = 'none';
      courtCalendar.style.display = 'block';
    });

    cancelAddResourceBtn.addEventListener('click', () => {
      addResourceModal.classList.remove('active');
    });

    document.addEventListener('click', (e) => {
      if (e.target === bookingModal) {
        bookingModal.classList.remove('active');
      }
      if (e.target === addResourceModal) {
        addResourceModal.classList.remove('active');
      }
    });

    const prevWeekBtn = document.getElementById('prevWeekBtn');
    const nextWeekBtn = document.getElementById('nextWeekBtn');
    const weekRangeDisplay = document.getElementById('weekRangeDisplay');
    
    let currentWeekStart = new Date(2025, 4, 20);
    
    function updateWeekDisplay() {
      const weekEnd = new Date(currentWeekStart);
      weekEnd.setDate(weekEnd.getDate() + 6);
      
      const startDay = currentWeekStart.getDate();
      const endDay = weekEnd.getDate();
      const month = currentWeekStart.toLocaleString('pt-BR', { month: 'long' });
      const year = currentWeekStart.getFullYear();
      
      weekRangeDisplay.textContent = `Semana de ${startDay} a ${endDay} de ${month}, ${year}`;
    }
    
    prevWeekBtn.addEventListener('click', () => {
      currentWeekStart.setDate(currentWeekStart.getDate() - 7);
      updateWeekDisplay();
    });
    
    nextWeekBtn.addEventListener('click', () => {
      currentWeekStart.setDate(currentWeekStart.getDate() + 7);
      updateWeekDisplay();
    });

    const timeSlots = document.querySelectorAll('.time-slot:not(.booked)');
    
    timeSlots.forEach(slot => {
      slot.addEventListener('click', () => {
        const timeLabel = slot.previousElementSibling.textContent || 
                          slot.parentElement.firstElementChild.textContent;
        const dayIndex = Array.from(slot.parentElement.children).indexOf(slot) % 8;
        const days = ['', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];
        const day = days[dayIndex];

        const dateInput = document.getElementById('date');
        const startTimeInput = document.getElementById('start-time');
        
        const targetDate = new Date(currentWeekStart);
        targetDate.setDate(currentWeekStart.getDate() + dayIndex - 1);
        
        const formattedDate = targetDate.toISOString().split('T')[0];
        dateInput.value = formattedDate;
        
        startTimeInput.value = timeLabel.trim() + ':00';
        
        const endTimeInput = document.getElementById('end-time');
        const startHour = parseInt(timeLabel.trim());
        endTimeInput.value = (startHour + 1) + ':00';
        
        courtCalendar.style.display = 'none';
        bookingForm.style.display = 'block';
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const userLoginData = localStorage.getItem("userLogin");

      if (userLoginData) {
        try {
          const userData = JSON.parse(userLoginData);
          const user = userData.user;

          document.getElementById('user-name-placeholder').textContent = user.name;
          document.getElementById('dropdown-user-name').textContent = user.name;
          document.getElementById('dropdown-user-email').textContent = user.email;
          document.getElementById('welcome-message').textContent = `Olá, ${user.name}!`;

          const avatarPlaceholder = document.getElementById('user-avatar-placeholder');
          if (user.photo) {
            avatarPlaceholder.innerHTML = `<img src="${user.photo}" alt="Foto de Perfil" style="width:100%; height:100%; border-radius:50%; object-fit:cover;">`;
          } else {
            avatarPlaceholder.textContent = user.name.charAt(0).toUpperCase();
          }

        } catch (error) {
          console.error("Erro ao processar dados do usuário:", error);
          window.location.href = "/FillTime/login";
        }
      } else {
        alert("Você precisa estar logado para acessar esta página.");
        window.location.href = "/FillTime/login";
      }
      
      const userProfile = document.getElementById('userProfile');
      const profileDropdown = document.getElementById('profileDropdown');
      if(userProfile) {
          userProfile.addEventListener('click', (e) => {
              e.stopPropagation();
              profileDropdown.classList.toggle('active');
          });
      }
      
      document.addEventListener('click', () => {
          profileDropdown.classList.remove('active');
      });

      const logoutButton = document.getElementById('logout-button');
      if(logoutButton) {
        logoutButton.addEventListener('click', () => {
          localStorage.removeItem('userLogin');
          window.location.href = "/FillTime/login";
        });
      }
    });
  </script>
</body>
</html>
</body>
</html>