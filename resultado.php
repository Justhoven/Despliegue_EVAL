<?php
require_once('./index.php')  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>🎉 ¡Correcto! El número era <?= htmlspecialchars($secret) ?>.</h3>
</body>
</html>


