<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продажа кактусов</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="static/images/cactus1.jpg">
    <style>
        .hero {
            background: url('static/images/hero-bg.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .cta-btn {
            font-size: 1.2rem;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<!-- Главный экран -->
<section class="hero">
    <div class="container">
        <h1>Лучшие кактусы для вашего дома и офиса</h1>
        <p>Купите качественные и красивые кактусы прямо сейчас</p>
        <a href="#catalog" class="btn btn-primary cta-btn">Посмотреть каталог</a>
    </div>
</section>

<!-- О нас -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>О нас</h2>
                <p>Мы предлагаем широкий ассортимент кактусов и сопутствующих товаров. Наша миссия - помочь вам украсить ваш дом и офис живыми растениями.</p>
            </div>
            <div class="col-md-6">
                <img src="static/images/about-us.jpg" alt="О нас" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Каталог товаров -->
<section id="catalog" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Каталог товаров</h2>
        <div class="row">
            <!-- Пример товара -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/images/cactus1.jpg" class="card-img-top" alt="Кактус 1">
                    <div class="card-body">
                        <h5 class="card-title">Кактус 1</h5>
                        <p class="card-text">Описание кактуса 1.</p>
                        <p class="card-text"><strong>Цена: 500 руб.</strong></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cactusModal1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/images/cactus1.jpg" class="card-img-top" alt="Кактус 1">
                    <div class="card-body">
                        <h5 class="card-title">Кактус 1</h5>
                        <p class="card-text">Описание кактуса 1.</p>
                        <p class="card-text"><strong>Цена: 500 руб.</strong></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cactusModal1">Подробнее</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="static/images/cactus1.jpg" class="card-img-top" alt="Кактус 1">
                    <div class="card-body">
                        <h5 class="card-title">Кактус 1</h5>
                        <p class="card-text">Описание кактуса 1.</p>
                        <p class="card-text"><strong>Цена: 500 руб.</strong></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cactusModal1">Подробнее</button>
                    </div>
                </div>
            </div>
            <!-- Добавьте больше товаров здесь -->
        </div>
    </div>
</section>

<!-- Модальное окно для подробной информации о кактусе -->
<div class="modal fade" id="cactusModal1" tabindex="-1" role="dialog" aria-labelledby="cactusModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cactusModalLabel1">Кактус 1: Подробная информация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Описание кактуса 1. Здесь можно добавить подробное описание кактуса, его особенности, условия содержания и другую полезную информацию.</p>
                <p>Например, кактус 1 происходит из семейства Cactaceae и хорошо процветает в солнечных местах с недостаточным поливом.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Преимущества -->
<section id="benefits" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Преимущества</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-truck fa-3x mb-3"></i>
                <h5>Быстрая доставка</h5>
                <p>Мы доставим ваш заказ в кратчайшие сроки.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-seedling fa-3x mb-3"></i>
                <h5>Гарантия качества</h5>
                <p>Только здоровые и красивые растения.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-star fa-3x mb-3"></i>
                <h5>Эксклюзивные сорта</h5>
                <p>У нас вы найдете уникальные кактусы.</p>
            </div>
        </div>
    </div>
</section>

<!-- Отзывы клиентов -->
<section id="testimonials" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Отзывы клиентов</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Отличные кактусы! Очень довольна покупкой."</p>
                        <footer class="blockquote-footer">Анна П.</footer>
                    </div>
                </div>
            </div>
            <!-- Добавьте больше отзывов здесь -->
        </div>
    </div>
</section>

<!-- Форма обратной связи -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Свяжитесь с нами</h2>
        <form action="send_email.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email">
                </div> 
            </div>
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Ваше сообщение"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</section>

<!-- Контактная информация -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Контактная информация</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                <p>Адрес: ул. Кактусовая, 123</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-phone fa-2x mb-3"></i>
                <p>Телефон: +7 123 456 7890</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-envelope fa-2x mb-3"></i>
                <p>Email: info@cactusshop.ru</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white text-center">
    <div class="container">
        <p>&copy; 2024 Кактус-шоп. Все права защищены.</p>
        <p><a href="#" class="text-white">Политика конфиденциальности</a> | <a href="#" class="text-white">Условия использования</a></p>
    </div>
</footer>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97354859, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97354859" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>