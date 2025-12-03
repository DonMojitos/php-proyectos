<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países</title>
</head>
<body>
    <table style="border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">Continente</th>
                <th style="border: 1px solid #ddd; padding: 12px; text-align: left;">País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paises as $pais): ?>
                <tr style="background-color: #fff;">
                    <td style="border: 1px solid #ddd; padding: 12px;"><?= htmlspecialchars($pais['continente']) ?></td>
                    <td style="border: 1px solid #ddd; padding: 12px;"><?= htmlspecialchars($pais['nombre']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>