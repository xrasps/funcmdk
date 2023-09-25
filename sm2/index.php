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
    <div class="container">
        <form action="" method="post">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="phone">Номер телефона:</label>
            <input type="tel" name="phone" id="phone" required>

            <input type="submit" value="Отправить" class="btn">
        </form>
        <?php
        function validateForm($name, $email, $phone)
        {
            // Проверка имени
            if (empty($name) || strlen($name) < 2) {
                return "<p class = 'error'>Ошибка: имя не может быть пустым и должно содержать минимум 2 символа.</p>";
            }

            // Проверка email
            if (empty($email) || strlen($email) < 5 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "<p class = 'error'>Ошибка: неправильный формат email.</p>";
            }

            // Проверка номера телефона
            if (empty($phone) || strlen($phone) != 11) {
                return "<p class = 'error'>Ошибка: номер телефона должен содержать 11 символов.</p>";
            }

            // Если все поля прошли валидацию, возвращаем пустую строку
            return "";
        }

        // Пример использования функции
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $error = validateForm($name, $email, $phone);

        if (!empty($error)) {
            echo $error;
        } else {
            echo "<p class = 'green'>Форма прошла валидацию.</p>";
        }
        ?>
    </div>
</body>

</html>