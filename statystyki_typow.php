<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Statystyki typów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'index.php'; ?>
<main>
    <h2>Liczba okrętów według typu</h2>
    <table>
        <tr><th>Typ</th><th>Kraj</th><th>Liczba okrętów</th></tr>
        <?php
        $sql = "SELECT k.typ, k.kraj, COUNT(o.id_okretu) AS liczba_okretow
                FROM klasy_okretow k
                JOIN okrety o ON k.typ = o.typ
                GROUP BY k.typ, k.kraj
                ORDER BY liczba_okretow DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['typ']}</td><td>{$row['kraj']}</td><td>{$row['liczba_okretow']}</td></tr>";
        }
        ?>
    </table>
</main>
</body>
</html>
