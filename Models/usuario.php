<?php

declare(strict_types=1);

require_once 'StatusUsuario.php';

class Usuario
{
    private ?int $id_usuario = null;
    private string $nome;
    private string $usuario;
    private string $email;
    private string $senha;
    private string $cpf;
    private DateTimeImmutable $data;
    private string $telefone;
    private float $saldo;
    private StatusUsuario $status;

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //========= MÉTODOS GET =========
    public function getIdUsuario(): ?int
    {
        return $this->id_usuario;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getUsuario(): string
    {
        return $this->usuario;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function getData(): DateTimeImmutable
    {
        return $this->data;
    }
    public function getTelefone(): string
    {
        return $this->telefone;
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    public function getStatus(): StatusUsuario
    {
        return $this->status;
    }

    //========= MÉTODOS SET =========
    public function setNome(string $nome): void
    {
        if (strlen($nome) < 2) {
            throw new InvalidArgumentException("O nome deve ter pelo menos 2 caracteres.");
        }
        $this->nome = trim($nome);
    }
    public function setUsuario(string $usuario): void
    {
        $this->usuario = trim($usuario);
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos
    }
    public function setData(DateTimeImmutable $data): void
    {
        $this->data = $data;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
    public function setStatus(StatusUsuario $status): void
    {
        $this->status = $status;
    }
    public function setSenha(string $senhaPura): void
    {
        if (strlen($senhaPura) < 6) {
            throw new InvalidArgumentException("A senha deve ter no mínimo 6 caracteres.");
        }
        $this->senha = password_hash($senhaPura, PASSWORD_DEFAULT);
    }

    //========= FIM DOS MÉTODOS SET/GET =========


    /**
     * Salva o usuario no banco ou atualiza
     * valida a existencia de dados unicos antes de inserir
     * @return bool Retorna true em caso de sucesso
     * @throws Exception se o usuário, email ou CPF já existirem no banco
     */
    public function salvar(): bool
    {
        if ($this->id_usuario === null) {

            $sqlVerifica = "SELECT id_usuario FROM usuario WHERE usuario = :usuario OR email = :email OR cpf = :cpf";
            $stmtVerifica = $this->pdo->prepare($sqlVerifica);
            $stmtVerifica->bindValue(':usuario', $this->usuario);
            $stmtVerifica->bindValue(':email', $this->email);
            $stmtVerifica->bindValue(':cpf', $this->cpf);
            $stmtVerifica->execute();

            if ($stmtVerifica->fetch()) {
                throw new Exception("O nome de usuário, e-mail ou CPF informado já está em uso.");
            }

            $sql = "INSERT INTO usuario (nome, usuario, email, senha, cpf, data, telefone, saldo, status)
                    VALUES (:nome, :usuario, :email, :senha, :cpf, :data, :telefone, :saldo, :status)";
            $stmt = $this->pdo->prepare($sql);


            // Associa (bind) TODOS os valores para o INSERT
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':usuario', $this->usuario);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':cpf', $this->cpf); // CPF é incluído no INSERT
            $stmt->bindValue(':data', $this->data->format('Y-m-d H:i:s'));
            $stmt->bindValue(':telefone', $this->telefone);
            $stmt->bindValue(':saldo', $this->saldo);
            $stmt->bindValue(':status', $this->status->value);
            //formata a data
            $stmt->bindValue(':data', $this->data->format('Y-m-d H:i:s'));
            $stmt->bindValue(':status', $this->status->value); // .value pega o valor string do Enum

            $sucesso = $stmt->execute();

            // Se o INSERT deu certo, atualiza o ID do objeto
            if ($sucesso) {
                $this->id_usuario = (int)$this->pdo->lastInsertId();
            }
            return $sucesso;
        } else {

            $sql = "UPDATE usuario SET 
                    nome = :nome, 
                    usuario = :usuario, 
                    email = :email, 
                    telefone = :telefone,
                    saldo = :saldo, 
                    status = :status 
                WHERE id_usuario = :id_usuario";

            $stmt = $this->pdo->prepare($sql);

            // Associa (bind) apenas os valores necessários para o UPDATE
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':usuario', $this->usuario);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':telefone', $this->telefone);
            $stmt->bindValue(':saldo', $this->saldo);
            $stmt->bindValue(':status', $this->status->value);
            $stmt->bindValue(':id_usuario', $this->id_usuario, PDO::PARAM_INT); // O ID para o WHERE

            // Executa e retorna o resultado
            return $stmt->execute();
        }
    }

    /**
     * Busca um usuario pelo id
     * @param int $id O Id do usuario a ser buscado
     * @param PDO $pdo A conexão com o banco de dados
     * @return ?self caso encontre, retorna um objeto da classe Usuario, se não encontrar retorna null
     */
    public static function buscarPorId(int $id, PDO $pdo): ?self
    {

        $sql = "SELECT * FROM usuario WHERE id_usuario = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);
        return $dados ? self::hidratarUsuario($dados, $pdo) : null;
    }

    public static function buscarPorUsuarioOuEmail(string $identificador, PDO $pdo): ?self
    {
        // A query SQL agora inclui uma cláusula OR para verificar as duas colunas.
        $sql = "SELECT * FROM usuario WHERE usuario = :identificador OR email = :identificador";

        $stmt = $pdo->prepare($sql);

        // Associa o valor do identificador (que pode ser um username ou um email) ao placeholder.
        $stmt->bindValue(':identificador', $identificador);

        $stmt->execute();

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        // Se encontrou dados, usa nosso método auxiliar para construir e retornar o objeto.
        // Se não, retorna nulo. A lógica de hidratação é a mesma.
        return $dados ? self::hidratarUsuario($dados, $pdo) : null;
    }

    
    /**
     * Método auxiliar privado para "hidratar" (preencher) um objeto Usuario com dados do banco.
     * 
     * @param array $dados Um array associativo com os dados de uma linha do banco.
     * @param PDO $pdo A conexão com o banco, necessária para criar o novo objeto.
     * @return self Retorna um objeto Usuario completo e preenchido.
     */
    private static function hidratarUsuario(array $dados, PDO $pdo): self
    {
        $usuario = new self($pdo);
        $usuario->id_usuario = (int)$dados['id_usuario'];
        $usuario->nome = $dados['nome'];
        $usuario->usuario = $dados['usuario'];
        $usuario->senha = $dados['senha'];
        $usuario->cpf = $dados['cpf'];
        $usuario->email = $dados['email'];
        $usuario->telefone = $dados['telefone'];
        $usuario->saldo = (float)$dados['saldo'];
        $usuario->data = new DateTimeImmutable($dados['data']);
        $usuario->status = StatusUsuario::from($dados['status']);
        return $usuario;
    }
}
