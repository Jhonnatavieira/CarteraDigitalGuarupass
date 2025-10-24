# 🪪 Carteira digital Guarupass

Sistema de gerenciamento de carteirinhas da Guarupass desenvolvido em HTML, CSS, Javascript, PHP e MySQL, utilizando conceitos de Programação Orientada a Objetos (POO) e MVC. Permite criar contas, simular transações financeiras e consultar histórico de movimentações.

---

## 🚀 Funcionalidades

- Criar contas utilizando Session
- Realizar depósitos e saques
- Validação de usuario
- Design Resposivo

---

## 🛠 Tecnologias utilizadas

- PHP 8
- HTML e CSS
- Bootstrap
- Javascript
- MySQL (Mamp)
- Padrões de projeto (POO)
- MVC

---

## 📂 Estrutura do projeto

```text
CarteraDigitalGuarupass/
├── _doc/                      # Documentação e arquivos auxiliares
├── Controllers/               # Lógica de controle e fluxo da aplicação
│   └── ...                    # Arquivos de controle (ex: agendamento, login)
├── CSS/                       # Estilos da interface
│   └── ...                    # Arquivos .css
├── DataAcess/                 # Camada de acesso a dados
│   └── ...                    # Conexão com banco ou arquivos
├── JS/                        # Scripts JavaScript
│   └── script.js              # Lógica de interação da interface
├── Models/                    # Modelos de dados e entidades
│   └── ...                    # Classes para usuário, transações, etc.
├── Views/                     # Arquivos de visualização
│   └── dashboard.php          # Painel principal do usuário
├── img/                       # Imagens usadas na interface
│   └── ...                    # Ícones, banners, etc.
├── index.php                  # Página inicial do sistema
├── README.md                  # Documentação do projeto
├── LICENSE                    # Licença MIT
├── .gitattributes             # Configurações de Git
```

---

## ❗ Requisitos para execução
Para executar este projeto localmente, você precisará de um ambiente de servidor web com PHP e um banco de dados MySQL. A forma mais fácil de obter isso é usando um pacote como o MAMP.

Servidor Local (MAMP):

Usado para simular um ambiente de servidor Apache, PHP e MySQL.

Download: https://www.mamp.info

Admin. do Banco de Dados (MySQL Workbench ou phpMyAdmin):

Ferramenta gráfica para administrar o banco de dados. O MAMP já inclui o phpMyAdmin, que pode ser acessado pelo próprio painel do MAMP.

Download (Workbench, opcional): https://dev.mysql.com/downloads/workbench


## 📦 Como executar
Para obter uma cópia local deste projeto e começar a trabalhar nele, siga estes passos:

1.  Clone o repositório:
    ```bash
    git clone https://github.com/Jhonnatavieira/CarteraDigitalGuarupass.git
    ```

2. Mover para o Servidor:

Mova (ou copie e cole) a pasta CarteraDigitalGuarupass que você acabou de clonar para dentro da pasta htdocs do seu MAMP.

(O caminho padrão do htdocs no Windows é C:/MAMP/htdocs/)

Iniciar os Servidores:

Abra o MAMP e inicie os servidores Apache e MySQL.

Criar o Banco de Dados:

Abra o phpMyAdmin (normalmente acessível pelo painel do MAMP ou em http://localhost/phpMyAdmin).

Crie um novo banco de dados.

Selecione o banco que você criou e vá para a aba "Importar".

Importe os arquivos .sql que estão na pasta _doc/ do projeto para criar as tabelas e inserir dados iniciais.

Verificar a Conexão:

Verifique o(s) arquivo(s) de conexão dentro da pasta DataAcess/.

Confirme se as credenciais (host, usuário, senha, porta) batem com a sua configuração do MAMP:

Host: localhost

Usuário: root

Senha: root (ou em branco, dependendo da sua instalação)

Porta MySQL (padrão MAMP): 8889

Nome do Banco: (O nome que você deu no passo 4, ex: guarupass_db)

Acessar a Aplicação:

Abra o seu navegador e acesse o link para a pasta do projeto.

O endereço será algo como: http://localhost/CarteraDigitalGuarupass

(Se o seu MAMP usa uma porta diferente para o Apache, pode ser http://localhost:8888/CarteraDigitalGuarupass)
    


---


## 💡 Como Usar a Aplicação
Como esta é uma aplicação web, o uso é feito pelo navegador:

Acesse a página inicial (index.php) no seu navegador (link do passo 6 acima).

Crie uma nova conta de usuário através do formulário de registro.

Faça login com as credenciais que você acabou de criar.

Você será redirecionado para o painel (dashboard.php), onde poderá:

Simular depósitos e saques.

Consultar seu saldo atual.

---
