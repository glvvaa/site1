<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Шапка сайта с анимированным меню и кнопками поиска, корзины</title>

    <!-- ########## ОБЩИЕ СТИЛИ ШАБЛОНА (НЕ ИСПОЛЬЗУЕМ В ОСНОВНОМ ШАБЛОНЕ) ########## -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic&amp;subset=cyrillic">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css?ver=5.0.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='art_net_theme-material-icons-css'
        href='https://fonts.googleapis.com/icon?family=Material+Icons&#038;ver=5.0.3' type='text/css' media='all' />
    <link rel="stylesheet" href="../pages/main/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pages/main/css/style.css">
    <!-- ########## КОНЕЦ ОБЩИХ СТИЛЕЙ ########## -->

    <!-- ########## СТИЛИ МОДУЛЯ (КОПИРУЕМ В ОСНОВНОЙ ШАБЛОН) ########## -->
    <link rel="stylesheet" href="../pages/main/css/meanmenu.min.css">
    <link rel="stylesheet" href="../pages/main/css/ant026_header.css">
    <!-- ########## КОНЕЦ СТИЛЕЙ МОДУЛЯ ########## -->

</head>

<body>

    <!-- ########## ОБЛАСТЬ МОДУЛЯ (КОПИРУЕМ В ОСНОВНОЙ ШАБЛОН) ########## -->
    <header class="ant026_header-main-header">
        <!-- Header-Top End -->
        <div class="ant026_header-studio_header_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 col-sm-10">
                        <div class="ant026_header-studio_logo">
                            <a href="home.php#index.html"><img src="../pages/main/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-md-6 col-sm-6 ant026_header-navigation">
                        <nav>
                            <ul class="ant026_header-menu">
                                <li><a href="home.php#index.html">Главная</a></li>
                                <li><a href="##">услуги</a>
                                    <ul class="ant026_header-submenu">
                                        <li><a href="#service.html">услуги</a></li>
                                        <li><a href="#service-detail.html">описание услуги</a></li>
                                    </ul>
                                </li>
                                <li><a href="##">страницы</a>
                                    <ul class="ant026_header-submenu">
                                        <li><a href="#project.html">проекты</a></li>
                                        <li><a href="#project-detail.html">описание проекта</a></li>
                                        <li><a href="#team.html">команда</a></li>
                                        <li><a href="#testimonial.html">отзывы</a></li>
                                        <li><a href="#faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li><a href="##">новости</a>
                                    <ul class="ant026_header-submenu">
                                        <li><a href="#blog.html">новости</a></li>
                                        <li><a href="#blog-detail.html">описание новости</a></li>
                                    </ul>
                                </li>
                                <li><a href="##">товары</a>
                                    <ul class="ant026_header-submenu">
                                        <li><a href="#shop.html">магазин</a></li>
                                        <li><a href="#shop-detail.html">описание товара</a></li>
                                        <li><a href="#check-out.html">страница оплаты</a></li>
                                        <li><a href="#cart.html">корзина</a></li>
                                    </ul>
                                </li>
                                <li><a href="#contact.html">связь</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- column End -->
                    <div class="col-md-4 col-sm-4 ant026_header-right-info">
                        <div class="ant026_header-menu_right_icon">
                            <ul class="d-flex align-items-center">
                                <li class="ant026_header-serach_expand"><a href="##"><i class="fas fa-search"></i></a>
                                </li>
                                <li><a href="#cart.html"><i class="fas fa-shopping-cart"></i> <span>3</span></a></li>
                                <li><a href="#contact.html"
                                        class="ant026_header-common_btn ant026_header-hvr-bounce-to-right">ЗВОНОК</a>
                                </li>
                            </ul>
                            <div class="ant026_header-search">
                                <form action="#">
                                    <input id="search" name="search" type="text" placeholder="Поиск...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- Header Bottom End -->
    </header>
    <!-- ########## КОНЕЦ ОБЛАСТЬ МОДУЛЯ (КОПИРУЕМ В ОСНОВНОЙ ШАБЛОН) ########## -->

    <main>
        <section></section>
    </main>

    <footer></footer>

    <!-- ########## ОБЩИЕ СКРИПТЫ ШАБЛОНА (НЕ ИСПОЛЬЗУЕМ В ОСНОВНОМ ШАБЛОНЕ) ########## -->
    <script type='text/javascript' src='../pages/main/js/jquery.js'></script>
    <script type='text/javascript' src='../pages/main/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../pages/main/js/bootstrap.min.js'></script>
    <!-- ########## КОНЕЦ ОБЩИХ СКРИПТОВ ########## -->

    <!-- ########## СКРИПТЫ МОДУЛЯ (КОПИРУЕМ В ОСНОВНОЙ ШАБЛОН) ########## -->
    <script type='text/javascript' src="../pages/main/js/jquery.meanmenu.min.js"></script>
    <script src="../pages/main/js/ant026_header.js"></script>
    <!-- ########## КОНЕЦ СКРИПТОВ МОДУЛЯ ########## -->

</body>

</html>