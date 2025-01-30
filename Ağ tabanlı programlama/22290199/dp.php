<?php
$host = 'localhost';
$dbname = 'iletisim_db'; // MySQL'de oluşturduğun veritabanı adı
$username = 'root'; // MySQL kullanıcı adın
$password = ''; // Eğer şifren varsa buraya yaz

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}
?>
