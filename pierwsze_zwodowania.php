<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pierwsze zwodowania po 1920</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'index.php'; ?>
<main>
    <h2>Pierwsze zwodowania po 1920</h2>
    <table>
        <tr><th>Typ</th><th>Pierwszy rok zwodowania</th></tr>
        <?php
        $sql = "SELECT typ, MIN(rok_zwodowania) AS pierwszy_rok
                FROM okrety
                WHERE rok_zwodowania > 1920
                GROUP BY typ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['typ']}</td><td>{$row['pierwszy_rok']}</td></tr>";
        }
        ?>
    </table>
</main>
</body>
</html>
