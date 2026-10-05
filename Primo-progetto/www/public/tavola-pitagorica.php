<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tavola pitagorica</title>
</head>
<body>
    <h3>
        <table border="1">
        <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= 10; $j++) {
                    echo "<td>";
                    $temp = $i * $j;
                    echo $temp;
                    echo "</td>";

                }
                echo "</tr>";
            }
        ?>
        </table>
    </h3>
</body>
</html>