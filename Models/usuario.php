<?php 
declare(strict_types=1);

require_once 'StatusUsuario.php';

class usuario
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
        $this -> pdo = $pdo;
    }

    //========= MÉTODOS GET =========
    public function getIdUsuario(): ?int
    {
        return $this -> id_usuario;
    }
    public function getNome(): string
    {
        return $this -> nome;
    }
    public function getEmail(): string{
        return $this -> email;
    }
    public function getUsuario(): string{
        return $this -> usuario;
    }
    public function getCpf(): string{
        return $this -> cpf;
    }
    public function getData(): DateTimeImmutable{
        return $this -> data;
    }
    public function getTelefone(): string{
        return $this -> telefone;
    }
    public function getSaldo(): float{
        return $this -> saldo;
    }
    public function getStatus(): StatusUsuario{
        return $this -> status;
    }

    //========= MÉTODOS SET =========
    public function setNome(string $nome): void{
        if(strlen($nome) < 2){
            throw new InvalidArgumentException("O nome deve ter pelo menos 2 caracteres.");
        }
        $this->nome=trim($nome);
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
        try {
            $this->data = $data;
        } catch (Exception $e) {
            throw new InvalidArgumentException("Data inválida: " . $e->getMessage());
        }
    }
    public function setEmail(string $email): void{
        $this->email = $email;
    }
    public function setTelefone(string $telefone) : void{
        $this->telefone = $telefone;
    }
    public function setSaldo(float $saldo) : void{
        $this->saldo = $saldo;
    }
    public function setStatus(StatusUsuario $status) : void{
        $this->status = $status;
    }

    //========= FIM DOS MÉTODOS SET/GET =========


    /**
     * Salva o usuario no banco ou atualiza
     * valida a existencia de dados unicos antes de inserir
     * @return bool Retorna true em caso de sucesso
     * @throws Exception se o usuário, email ou CPF já existirem no banco
     */
    public function salvar() : bool {
        if ($this->id_usuario === null) {
            
            $sqlVerifica = "SELECT id_usuario FROM usuario WHERE usuario = :usuario OR email = :email OR cpf = :cpf";
            $stmtVerifica = $this -> pdo->prepare( $sqlVerifica);
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

            //formata a data
            $stmt->bindValue(':data', $this->data->format('Y-m-d H:i:s'));
            $stmt->bindValue(':status', $this->status->value); // .value pega o valor string do Enum

        }else {
            $sql = "UPDATE usuario SET nome = :nome, usuario = :usuario, email = :email, telefone = :telefone WHERE id_usuario = :id_usuario";
        }


        // associa as outras variaveis
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':usuario', $this->usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':cpf', $this->cpf);
        $stmt->bindValue(':telefone', $this->telefone);
        $stmt->bindValue(':saldo', $this->saldo);

        return $stmt->execute();
    }
}
?>