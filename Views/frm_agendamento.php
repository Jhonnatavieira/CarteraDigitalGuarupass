<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
</head>
<body>
    <div class="container-fluid px-0">
        <!-- Header -->
        <div class="header-gradient text-white text-center py-3 mb-4">
            <h2 class="mb-0 fw-bold">Agendamento</h2>
        </div>
        
        <div class="container">
            <!-- Carrossel de Serviços -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div id="servicesCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row g-4 justify-content-center">
                                    <!-- Gratuidade -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-item text-center" onclick="selectService(this, 'gratuidade')">
                                            <img src="" alt="Gratuidade" class="service-image rounded-3 mb-3" id="img-gratuidade">
                                            <span class="badge badge-custom badge-gratuidade text-white mb-2">Defensoria Pública</span>
                                            <h5 class="fw-bold mb-3">Gratuidade</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="gratuidade" class="radio-custom" id="radio-gratuidade" checked>
                                                <label for="radio-gratuidade" class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Senior -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-item text-center" onclick="selectService(this, 'senior')">
                                            <img src="" alt="Senior" class="service-image rounded-3 mb-3" id="img-senior">
                                            <span class="badge badge-custom badge-senior text-white mb-2">Defensoria Pública</span>
                                            <h5 class="fw-bold mb-3">Senior</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="senior" class="radio-custom" id="radio-senior">
                                                <label for="radio-senior" class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Passe Livre -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-item text-center" onclick="selectService(this, 'livre')">
                                            <img src="" alt="Passe Livre Estudantil" class="service-image rounded-3 mb-3" id="img-livre">
                                            <span class="badge badge-custom badge-livre text-white mb-2">Defensoria Pública</span>
                                            <h5 class="fw-bold mb-3">Passe Livre Estudantil</h5>
                                            <div class="d-flex align-items-center justify-content-center gap-2">
                                                <input type="radio" name="service" value="livre" class="radio-custom" id="radio-livre">
                                                <label for="radio-livre" class="text-muted small">Selecionar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controles do carrossel -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                        
                        <!-- Indicadores -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="2"></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Formulário -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4">
                            <form>
                                <!-- Primeira linha -->
                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Selecione uma data:</label>
                                        <input type="date" class="form-control form-control-lg rounded-3">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Digite o seu nome:</label>
                                        <input type="text" class="form-control form-control-lg rounded-3" placeholder="Seu nome completo">
                                    </div>
                                </div>
                                
                                <!-- Segunda linha -->
                                <div class="row g-3 mb-4">
                                    <div class="col-lg-4">
                                        <label class="form-label fw-semibold">E-mail:</label>
                                        <input type="email" class="form-control form-control-lg rounded-3" placeholder="seu@email.com">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label fw-semibold">CPF:</label>
                                        <input type="text" class="form-control form-control-lg rounded-3" placeholder="000.000.000-00" maxlength="14" id="cpf-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label fw-semibold">Celular:</label>
                                        <input type="tel" class="form-control form-control-lg rounded-3" placeholder="(00) 00000-0000" maxlength="15" id="phone-input">
                                    </div>
                                </div>
                                
                                <!-- Botão -->
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary-custom btn-lg px-5 rounded-3 fw-semibold">
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
    
    <script>
        // Função para selecionar serviço
        function selectService(serviceElement, serviceValue) {
            // Remove seleção de todos os itens
            document.querySelectorAll('.service-item').forEach(item => {
                item.classList.remove('selected');
            });
            
            // Adiciona seleção ao item clicado
            serviceElement.classList.add('selected');
            
            // Marca o radio button correspondente
            const radioButton = serviceElement.querySelector('input[type="radio"]');
            radioButton.checked = true;
            
            console.log('Serviço selecionado:', serviceValue);
        }
        
        // Máscara para CPF
        document.getElementById('cpf-input').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            }
            e.target.value = value;
        });
        
        // Máscara para telefone
        document.getElementById('phone-input').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{2})(\d)/, '($1) $2');
                value = value.replace(/(\d{5})(\d{1,4})$/, '$1-$2');
            }
            e.target.value = value;
        });
        
        // Inicializar o primeiro item como selecionado
        document.addEventListener('DOMContentLoaded', function() {
            const firstItem = document.querySelector('.service-item');
            if (firstItem) {
                firstItem.classList.add('selected');
            }
        });
        
        // Função para adicionar imagens
        function addServiceImage(serviceId, imageSrc) {
            const img = document.getElementById(`img-${serviceId}`);
            if (img) {
                img.src = imageSrc;
            }
        }
        
        // Exemplo de uso das imagens:
        // addServiceImage('gratuidade', 'path/to/gratuidade-image.jpg');
        // addServiceImage('senior', 'path/to/senior-image.jpg');
        // addServiceImage('livre', 'path/to/livre-image.jpg');
    </script>
</body>
</html>
