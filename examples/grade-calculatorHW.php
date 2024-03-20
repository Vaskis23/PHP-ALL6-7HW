<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="grade1">Grade 1:</label>
        <input type="text" id="grade1" name="grade1"><br><br>

        <label for="grade2">Grade 2:</label>
        <input type="text" id="grade2" name="grade2"><br><br>

        <label for="grade3">Grade 3:</label>
        <input type="text" id="grade3" name="grade3"><br><br>

        <input type="submit" name="submit" value="Calculate Average">
    </form>

    <?php
    // Функция для проверки, является ли строка числом
    function isNumeric($str) {
        return is_numeric($str);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Проверяем, были ли переданы значения оценок
        if (!empty($_POST['grade1']) && !empty($_POST['grade2']) && !empty($_POST['grade3'])) {
            // Проверяем, являются ли значения числами
            if (isNumeric($_POST['grade1']) && isNumeric($_POST['grade2']) && isNumeric($_POST['grade3'])) {
                // Преобразуем значения оценок в числа
                $grade1 = floatval($_POST['grade1']);
                $grade2 = floatval($_POST['grade2']);
                $grade3 = floatval($_POST['grade3']);

                // Проверяем, находятся ли значения оценок в диапазоне от 0 до 10
                if ($grade1 >= 0 && $grade1 <= 10 && $grade2 >= 0 && $grade2 <= 10 && $grade3 >= 0 && $grade3 <= 10) {
                    // Вычисляем среднее значение оценок
                    $average = ($grade1 + $grade2 + $grade3) / 3;

                    // Выводим результат в виде HTML таблицы
                    echo "<h3>Grades and Average:</h3>";
                    echo "<table border='1'>";
                    echo "<tr><th>Grade 1</th><th>Grade 2</th><th>Grade 3</th><th>Average</th></tr>";
                    echo "<tr><td>$grade1</td><td>$grade2</td><td>$grade3</td><td>$average</td></tr>";
                    echo "</table>";
                } else {
                    // Если значения оценок выходят за диапазон от 0 до 10, выводим сообщение об ошибке
                    echo "<p>Error: Grades must be between 0 and 10.</p>";
                }
            } else {
                // Если введены не числовые значения, выводим сообщение об ошибке
                echo "<p>Error: Grades must be numeric.</p>";
            }
        } else {
            // Если не все поля заполнены, выводим сообщение об ошибке
            echo "<p>Error: All fields are required.</p>";
        }
    }
    ?>
</body>
</html>
