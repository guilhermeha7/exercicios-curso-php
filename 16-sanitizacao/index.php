<form action="index.php" method="POST">
    <input placeholder="Nome" type="text" name="nome"> <br>
    <input placeholder="Email" type="email" name="email"> <br>
    <input placeholder="Idade" type="number" name="idade"> <br>
    <input placeholder="URL" type="text" name="url"> <br>
    <button type="submit" name="formulario_enviado">Enviar</button>
</form>

<?php
if (isset($_POST['formulario_enviado'])) { //Se o índice formulário_enviado existir no array _POST

    //filter_input(array, dado a ser limpado ou filtrado, tipo do filtro)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS impede que tags HTML virem código
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //FILTER_SANITIZE_EMAIL limpa caracteres não usados em um email 
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); //FILTER_SANITIZE_NUMBER_INT limpa caracteres que não são número 
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL); //FILTER_SANITIZE_URL limpa espaços em branco

    echo "Nome cadastrado:" . $nome . "<br>";
    echo "Email cadastrado:" . $email . "<br>";
    echo "Idade cadastrada:" . $idade;
    echo "URL cadastrada:" . $url;
}
