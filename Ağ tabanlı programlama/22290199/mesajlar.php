<?php
require 'db.php'; // Veritabanı bağlantısını ekliyoruz

$query = "SELECT * FROM iletisim ORDER BY id DESC";
$stmt = $pdo->query($query);
$mesajlar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Gönderilen Mesajlar</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Gönderilmiş Mesajlar</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Email</th>
            <th>Mesaj</th>
            <th>Tarih</th>
        </tr>
        <?php foreach ($mesajlar as $mesaj) : ?>
            <tr>
                <td><?= htmlspecialchars($mesaj['id']) ?></td>
                <td><?= htmlspecialchars($mesaj['ad']) ?></td>
                <td><?= htmlspecialchars($mesaj['soyad']) ?></td>
                <td><?= htmlspecialchars($mesaj['email']) ?></td>
                <td><?= htmlspecialchars($mesaj['mesaj']) ?></td>
                <td><?= htmlspecialchars($mesaj['tarih'] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
