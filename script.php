<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
// nome vazio
if (empty($nome)) {
    echo 'O nome não pode ser vazio';
    return;
}
//nome maior que 3
if (strlen($nome) < 3) {
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}
//nome menor que 40
if (strlen($nome) > 40) {
    echo 'O nome é muito extenso.';
    return;
}

//confirma que a idade é um número
if (!is_numeric($idade)) {
    echo 'Informe um número para a idade';
    return;
}

if ($idade >= 6 && $idade <= 12) 
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if ($categorias[$i] == 'infantil') 
                echo "O nadador ".$nome." Compete na categoria " .$categorias[$i];
        }
    }
elseif ($idade >= 13 && $idade < 18) 
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if ($categorias[$i] == 'adolescente') 
                echo "O nadador ".$nome." Compete na categoria " .$categorias[$i];
        }
    }
else 
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if ($categorias[$i] == 'adulto') 
                echo "O nadador ".$nome." Compete na categoria " .$categorias[$i];
        }
    }

?>