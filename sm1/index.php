<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>

<body>
    <!-- задание 1 -->
    <div class="container">
        <h1>Задание 1</h1>
        <?php
        $students = ["Иванов", "Петров", "Сидоров", "Козлов", "Смирнов", "Васильев", "Михайлов"];

        // Вывод списка студентов на экран
        echo "<h2 class='blue'> Students list </h2> ";
        foreach ($students as $student) {
            echo "<li>" . $student . "</li><br>";
        }

        // Подсчет количества студентов
        $count = count($students);
        echo "<h2 class='blue'>Количество студентов: </h2>" . $count . "<br>";

        // Проверка наличия фамилии "Сидоров" в списке
        if (in_array("Сидоров", $students)) {
            echo "<h2 class='green'>Фамилия Сидоров есть в списке студентов</h2>";
        } else {
            echo "<h2 class='green'>Фамилии Сидоров нет в списке студентов<br></h2>";
        }

        // Удаление последней фамилии из списка и сохранение в переменную $expelled
        $expelled = array_pop($students);
        echo "<h2 class='red'>Фамилия студента, исключенного из списка: </h2>" . $expelled;

        ?>

        <!-- задание 2 -->
        <h1>Задание 2</h1>
        <?php

        $krugoks = array(
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        );

        asort($krugoks); // Сортируем массив по фамилиям
        
        foreach ($krugoks as $krugok => $familiya) {
            echo "<li class='dark'>" . $krugok . ' - ' . $familiya . '</li><br>';
        }
        ?>

        <!-- задание 3 -->
        <h1>Задание 3</h1>
        <?
        $hobby = array();
        $hobby = [
            'Name' => 'Evelina',
            'Surname' => 'Gazetdinova',
            'Group' => '424 web',
            'hobby' => ['draw', 'looking for happy'],
            'socials' => ['tg' => '@xrasps', 'inst*' => '@xrasps']

        ];


        echo "<li class='blue bold'>" . $hobby['Name'] . '</li><br>';

        echo "<li class='blue bold'>" . $hobby['Surname'] . '</li><br>';

        echo "<li class='blue bold'>" . $hobby['Group'] . '</li><br>';

        echo "<li class='blue bold'>" . $hobby['hobby'][0] . '</li><br>';

        echo "<li class='blue bold '>" . $hobby['hobby'][1] . '</li><br>';

        echo "<li class='blue bold'>" . $hobby['socials']['tg'] . '</li><br>';

        echo "<li class='blue bold'>" . $hobby['socials']['inst*'] . '</li><br>';


        ?>
    </div>
</body>

</html>