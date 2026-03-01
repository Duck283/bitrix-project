<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>   
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= SITE_TEMPLATE_PATH ?>/images/banners/dino_banner_1.jpg" alt="Динозаврик баннер 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Динозавры не игрушки</h3>
                        <hr class="border-light">
                        <div>
                            <p>Эти гигантские животные жили много лет назад. Они были огромные тяжелые и опасные. Их не выводили гулять на поводке, как сейчас. И кормили они себя сами, разрывая все своими острыми зубами. Хорошо, что сейчас они такие лапушки, и прекрасно уживаются дома с нашими котиками <i class="text-danger fas fa-heart"></i></p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="dinosaurs.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= SITE_TEMPLATE_PATH ?>/images/banners/dino_banner_2.jpg" alt="Динозаврик баннер 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Когда у динозаврика режутся зубки</h3>
                        <hr class="border-light">
                        <div>
                            <p>Когда у вашего динозаврика режутся зубки, это очень тяжелый период как для малыша, так и для вас. Убирайте все, что можно грызть. Потому что погрызано будет все. И главное: терпение, терпение и еще раз терпение.</p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="blog-post.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= SITE_TEMPLATE_PATH ?>/images/banners/dino_banner_3.jpg" alt="Динозаврик баннер 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Хорошего динозавра много не бывает</h3>
                        <hr class="border-light">
                        <div>
                            <p>Для тех кто любит малышей покрупнее. Когда динозаврик обнимает тебя, а не ты его. А также любителям одна лапа здесь, другая там. Приходите к нам в приют и выбирайте друга побольше.</p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="shelter.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= SITE_TEMPLATE_PATH ?>/images/banners/dino_banner_4.jpg" alt="Динозаврик баннер 4">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Хищный или травоядный</h3>
                        <hr class="border-light">
                        <div>
                            <p>Вопрос: какого динозаврика взять хищного или травоядного, - самый острый при выборе своего питомца. Как не ошибиться с выбром и взять подходящего для себя малыша, рассказывают эксперты.</p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="blog-post.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Популярные динозаврики</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?= SITE_TEMPLATE_PATH ?>/images/dinosaurs/triceratops.jpg" alt="Трицератопс">
                        <div class="card-body">
                            <h5 class="card-title">Трицератопс</h5>
                            <p class="card-text">Спокойный травоядный друг для всей семьи.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?= SITE_TEMPLATE_PATH ?>/images/dinosaurs/pterodaktil.jpg" alt="Птеродактиль">
                        <div class="card-body">
                            <h5 class="card-title">Птеродактиль</h5>
                            <p class="card-text">Активный и любопытный питомец для прогулок.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?= SITE_TEMPLATE_PATH ?>/images/dinosaurs/velociraptor_p.jpg" alt="Велоцираптор">
                        <div class="card-body">
                            <h5 class="card-title">Велоцираптор</h5>
                            <p class="card-text">Умный и энергичный, подходит опытным хозяевам.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
