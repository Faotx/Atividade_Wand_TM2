<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $A = [
        (int)$_POST['a0'],
        (int)$_POST['a1'],
        (int)$_POST['a2'],
    ];

    $NA = [];
    for ($i = 0; $i < 3; $i++) {
        $NA[] = rand(1, 3);
    }

    $resultado = ($NA[0] == $A[0] && $NA[1] == $A[1] && $NA[2] == $A[2])
        ? "✅ Você ganhou!"
        : "❌ Você perdeu!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tele sena</title>
</head>

<body>
    <form method="POST">
        <label>Valor 1: <input type="number" name="a0" min="1" max="3" required></label><br><br>
        <label>Valor 2: <input type="number" name="a1" min="1" max="3" required></label><br><br>
        <label>Valor 3: <input type="number" name="a2" min="1" max="3" required></label><br><br>
        <button type="submit">Jogar</button>
    </form>

    <?php if (isset($resultado)): ?>
        <h2><?= $resultado ?></h2>
        <p>Seus números: <?= implode(', ', $A) ?></p>
        <p>Números sorteados: <?= implode(', ', $NA) ?></p>
    <?php endif; ?>
</body>

</html>