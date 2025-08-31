<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="icon" type="image/png" href="assets/admin/images/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin | FillTime</title>
    <link rel="stylesheet" href="assets/admin/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
</head>

<body class="dashboard-page">
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <span class="logo-icon"></span>
                <a href="index.html" style="text-decoration: none;">
                    <h1>FillTime</h1>
                </a>
            </div>
        </div>

        <nav class="sidebar-nav">
            <ul>
                <li class="active">
                    <a href="#">
                        <span class="nav-icon dashboard-icon"></span>
                        <span>Painel Administrativo</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="sidebar-footer">
            <a href="login.html" class="help-link">
                <span class="nav-icon logout-icon"></span>
                <span>Sair</span>
            </a>
        </div>
    </aside>

    <main class="main-content">
        <header class="dashboard-header">
            <div class="search-container">
                <span class="search-icon"></span>
                <input type="search" id="adminSearchInput" placeholder="Buscar usuários, empresas...">
            </div>

            <div class="header-actions">
                <div class="user-profile">
                    <div class="user-avatar-admin">AD</div>
                    <div class="user-info">
                        <p class="user-name">Admin</p>
                        <p class="business-name">Administrador</p>
                    </div>
                </div>
            </div>
        </header>

        <br>

        <section class="admin-overview" style="padding: var(--space-8); border-bottom: 1spx solid var(--neutral-200);">
            <h1 style="margin-bottom: var(--space-6);">Resumo da Plataforma</h1>
        </section>

        <div class="admin-stats-grid">
            <div class="stat-card-admin">
                <h3>Total de Usuários</h3>
                <p class="stat-value">5</p>
                <p class="stat-description"><span style="color: var(--success-500);">+1</span> neste mês</p>
            </div>
            <div class="stat-card-admin">
                <h3>Empresas Cadastradas</h3>
                <p class="stat-value">4</p>
                <p class="stat-description"><span style="color: var(--success-500);">+1</span> neste mês</p>
            </div>
            <div class="stat-card-admin">
                <h3>Assinaturas Ativas</h3>
                <p class="stat-value">3</p>
                <p class="stat-description">Plano Pro: 2, Empresarial: 1</p>
            </div>
            <div class="stat-card-admin">
                <h3>Receita Recorrente Mensal (MRR)</h3>
                <p class="stat-value">R$ 747</p>
                <p class="stat-description"><span style="color: var(--success-500);">+16%</span> em relação ao mês
                    anterior</p>
            </div>
        </div>

        <section class="clients-section">
            <div
                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-4);">
                <h2 style="margin:0;">Últimos Usuários Cadastrados</h2>
                <button id="manageUsersBtn" class="btn btn-primary">Adicionar Usuário</button>
            </div>

            <div class="clients-table">
                <table id="recentUsersTable">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>E-mail</th>
                            <th>Empresa</th>
                            <th>Plano</th>
                            <th>Status</th>
                            <th>Data de Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="client-info">
                                    <div class="client-avatar">MB</div>
                                    <div>
                                        <p class="client-name">Matheus Brito</p>
                                        <p class="client-id">user_001</p>
                                    </div>
                                </div>
                            </td>
                            <td class="user-email">matheus.b@example.com</td>
                            <td class="user-business">Tech Solutions Inc.</td>
                            <td class="user-plan">Profissional</td>
                            <td class="user-status-cell"><span class="status-badge active">Ativo</span></td>
                            <td class="user-joined-date">2025-05-15</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit-user-btn" aria-label="Editar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/file-pen-line.svg"
                                            alt="Editar"></button>
                                    <button class="btn-icon view-user-btn" aria-label="Visualizar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/eye.svg"
                                            alt="Visualizar"></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="client-info">
                                    <div class="client-avatar">FS</div>
                                    <div>
                                        <p class="client-name">Francisco Soares</p>
                                        <p class="client-id">user_002</p>
                                    </div>
                                </div>
                            </td>
                            <td class="user-email">francisco.s@example.com</td>
                            <td class="user-business">Creative Designs Co.</td>
                            <td class="user-plan">Básico</td>
                            <td class="user-status-cell"><span class="status-badge pending">Pendente</span></td>
                            <td class="user-joined-date">2025-05-20</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit-user-btn" aria-label="Editar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/file-pen-line.svg"
                                            alt="Editar"></button>
                                    <button class="btn-icon view-user-btn" aria-label="Visualizar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/eye.svg"
                                            alt="Visualizar"></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="client-info">
                                    <div class="client-avatar">AV</div>
                                    <div>
                                        <p class="client-name">Arena Vôlei</p>
                                        <p class="client-id">user_003</p>
                                    </div>
                                </div>
                            </td>
                            <td class="user-email">contato@arenavolei.com</td>
                            <td class="user-business">Arena Vôlei SP</td>
                            <td class="user-plan">Profissional</td>
                            <td class="user-status-cell"><span class="status-badge active">Ativo</span></td>
                            <td class="user-joined-date">2025-06-04</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit-user-btn" aria-label="Editar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/file-pen-line.svg"
                                            alt="Editar"></button>
                                    <button class="btn-icon view-user-btn" aria-label="Visualizar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/eye.svg"
                                            alt="Visualizar"></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="client-info">
                                    <div class="client-avatar">CM</div>
                                    <div>
                                        <p class="client-name">Carla Mendes</p>
                                        <p class="client-id">user_004</p>
                                    </div>
                                </div>
                            </td>
                            <td class="user-email">carla.m@example.com</td>
                            <td class="user-business">Centro Veterinário Beira-Mar</td>
                            <td class="user-plan">Empresarial</td>
                            <td class="user-status-cell"><span class="status-badge active">Ativo</span></td>
                            <td class="user-joined-date">2025-05-22</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon edit-user-btn" aria-label="Editar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/file-pen-line.svg"
                                            alt="Editar"></button>
                                    <button class="btn-icon view-user-btn" aria-label="Visualizar"><img
                                            src="https://raw.githubusercontent.com/lucide-icons/lucide/main/icons/eye.svg"
                                            alt="Visualizar"></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <div class="modal" id="userModal">
        <div class="modal-content large">
            <div class="modal-header">
                <h3 id="userModalTitle">Editar Usuário</h3>
                <button class="close-btn" id="closeUserModalBtn" aria-label="Fechar">&times;</button>
            </div>
            <form class="appointment-form" id="userModalForm">
                <input type="hidden" id="modalUserId">
                <div class="form-row">
                    <div class="form-group">
                        <label for="modalUserName">Nome do Usuário</label>
                        <input type="text" id="modalUserName" required placeholder="Nome completo">
                    </div>
                    <div class="form-group">
                        <label for="modalUserEmail">E-mail</label>
                        <input type="email" id="modalUserEmail" required placeholder="exemplo@dominio.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="modalUserBusiness">Empresa</label>
                        <input type="text" id="modalUserBusiness" placeholder="Nome da empresa (opcional)">
                    </div>
                    <div class="form-group">
                        <label for="modalUserPlan">Plano</label>
                        <select id="modalUserPlan" required>
                            <option value="" disabled>Selecione um plano</option>
                            <option value="Básico">Básico</option>
                            <option value="Profissional">Profissional</option>
                            <option value="Empresarial">Empresarial</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="modalUserStatus">Status</label>
                    <select id="modalUserStatus" required>
                        <option value="Ativo">Ativo</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
                <div class="form-group" id="joinedDateFormGroup">
                    <label for="modalUserJoinedDate">Data de Cadastro</label>
                    <input type="date" id="modalUserJoinedDate">
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" id="cancelUserModalBtn">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal invisível até que se prove o contrário -->
    <div class="modal" id="userModal">
        <div class="modal-content large">
            <div class="modal-header">
                <h3 id="userModalTitle"></h3>
                <button class="close-btn" aria-label="Fechar">&times;</button>
            </div>
            <form class="appointment-form" id="userModalForm">
                <input type="hidden" id="modalUserId">
                <div class="form-row">
                    <div class="form-group">
                        <label for="modalUserName">Nome do Usuário</label>
                        <input type="text" id="modalUserName" required>
                    </div>
                    <div class="form-group">
                        <label for="modalUserEmail">E-mail</label>
                        <input type="email" id="modalUserEmail" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="modalUserBusiness">Empresa</label>
                        <input type="text" id="modalUserBusiness">
                    </div>
                    <div class="form-group">
                        <label for="modalUserPlan">Plano</label>
                        <select id="modalUserPlan" required>
                            <option value="Básico">Básico</option>
                            <option value="Profissional">Profissional</option>
                            <option value="Empresarial">Empresarial</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="modalUserStatus">Status</label>
                    <select id="modalUserStatus" required>
                        <option value="Ativo">Ativo</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
                <div class="form-actions" id="modalFormActions">
                    <button type="button" class="btn btn-secondary" id="cancelUserModalBtn">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="saveUserModalBtn">Salvar</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        (function () {
            "use strict";

            document.addEventListener('DOMContentLoaded', function () {

                // --- SELETORES DE ELEMENTOS ---
                // Elementos principais da página
                const searchInput = document.getElementById('adminSearchInput');
                const usersTableBody = document.querySelector('#recentUsersTable tbody');
                const addUserBtn = document.getElementById('addOrManageUsersBtn'); // Renomeei o ID para ser mais claro

                // Elementos do Modal
                const userModal = document.getElementById('userModal');
                if (!userModal) {
                    console.error("Erro: O elemento do Modal com ID 'userModal' não foi encontrado. A funcionalidade estará desativada.");
                    return;
                }
                const userModalTitle = document.getElementById('userModalTitle');
                const userModalForm = document.getElementById('userModalForm');
                const modalFormActions = document.getElementById('modalFormActions');
                const saveUserModalBtn = document.getElementById('saveUserModalBtn');
                const cancelUserModalBtn = document.getElementById('cancelUserModalBtn');
                const closeUserModalBtn = userModal.querySelector('.close-btn');

                // Campos do formulário do modal
                const modalFormFields = {
                    id: document.getElementById('modalUserId'),
                    name: document.getElementById('modalUserName'),
                    email: document.getElementById('modalUserEmail'),
                    business: document.getElementById('modalUserBusiness'),
                    plan: document.getElementById('modalUserPlan'),
                    status: document.getElementById('modalUserStatus'),
                    joinedDate: document.getElementById('modalUserJoinedDate'),
                    joinedDateGroup: document.getElementById('joinedDateFormGroup')
                };

                /**
                 * Habilita ou desabilita todos os campos do formulário do modal.
                 * @param {boolean} disabled - True para desabilitar, false para habilitar.
                 */
                const setFormFieldsDisabled = (disabled) => {
                    for (const key in modalFormFields) {
                        const field = modalFormFields[key];
                        if (field && typeof field.disabled !== 'undefined') {
                            field.disabled = disabled;
                        }
                    }
                };

                /**
                 * Abre o modal e o configura para um modo específico.
                 * @param {string} mode - 'add', 'edit', ou 'view'.
                 * @param {object|null} data - Dados do usuário para preencher o formulário.
                 */
                const openModal = (mode, data = null) => {
                    userModalForm.reset();
                    setFormFieldsDisabled(false);
                    modalFormActions.style.display = 'flex';
                    modalFormFields.joinedDateGroup.style.display = 'none';

                    switch (mode) {
                        case 'add':
                            userModalTitle.textContent = 'Adicionar Novo Usuário';
                            saveUserModalBtn.textContent = 'Adicionar Usuário';
                            modalFormFields.joinedDateGroup.style.display = 'block';
                            // Preenche a data de cadastro com a data atual
                            const today = new Date().toISOString().split('T')[0];
                            modalFormFields.joinedDate.value = today;
                            break;

                        case 'edit':
                            userModalTitle.textContent = 'Editar Informações do Usuário';
                            saveUserModalBtn.textContent = 'Salvar Alterações';
                            // Popula o formulário com dados do usuário
                            if (data) {
                                modalFormFields.id.value = data.id;
                                modalFormFields.name.value = data.name;
                                modalFormFields.email.value = data.email;
                                modalFormFields.business.value = data.business;
                                modalFormFields.plan.value = data.plan;
                                modalFormFields.status.value = data.status;
                            }
                            break;

                        case 'view':
                            userModalTitle.textContent = 'Detalhes do Usuário';
                            // Popula o formulário com dados e depois desabilita tudo
                            if (data) {
                                modalFormFields.id.value = data.id;
                                modalFormFields.name.value = data.name;
                                modalFormFields.email.value = data.email;
                                modalFormFields.business.value = data.business;
                                modalFormFields.plan.value = data.plan;
                                modalFormFields.status.value = data.status;
                                modalFormFields.joinedDate.value = data.joinedDate;
                            }
                            setFormFieldsDisabled(true);
                            modalFormActions.style.display = 'none'; // Esconde botões de ação
                            modalFormFields.joinedDateGroup.style.display = 'block'; // Mostra a data de cadastro
                            break;
                    }

                    userModal.classList.add('active');
                };

                const closeModal = () => userModal.classList.remove('active');

                // --- ATRIBUIÇÃO DE EVENTOS ---

                if (addUserBtn) {
                    addUserBtn.addEventListener('click', () => openModal('add'));
                }

                if (usersTableBody) {
                    usersTableBody.addEventListener('click', (event) => {
                        const target = event.target;
                        const editBtn = target.closest('.edit-user-btn');
                        const viewBtn = target.closest('.view-user-btn');

                        if (!editBtn && !viewBtn) return;

                        const row = target.closest('tr');
                        if (!row) return;

                        const userData = {
                            id: row.querySelector('.client-id')?.textContent.trim() || '',
                            name: row.querySelector('.client-name')?.textContent.trim() || '',
                            email: row.querySelector('.user-email')?.textContent.trim() || '',
                            business: row.querySelector('.user-business')?.textContent.trim() || '',
                            plan: row.querySelector('.user-plan')?.textContent.trim() || '',
                            status: row.querySelector('.status-badge')?.textContent.trim() || '',
                            joinedDate: row.querySelector('.user-joined-date')?.textContent.trim() || ''
                        };

                        if (editBtn) {
                            openModal('edit', userData);
                        } else if (viewBtn) {
                            openModal('view', userData);
                        }
                    });
                }

                if (closeUserModalBtn) closeUserModalBtn.addEventListener('click', closeModal);
                if (cancelUserModalBtn) cancelUserModalBtn.addEventListener('click', closeModal);
                if (userModal) userModal.addEventListener('click', (event) => {
                    if (event.target === userModal) closeModal();
                });

                if (userModalForm) {
                    userModalForm.addEventListener('submit', (event) => {
                        event.preventDefault();
                        const userName = modalFormFields.name.value;
                        const isEditing = modalFormFields.id.value !== '';
                        const actionText = isEditing ? "ATUALIZADO" : "CADASTRADO";
                        alert(`Usuário '${userName}' foi ${actionText} com sucesso!\n\n(Esta é uma simulação, os dados não foram salvos permanentemente.)`);
                        closeModal();
                    });
                }

                if (searchInput && usersTableBody) {
                    const tableRows = usersTableBody.getElementsByTagName('tr');
                    searchInput.addEventListener('keyup', () => {
                        const searchTerm = searchInput.value.toLowerCase();
                        Array.from(tableRows).forEach(row => {
                            row.style.display = row.textContent.toLowerCase().includes(searchTerm) ? '' : 'none';
                        });
                    });
                }
            });
        })();
    </script>
</body>

</html>