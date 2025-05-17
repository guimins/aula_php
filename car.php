<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Seu Carrinho</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Seu Carrinho</h1>
    <nav>
      <a href="index.php">Voltar à loja</a>
    </nav>
  </header>

  <main>
    <h2>Itens no Carrinho</h2>
    <?php if (count($carrinho) > 0): ?>
      <ul>
        <?php foreach ($carrinho as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
      <!-- Botão para limpar o carrinho -->
      <form method="POST">
        <button type="submit" name="limpar">🗑️ Limpar Carrinho</button>
      </form>
    <?php else: ?>
      <p>Seu carrinho está vazio.</p>
    <?php endif; ?>
  </main>
</body>
</html>
