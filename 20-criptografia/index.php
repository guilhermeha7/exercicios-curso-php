<?php
//Senha digitada no input
$senhaDigitada = "123456";
$senhaCadastradaNoBanco = '$2y$12$md9tNwOiH60TQjNwVMDReuVDDH7/cTyZCz/SrmnnHEUcAW.BNPqtG';

//Cadastro da senha no banco de dados
$options = [
    'cost' => 12, //Define a segurança da criptografia gerada (quanto maior, mais seguro, mas mais poder computacional para gerá-lo)
];
$senhaSegura = password_hash($senhaDigitada, PASSWORD_DEFAULT, $options); //password_hash(senha, algoritmo de criptografia, configurações): Criptografa a senha usando o algoritmo mais seguro disponível (PASSWORD_DEFAULT)
echo $senhaSegura . "<br>";

//Verificação da senha digitada no input com a senha cadastrada no banco
if (password_verify($senhaDigitada, $senhaCadastradaNoBanco)) { //password_verify(senha, hash): Verifica se a senha corresponde ao hash criptografado
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}