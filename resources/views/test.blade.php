<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие из Docker</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Навигация -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Docker Приветствие</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#info">Информация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Контакты</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Основной контент -->
<div class="container my-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Приветствую из Docker!</h1>
        <p class="lead">Этот проект показывает, как создать контейнеризированное приложение с использованием Docker.</p>
        <hr class="my-4">
        <p>Docker позволяет легко разрабатывать, тестировать и разворачивать приложения в стабильной и изолированной среде.</p>
        <a class="btn btn-primary btn-lg" href="https://www.docker.com/" target="_blank" role="button">Узнать больше о Docker</a>
    </div>
</div>

<!-- Информация -->
<section id="info" class="container my-5">
    <h2 class="text-center">О Приложении</h2>
    <p class="text-justify">
        Данное приложение демонстрирует, как использовать Docker для запуска веб-приложений. Использование Docker упрощает
        процессы разработки, так как окружение можно легко перенести на другой сервер или локальную машину.
        Вы можете легко управлять зависимостями, файлами конфигурации и данными, благодаря Docker-контейнерам.
    </p>
</section>

<!-- Контакты -->
<section id="contact" class="container my-5">
    <h2 class="text-center">Контакты</h2>
    <p class="text-center">Для получения дополнительной информации свяжитесь с нами:</p>
    <ul class="list-unstyled text-center">
        <li><a href="mailto:support@dockerapp.com">support@dockerapp.com</a></li>
        <li>Телефон: +7 (123) 456-7890</li>
        <li>Адрес: ул. Docker, 123, г. Москва</li>
    </ul>
</section>

<!-- Подвал -->
<footer class="bg-primary text-white text-center py-3">
    <p>&copy; 2024 Docker Приложение. Все права защищены.</p>
</footer>

<!-- Подключение Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
