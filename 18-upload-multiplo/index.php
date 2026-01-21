<?php
$contador = 0;
$quantidadeDeArquivos = 0;

if (isset($_FILES['arquivo'])): //Verifica se arquivo existe em _FILES
    $quantidadeDeArquivos = count($_FILES['arquivo']['name']); //count: conta a quantidade de elementos em um array
endif;

while ($contador < $quantidadeDeArquivos) {
    //Ao Clicar em Enviar Arquivo
    if (isset($_POST['formulario_enviado'])) { //Se o índice formulário_enviado existir no array _POST
        $formatosPermitidos = array("jpg", "png", "jpeg");
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); //pathinfo: retorna a extensão de um arquivo

            if (in_array($extensao, $formatosPermitidos)) { //Se a extensão estiver no formato permitido
                $temporario = $_FILES['arquivo']['tmp_name'][$contador]; //$_FILES['arquivo']['tmp_name'] retorna o caminho temporário que o PHP salvou o arquivo
                $localDeSalvamento = __DIR__ . "\img" . uniqid() . "." . $extensao; //__DIR__ retorna o diretório do arquivo index.php
                if (move_uploaded_file($temporario, $localDeSalvamento)) { //Move do armazenamento temporário para outro local
                    echo "Upload feito com sucesso em $localDeSalvamento <br>";
                } else {
                    echo "Erro, não foi possível fazer o upload <br>";
                }
            } else {
                echo "Formato inválido <br>";
            }
    }
    $contador = $contador + 1;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> <!--enctype="multipart/form-data é necessário para permitir o envio de arquivos, como imagens, para o servidor"-->
        <input type="file" name="arquivo[]" multiple><br> <!--Adicionando colchetes ao name do input file e o atributo multiple permite o upload de múltiplos arquivos-->
        <input type="submit" name="formulario_enviado">
    </form>
</body>

</html>