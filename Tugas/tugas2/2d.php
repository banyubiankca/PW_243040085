<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php - Papan Catur</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black ;
        }
        td {
            width: 80px;
            height: 80px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 0; $i < 5; $i++) { 
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) { 
                $class = ($i + $j) % 2 == 0 ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>