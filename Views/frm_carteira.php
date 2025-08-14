
    <div class="container-fluid">
                    <button class="carteira-btn">Carteira</button>
                </div>
    <div id="card-container" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <!-- Seção do Carrossel -->
                <div class="carousel-section">
                    <!-- Carrossel Bootstrap -->
                    <div id="cardCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <!-- Primeiro slide do carrossel -->
                            <div class="carousel-item active">
                                <div class="card-container">
                                    <img src="../img/Cartão-png/Escolar Aluno.png" alt="">
                                </div>
                            </div>
                            <!-- Segundo slide (exemplo de mais conteúdo) -->
                            <div class="carousel-item">
                                <div class="card-container">
                                    <img src="../img/Cartão-png/Vale-Transporte.png" alt="">
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="card-container">
                                    <img src="../img/Cartão-png/Cidadão.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controles do carrossel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>

                    <!-- Botões de Ação -->
                    <div class="action-buttons">
                        <!-- Botão NFC que abre modal -->
                        <button type="button" class="btn btn-nfc" data-bs-toggle="modal" data-bs-target="#nfcModal">
                            <i class="bi bi-broadcast"></i> NFC
                        </button>
                        <!-- Botão Ver Saldo que abre modal -->
                        <button type="button" class="btn btn-balance" data-bs-toggle="modal" data-bs-target="#balanceModal">
                            Ver Saldo
                        </button>
                    </div>
                </div>

                <!-- Seção de Últimas Transações -->
                <div class="transactions-section">
                    <h4 class="transactions-title">Últimas Transações</h4>
                    
                    <!-- Lista de transações -->
                    <div class="transaction-list">
                        <!-- Transação 1 - Cartão -->
                        <div class="transaction-item">
                            <div class="transaction-icon">
                                <i class="bi bi-credit-card-fill"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-name">Cartão</div>
                                <div class="transaction-date">05/08/2025 às 14:30</div>
                            </div>
                            <div class="transaction-amount positive">
                                R$ 20,00
                            </div>
                        </div>

                        <!-- Transação 2 - Pix -->
                        <div class="transaction-item">
                            <div class="transaction-icon">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-name">Pix</div>
                                <div class="transaction-date">22/07/2025 às 17:30</div>
                            </div>
                            <div class="transaction-amount positive">
                                R$ 100,00
                            </div>
                        </div>

                        <!-- Transação 2 - Pix -->
                        <div class="transaction-item">
                            <div class="transaction-icon">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-name">Pix</div>
                                <div class="transaction-date">22/07/2025 às 17:30</div>
                            </div>
                            <div class="transaction-amount positive">
                                R$ 100,00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal NFC -->
     <!-- Modal NFC -->
  <div class="modal fade" id="nfcModal" tabindex="-1" aria-labelledby="nfcModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Cabeçalho -->
        <div class="modal-header modal-header-wallet">
          <h5 class="modal-title" id="nfcModalLabel">
            <i class="fa-solid fa-wifi"></i> Função NFC
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Corpo -->
        <div class="modal-body text-center">
          <!-- Estado aguardando -->
          <div id="nfc-waiting" class="nfc-state">
            <i class="fa-solid fa-wifi nfc-icon"></i>
            <h4 class="mt-3">Aproxime seu cartão</h4>
            <p>Mantenha o cartão próximo ao leitor NFC.</p>
            <div class="alert alert-info">
              <i class="fa-solid fa-circle-info"></i>
              Certifique-se de que o NFC está habilitado no seu dispositivo.
            </div>
          </div>

          <!-- Estado processando -->
          <div id="nfc-processing" class="nfc-state d-none">
            <div class="spinner-border text-primary mb-3" role="status"></div>
            <h4>Processando pagamento...</h4>
          </div>

          <!-- Estado aprovado -->
          <div id="nfc-success" class="nfc-state d-none">
            <i class="fa-solid fa-circle-check text-success" style="font-size: 4rem;"></i>
            <h4 class="text-success mt-3">Pagamento Aprovado!</h4>
            <small class="text-muted">
              Cartão: **** **** **** <span id="card-last-digits"></span><br>
              Valor: R$ <span id="transaction-amount"></span><br>
              ID: <span id="transaction-id"></span>
            </small>
          </div>
        </div>

        <!-- Rodapé -->
        <div class="modal-footer">
          <button id="btn-retry" class="btn btn-primary">Tentar Novamente</button>
          <button id="btn-finish" class="btn btn-success d-none" data-bs-dismiss="modal">Finalizar</button>
        </div>

      </div>
    </div>
  </div>

    <!-- Modal Ver Saldo -->
    <div class="modal fade" id="balanceModal" tabindex="-1" aria-labelledby="balanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="balanceModalLabel">
                        <i class="bi bi-wallet2"></i> Saldo Atual
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="balance-display">
                        <h2 class="balance-amount">R$ 245,80</h2>
                        <p class="balance-description">Saldo disponível</p>
                    </div>
                    <hr>
                    <div class="balance-details">
                        <div class="row">
                            <div class="col-6">
                                <div class="balance-item">
                                    <small class="text-muted">Último carregamento</small>
                                    <div class="fw-bold">R$ 100,00</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="balance-item">
                                    <small class="text-muted">Data</small>
                                    <div class="fw-bold">22/07/2025</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success">Carregar Saldo</button>
                </div>
            </div>
        </div>
    </div>
    
<script src="../JS/carteira.js"></script>
