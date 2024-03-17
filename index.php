<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovely</title>
    <!-- Подключение стилей CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Подключение логотипа -->
    <link rel="icon" href="logo.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6e6;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #ffcccc;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 20px;
        }
        footer {
            background-color: #ffcccc;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <!-- Ваш логотип -->
        <img src="logo.png" alt="Логотип">
        <h1>Добро пожаловать в наш салон красоты</h1>
        <!-- Навигационное меню -->
        <nav>
            <ul>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="services">
            <h2>Наши услуги</h2>
            <ul>
                <li>Стрижка</li>
                <li>Окрашивание</li>
                <li>Макияж</li>
                <!-- Добавьте другие услуги -->
            </ul>
        </section>

        <section id="about">
            <h2>О нас</h2>
            <p>Наш салон красоты предлагает широкий спектр услуг по уходу за внешностью. Наши профессиональные стилисты и визажисты гарантируют высокое качество обслуживания.</p>
            <!-- Добавьте дополнительную информацию о вашем салоне -->
        </section>

        <section id="contact">
            <h2>Контакты</h2>
            <p>Адрес: г. Семей, ул. хорошая, дом большой</p>
            <p>Телефон: +7 (XXX) XXX-XX-XX</p>
            <p>Email: lashes.with.lov</p>
            <!-- Добавьте другие контактные данные -->
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Салон красоты. Все права защищены.</p>
    </footer>
</body>
</html>
