<?php
// Arquivo: StatusUsuario.php

declare(strict_types=1);


enum StatusUsuario: string
{
    case Ativo = 'Ativo';
    case Inativo = 'Inativo';
}