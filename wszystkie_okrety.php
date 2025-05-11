<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wszystkie okręty</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'index.php'; ?>
<main>
    <h2>Wszystkie okręty</h2>
    <table>
        <tr>
            <th>ID</th><th>Nazwa</th><th>Typ</th><th>Rok zwodowania</th><th>Klasa</th><th>Kraj</th>
        </tr>
        <?php
        $sql = "SELECT o.id_okretu, o.nazwa, o.typ, o.rok_zwodowania, 
                       k.klasa, k.kraj
                FROM okrety o
                LEFT JOIN klasy_okretow k ON o.typ = k.typ";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id_okretu']}</td>
                        <td>{$row['nazwa']}</td>
                        <td>{$row['typ']}</td>
                        <td>{$row['rok_zwodowania']}</td>
                        <td>{$row['klasa']}</td>
                        <td>{$row['kraj']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Brak danych do wyświetlenia.</td></tr>";
        }
        ?>
    </table>
</main>
</body>
</html>
