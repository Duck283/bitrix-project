<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
<div class="container">

        <h1 class="mt-4 mb-3">О компании</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Главная</a>
            </li>
            <li class="breadcrumb-item active">О компании</li>
        </ol>

        <div class="row">
            <div class="col-lg-6">
                <h2>Обжорозаврик <i class="fas fa-dragon"></i> - это круто</h2>
                <p>На нашем сайте вы можете:</p>
                <ul>
                    <li>
                        <strong>Приютить динозаврика</strong>
                    </li>
                    <li>Узнать о динозаврах побольше</li>
                    <li>Поделится интересным</li>
                    <li>Почитать об историях о домашних динозаврах</li>
                    <li>Купить своему динозаврику покушать или кроватку</li>
                </ul>
                <p>Польный каталог динозавров. Огромный магазин товаров для динозваров. Дружелюбное сообщество любителей динозавров. И свой приют для динозавров - все это <strong>Обжорозаврик</strong>.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img class="img full-width" src="<?= SITE_TEMPLATE_PATH ?>/images/zavri.jpg" alt="Обжорозаврик" width="300" height="300">
            </div>
        </div>

    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
