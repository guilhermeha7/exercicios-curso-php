<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="home.php" method="POST"> <!--Renderiza a página home.php e envia os dados para lá (os dados enviados via POST não aparecem na URL, ao contrário do GET)-->
        <input placeholder="Nome" type="text" name="nome"> <!--O atributo name é essencial aqui-->
        <input placeholder="Email" type="email" name="email">
        <button type="submit">Enviar</button>
    </form>
    <a href="paginaget.php?idade=13&animal=Gato">Enviar dados via GET</a> <!--? diz "quero passar valores via URL"-->
</body>

</html>