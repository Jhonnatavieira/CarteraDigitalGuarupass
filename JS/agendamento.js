 // === CONFIGURAÇÕES DOS CARROSSÉIS ===
    let currentSlideDesktop = 0;
    let currentSlideMobile = 0;
    const totalSlidesDesktop = 3; // 2 slides com 3 cards cada
    const totalSlidesMobile = 9;  // 6 slides com 1 card cada

    // === FUNÇÕES DE NAVEGAÇÃO ===
    function nextSlide(type) {
        if (type === 'desktop') {
            if (currentSlideDesktop < totalSlidesDesktop - 1) {
                currentSlideDesktop++;
            } else {
                currentSlideDesktop = 0;
            }
            updateCarousel('desktop');
        } else if (type === 'mobile') {
            if (currentSlideMobile < totalSlidesMobile - 1) {
                currentSlideMobile++;
            } else {
                currentSlideMobile = 0;
            }
            updateCarousel('mobile');
        }
    }

    function prevSlide(type) {
        if (type === 'desktop') {
            if (currentSlideDesktop > 0) {
                currentSlideDesktop--;
            } else {
                currentSlideDesktop = totalSlidesDesktop - 1;
            }
            updateCarousel('desktop');
        } else if (type === 'mobile') {
            if (currentSlideMobile > 0) {
                currentSlideMobile--;
            } else {
                currentSlideMobile = totalSlidesMobile - 1;
            }
            updateCarousel('mobile');
        }
    }

    function currentSlide(slideNumber, type) {
        if (type === 'desktop') {
            currentSlideDesktop = slideNumber - 1;
            updateCarousel('desktop');
        } else if (type === 'mobile') {
            currentSlideMobile = slideNumber - 1;
            updateCarousel('mobile');
        }
    }

    // === FUNÇÃO DE ATUALIZAÇÃO DOS CARROSSÉIS ===
    function updateCarousel(type) {
        if (type === 'desktop') {
            const container = document.getElementById('carouselContainerDesktop');
            const dots = document.querySelectorAll('#carouselDotsDesktop .dot');

            const translateX = -currentSlideDesktop * 50; // 50% por slide
            container.style.transform = `translateX(${translateX}%)`;

            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlideDesktop);
            });

        } else if (type === 'mobile') {
            const container = document.getElementById('carouselContainerMobile');
            const dots = document.querySelectorAll('#carouselDotsMobile .dot');

            const translateX = -currentSlideMobile * 16.666; // 16.666% por slide (100/6)
            container.style.transform = `translateX(${translateX}%)`;

            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlideMobile);
            });
        }
    }

    // === FUNÇÃO DE SELEÇÃO DE SERVIÇO ===
    function selectService(serviceElement, serviceValue) {
        // Remove seleção de todos os itens (ambos carrosséis)
        document.querySelectorAll('.service-item').forEach(item => {
            item.classList.remove('selected');
        });

        // Adiciona seleção ao item clicado
        serviceElement.classList.add('selected');

        // Marca o radio button correspondente
        const radioButton = serviceElement.querySelector('input[type="radio"]');
        radioButton.checked = true;

        // Sincronizar seleção entre desktop e mobile
        const desktopRadio = document.querySelector(`input[name="service"][value="${serviceValue}"]`);
        const mobileRadio = document.querySelector(`input[name="serviceMobile"][value="${serviceValue}"]`);

        if (desktopRadio) desktopRadio.checked = true;
        if (mobileRadio) mobileRadio.checked = true;

        console.log('Serviço selecionado:', serviceValue);
    }

    // === MÁSCARAS DE INPUT ===
    document.getElementById('cpf-input').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length <= 11) {
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }
        e.target.value = value;
    });

    document.getElementById('phone-input').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length <= 11) {
            value = value.replace(/(\d{2})(\d)/, '($1) $2');
            value = value.replace(/(\d{5})(\d{1,4})$/, '$1-$2');
        }
        e.target.value = value;
    });

    // === INICIALIZAÇÃO ===
    document.addEventListener('DOMContentLoaded', function () {
        // Selecionar primeiro item em ambos carrosséis
        const firstItemDesktop = document.querySelector('.carousel-desktop .service-item');
        const firstItemMobile = document.querySelector('.carousel-mobile .service-item');

        if (firstItemDesktop) {
            firstItemDesktop.classList.add('selected');
        }
        if (firstItemMobile) {
            firstItemMobile.classList.add('selected');
        }
    });

    // === NAVEGAÇÃO POR TECLADO ===
    document.addEventListener('keydown', function (e) {
        // Detectar qual carrossel está visível
        const isDesktopVisible = window.innerWidth > 768;

        if (e.key === 'ArrowLeft') {
            if (isDesktopVisible) {
                prevSlide('desktop');
            } else {
                prevSlide('mobile');
            }
        } else if (e.key === 'ArrowRight') {
            if (isDesktopVisible) {
                nextSlide('desktop');
            } else {
                nextSlide('mobile');
            }
        }
    });

    // === FUNÇÃO PARA ADICIONAR IMAGENS ===
    function addServiceImage(serviceId, imageSrc) {
        // Adicionar para ambos carrosséis
        const imgDesktop = document.getElementById(`img-${serviceId}-desktop`);
        const imgMobile = document.getElementById(`img-${serviceId}-mobile`);

        if (imgDesktop) imgDesktop.src = imageSrc;
        if (imgMobile) imgMobile.src = imageSrc;
    }

    // === EXEMPLO DE USO DAS IMAGENS ===
    /*
    addServiceImage('gratuidade', 'path/to/gratuidade-image.jpg');
    addServiceImage('senior', 'path/to/senior-image.jpg');
    addServiceImage('livre', 'path/to/livre-image.jpg');
    addServiceImage('familiar', 'path/to/familiar-image.jpg');
    addServiceImage('criminal', 'path/to/criminal-image.jpg');
    addServiceImage('trabalhista', 'path/to/trabalhista-image.jpg');
    */







   // === FUNÇÃO DE SELEÇÃO DE SERVIÇO ===
function selectService(serviceElement, serviceValue) {
    // Remove seleção de todos os itens (ambos carrosséis)
    document.querySelectorAll('.service-item').forEach(item => {
        item.classList.remove('selected');
    });

    // Adiciona seleção ao item clicado
    serviceElement.classList.add('selected');

    // Marca o radio button correspondente
    const radioButton = serviceElement.querySelector('input[type="radio"]');
    radioButton.checked = true;

    // Sincronizar seleção entre desktop e mobile
    const desktopRadio = document.querySelector(`input[name="service"][value="${serviceValue}"]`);
    const mobileRadio = document.querySelector(`input[name="serviceMobile"][value="${serviceValue}"]`);

    if (desktopRadio) desktopRadio.checked = true;
    if (mobileRadio) mobileRadio.checked = true;

    // Atualizar o conteúdo do formulário baseado no serviço selecionado
    updateFormContent(serviceValue);

    console.log('Serviço selecionado:', serviceValue);
}

// === FUNÇÃO PARA ATUALIZAR O CONTEÚDO DO FORMULÁRIO ===
function updateFormContent(serviceValue) {
    const formContainer = document.getElementById('form-container');
    
    // Serviços que não precisam de agendamento
    const noAppointmentServices = [ 'senior', 'cidadao', 'Cidadão', 'vale transporte', 'vale',];
    
    if (noAppointmentServices.includes(serviceValue)) {
        // Mostrar aviso para serviços que não precisam de agendamento
        formContainer.innerHTML = `
            <div class="alert alert-info border-0 rounded-3" role="alert">
                <h5 class="alert-heading fw-bold mb-3">
                    <i class="fas fa-info-circle me-2"></i>Aviso ao Usuário
                </h5>
                <p class="mb-0">
                    <strong>Prezado Usuário,</strong><br>
                    Provisoriamente não será necessário agendamento para o cartão selecionado. 
                    Confira a documentação e compareça presencialmente para ser atendido.
                </p>
            </div>
            <div class="mt-3 p-3 bg-light rounded-3">
                <h6 class="fw-bold mb-2">Documentação necessária:</h6>
                <ul class="mb-0 small">
                    <li>Documento de identidade (RG ou CNH)</li>
                    <li>CPF</li>
                    <li>Comprovante de residência</li>
                    ${getSpecificDocuments(serviceValue)}
                </ul>
            </div>
        `;
    } else {
        // Mostrar formulário de agendamento normal
        formContainer.innerHTML = `
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
        `;
        
        // Reativar máscaras de input após recriar o formulário
        setupInputMasks();
    }
}

// === FUNÇÃO PARA DOCUMENTOS ESPECÍFICOS ===
function getSpecificDocuments(serviceValue) {
    switch(serviceValue) {
        case 'gratuidade':
            return '<li>Comprovante de renda familiar</li>';
        case 'senior':
        case 'Senior':
            return '<li>Comprovante de idade (60 anos ou mais)</li>';
        case 'livre':
            return '<li>Declaração de matrícula escolar</li>';
        case 'Especial':
        case 'especial':
            return '<li>Laudo médico ou documento que comprove a deficiência</li>';
        case 'vale transporte':
        case 'vale':
            return '<li>Declaração do empregador</li>';
        default:
            return '';
    }
}

// === FUNÇÃO PARA CONFIGURAR MÁSCARAS DE INPUT ===
function setupInputMasks() {
    const cpfInput = document.getElementById('cpf-input');
    const phoneInput = document.getElementById('phone-input');
    
    if (cpfInput) {
        cpfInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            }
            e.target.value = value;
        });
    }
    
    if (phoneInput) {
        phoneInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{2})(\d)/, '($1) $2');
                value = value.replace(/(\d{5})(\d{1,4})$/, '$1-$2');
            }
            e.target.value = value;
        });
    }
}
