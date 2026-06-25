<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $A = [
        (int)$_POST['a0'],
    ];

    $NA[] = rand(1, 25);


    $resultado = ($NA[0] == $A[0])
        ? "✅ Você ganhou!"
        : "❌ Você perdeu!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Jogo do bicho</title>
</head>

<body>
    <form method="POST">
        <label>Valor 1: <input type="number" name="a0" min="1" max="25" required></label><br><br>

        <button type="submit">Jogar</button>
    </form>

    <?php if (isset($resultado)): ?>
        <h2><?= $resultado ?></h2>
        <p>Seus números: <?= implode(', ', $A) ?></p>
        <p>Números sorteados: <?= implode(', ', $NA) ?></p>
    <?php endif; ?>
</body>

</html>