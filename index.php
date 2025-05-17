<?php
session_start();

// inicia o carrinho
if (!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

//adiciona item ao carrinho
if (isset($_POST['produto'])) {
    $_SESSION['carrinho'][] = $_POST['produto'];
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lojinha</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>


    <header>
    <h1>Minha Loja</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="car.php">Carrinho (<?= count($_SESSION['carrinho']) ?>)</a>
    </nav>
    </header>

    <main>
        <h2>Produtos</h2>
        <div class = "produtos">
            <form method="POST">
                <div class= "produto">
                    <h3>Produto1</h3>
                    <p>$ 50,00</p>
                    <button name = "produto" value = "Produto1">Adicionar</button>
                </div>
            </form>

             <form method="POST">
                <div class= "produto">
                    <h3>Produto2</h3>
                    <p>$ 80,00</p>
                    <button name = "produto" value = "Produto2">Adicionar</button>
                </div>
            </form>
    </main>

</body>
</html>