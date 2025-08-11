<?php 
declare(strict_types=1);

require_once 'StatusUsuario.php';

class usuario
{
    private ?int $id = null;
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

    //metodos get
    public function getIdUsuario(): ?int
    {
        return $this -> id;
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
    


    //metodos set
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

}
?>