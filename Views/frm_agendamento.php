<!-- Botão Dashboard -->
<button class="agendamento-btn">Agendamento</button>
<div class="container-fluid px-0">
    <div class="container">
        <!-- === CARROSSEL DESKTOP === -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="custom-carousel carousel-desktop" id="carouselDesktop">
                    <div class="carousel-wrapper">
                        <div class="carousel-container" id="carouselContainerDesktop">

                            <!-- SLIDE 1 - 3 cards -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-4">
                                        <div class="service-item text-center"
                                            onclick="selectService(this, 'gratuidade')">
                                            <img src="../img/Cartão-png/Gratuidade.png" alt="Gratuidade"
                                                class="img-fluid mb-3" id="img-gratuidade-desktop">
                                            <h5 class="fw-bold mb-3">Gratuidade</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="gratuidade"
                                                    class="radio-custom" id="radio-gratuidade-desktop" checked>
                                                <label for="radio-gratuidade-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="service-item text-center" onclick="selectService(this, 'senior')">
                                            <img src="../img/Cartão-png/Sênior.png" alt="Senior" class="img-fluid mb-3"
                                                id="img-senior-desktop">
                                            <h5 class="fw-bold mb-3">Senior</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="senior" class="radio-custom"
                                                    id="radio-senior-desktop">
                                                <label for="radio-senior-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="service-item text-center" onclick="selectService(this, 'livre')">
                                            <img src="../img/Cartão-png/Passe Livre Estudantil.png"
                                                alt="Passe Livre Estudantil" class="img-fluid mb-3"
                                                id="img-livre-desktop">
                                            <h5 class="fw-bold mb-3">Passe Livre Estudantil</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="livre" class="radio-custom"
                                                    id="radio-livre-desktop">
                                                <label for="radio-livre-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 2 - 3 cards -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-4">
                                        <div class="service-item text-center" onclick="selectService(this, 'cidadao')">
                                            <img src="../img/Cartão-png/Cidadão.png" alt="cidadao"
                                                class="img-fluid mb-3" id="img-cidadao-desktop">
                                            <h5 class="fw-bold mb-3">Cidadão</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="Cidadão" class="radio-custom"
                                                    id="radio-Cidadão-desktop">
                                                <label for="radio-Cidadão-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="service-item text-center"
                                            onclick="selectService(this, 'vale transporte')">
                                            <img src="../img/Cartão-png/Vale-Transporte.png" alt="vale"
                                                class="img-fluid mb-3" id="img-vale-desktop">
                                            <h5 class="fw-bold mb-3">Vale Transporte</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="vale transporte"
                                                    class="radio-custom" id="radio-vale transporte-desktop">
                                                <label for="radio-vale-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="service-item text-center" onclick="selectService(this, 'Especial')">
                                            <img src="../img/Cartão-png/Especial.png" alt="Especial"
                                                class="img-fluid mb-3" id="img-Especial-desktop">
                                            <h5 class="fw-bold mb-3">Especial</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="Especial" class="radio-custom"
                                                    id="radio-Especial-desktop">
                                                <label for="radio-Especial-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 3 - 3 cards -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-4">
                                        <div class="service-item text-center" onclick="selectService(this, 'escolar')">
                                            <img src="../img/Cartão-png/Escolar Aluno.png" alt="escolar"
                                                class="img-fluid mb-3" id="img-escolar-desktop">
                                            <h5 class="fw-bold mb-3">Escolar Aluno</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="escolar" class="radio-custom"
                                                    id="radio-escolar-desktop">
                                                <label for="radio-escolar-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="service-item text-center"
                                            onclick="selectService(this, 'valescolarProfe')">
                                            <img src="../img/Cartão-png/Escolar Professor.png" alt="escolarProf"
                                                class="img-fluid mb-3" id="img-escolarProf-desktop">
                                            <h5 class="fw-bold mb-3">Escolar Professor</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="escolarProf"
                                                    class="radio-custom" id="radio-vale escolarProf-desktop">
                                                <label for="radio-escolarProf-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="service-item text-center" onclick="selectService(this, 'bilhetinho')">
                                            <img src="../img/Cartão-png/Bilhetinho.png" alt="bilhetinho"
                                                class="img-fluid mb-3" id="img-bilhetinho-desktop">
                                            <h5 class="fw-bold mb-3">Bilhetinho</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="bilhetinho" class="radio-custom"
                                                    id="radio-bilhetinho-desktop">
                                                <label for="radio-bilhetinho-desktop"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Setas Desktop -->
                    <button class="carousel-controls carousel-prev" onclick="prevSlide('desktop')">
                        <i class="fa-solid fa-angle-left" style="color: #000000;"></i>
                    </button>

                    <button class="carousel-controls carousel-next" onclick="nextSlide('desktop')">
                       <i class="fa-solid fa-angle-right" style="color: #000000;"></i>
                    </button>

                    <!-- Indicadores Desktop -->
                    <div class="carousel-dots" id="carouselDotsDesktop">
                        <span class="dot active" onclick="currentSlide(1, 'desktop')"></span>
                        <span class="dot" onclick="currentSlide(2, 'desktop')"></span>
                        <span class="dot" onclick="currentSlide(3, 'desktop')"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- === CARROSSEL MOBILE === -->
        <div class="row justify-content-center" style="z-index: 1;">
            <div class="col-lg-10">
                <div class="custom-carousel carousel-mobile" id="carouselMobile">
                    <div class="carousel-wrapper">
                        <div class="carousel-container" id="carouselContainerMobile">

                            <!-- SLIDE 1 - 1 card -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-12">
                                        <div class="service-item text-center"
                                            onclick="selectService(this, 'gratuidade')">
                                            <img src="../img/Cartão-png/Gratuidade.png" alt="Gratuidade"
                                                class="img-fluid mb-3" id="img-gratuidade-mobile">
                                            <h5 class="fw-bold mb-3">Gratuidade</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="serviceMobile" value="gratuidade"
                                                    class="radio-custom" id="radio-gratuidade-mobile" checked>
                                                <label for="radio-gratuidade-mobile"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 2 - 1 card -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-12">
                                        <div class="service-item text-center" onclick="selectService(this, 'senior')">
                                            <img src="../img/Cartão-png/Sênior.png" alt="Senior" class="img-fluid mb-3"
                                                id="img-senior-mobile">
                                            <h5 class="fw-bold mb-3">Senior</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="serviceMobile" value="senior"
                                                    class="radio-custom" id="radio-senior-mobile">
                                                <label for="radio-senior-mobile"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 3 - 1 card -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-12">
                                        <div class="service-item text-center" onclick="selectService(this, 'livre')">
                                            <img src="../img/Cartão-png/Passe Livre Estudantil.png"
                                                alt="Passe Livre Estudantil" class="img-fluid mb-3"
                                                id="img-livre-mobile">
                                            <h5 class="fw-bold mb-3">Passe Livre Estudantil</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="serviceMobile" value="livre"
                                                    class="radio-custom" id="radio-livre-mobile">
                                                <label for="radio-livre-mobile"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 4 - 1 card -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-12">
                                        <div class="service-item text-center" onclick="selectService(this, 'cidadao')">
                                            <img src="../img/Cartão-png/Cidadão.png" alt="cidadao"
                                                class="img-fluid mb-3" id="img-cidadao-mobile">
                                            <h5 class="fw-bold mb-3">Cidadão</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="serviceMobile" value="cidadao"
                                                    class="radio-custom" id="radio-cidadao-mobile">
                                                <label for="radio-cidadao-mobile"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 5 - 1 card -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-12">
                                        <div class="service-item text-center" onclick="selectService(this, 'vale')">
                                            <img src="../img/Cartão-png/Vale-Transporte.png" alt="vale transporte"
                                                class="img-fluid mb-3" id="img-vale-mobile">
                                            <h5 class="fw-bold mb-3">Vale Transporte</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="serviceMobile" value="vale"
                                                    class="radio-custom" id="radio-vale-mobile">
                                                <label for="radio-vale-mobile"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SLIDE 6 - 1 card -->
                            <div class="carousel-slide">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-12">
                                        <div class="service-item text-center" onclick="selectService(this, 'especial')">
                                            <img src="../img/Cartão-png/Especial.png" alt="especial"
                                                class="img-fluid mb-3" id="img-especial-mobile">
                                            <h5 class="fw-bold mb-3">Especial</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="serviceMobile" value="especial"
                                                    class="radio-custom" id="radio-especial-mobile">
                                                <label for="radio-especial-mobile"
                                                    class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <!-- Setas Mobile -->
                    <button class="carousel-controls carousel-prev" onclick="prevSlide('mobile')">
                         <i class="fa-solid fa-angle-left" style="color: #000000;"></i>
                    </button>

                    <button class="carousel-controls carousel-next" onclick="nextSlide('mobile')">
                       <i class="fa-solid fa-angle-right" style="color: #000000;"></i>
                    </button>

                    <!-- Indicadores Mobile -->
                    <div class="carousel-dots" id="carouselDotsMobile">
                        <span class="dot active" onclick="currentSlide(1, 'mobile')"></span>
                        <span class="dot" onclick="currentSlide(2, 'mobile')"></span>
                        <span class="dot" onclick="currentSlide(3, 'mobile')"></span>
                        <span class="dot" onclick="currentSlide(4, 'mobile')"></span>
                        <span class="dot" onclick="currentSlide(5, 'mobile')"></span>
                        <span class="dot" onclick="currentSlide(6, 'mobile')"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- === FORMULÁRIO === -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body p-4" id="form-container">
                        <form>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Selecione uma data:</label>
                                    <input type="date" class="form-control form-control-lg rounded-3">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Digite o seu nome:</label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="Seu nome completo">
                                </div>
                            </div>

                            <div class="row g-3 mb-4">
                                <div class="col-lg-4">
                                    <label class="form-label fw-semibold">E-mail:</label>
                                    <input type="email" class="form-control form-control-lg rounded-3"
                                        placeholder="seu@email.com">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label fw-semibold">CPF:</label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="000.000.000-00" maxlength="14" id="cpf-input">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label fw-semibold">Celular:</label>
                                    <input type="tel" class="form-control form-control-lg rounded-3"
                                        placeholder="(00) 00000-0000" maxlength="15" id="phone-input">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary-custom btn-lg px-5 rounded-3 fw-semibold text-white">
                                    Agendar atendimento
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="../JS/agendamento.js"></script>