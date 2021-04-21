<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>ОЛОЛОША TEAM</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>

</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <a href="/">Админ <span class="cms">Панель</span></a>
        </div>
        <div id="menu">
            <ul>
                <li class="first active"><a href="/admin">Главная</a></li>

                <li><a href="/admin/portfolio">Портфолио</a></li>

            </ul>
            <br class="clearfix"/>
        </div>
    </div>
    <div id="page">
        <div id="sidebar">

            <div class="side-box">
                <h3>Основное меню</h3>
                <ul class="list">
                    <li class="first "><a href="/">Главная</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/portfolio">Портфолио</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                    <?php if (Session::GetUser()): ?>
                        <?php if (Session::GetUser()['status'] == 'admin'): ?>
                            <li class=""><a href="/admin/">Admin <i class="fas fa-dragon"></i></li>
                        <?php endif; ?>
                        <li class=""><a href="/user/logout"><?= Session::GetUser()['username']; ?> <i
                                        class="fas fa-sign-out-alt"></i></a></li>
                    <?php else: ?>
                        <li class=""><a href="/user/login">Авторизация</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>


        <div id="content">
            <div class="box">
                <?php include 'application/views/' . $content_view; ?>

            </div>
            <br class="clearfix"/>
        </div>

        <div id="footer">
            <a href="/">ОЛОЛОША TEAM</a> &copy; 2012 - <?= date('Y'); ?></a>
        </div>
</body>
</html>