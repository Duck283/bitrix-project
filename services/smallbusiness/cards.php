<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Товары");
?>
<div class="container">

        <h1 class="mt-4 mb-3">Предметы</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Главная</a>
            </li>
            <li class="breadcrumb-item active">Предметы</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#" type="button">Все</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" type="button"><i class="fas fa-utensils text-success" aria-hidden="true"></i> Съедобные</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" type="button"><i class="fas fa-exclamation-triangle text-danger " aria-hidden="true"></i> Несъедобные</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active">
                        <div class="row mt-4">
                            <div class="col-12">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-md-2 text-center">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/exam/blue_table.jpg" alt="Image" style="max-width: 128px; max-height: 128px;">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><strong>Уникальный стол</strong> <small>@Синий</small> <i class="fas fa-exclamation-triangle text-danger" title="Не ешьте это"></i></h5>
                                                        <div class="card-text">
                                                            Такой стол не найти нигде. Мы знаем, мы искали. Только у нас, только сейчас.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-md-2 text-center">
                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/exam/ananas.jpg" alt="Image" style="max-width: 128px; max-height: 128px;">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><strong>Ананас</strong> <small>@Желтый</small>  <i class="fas fa-utensils text-success" title="Съедобно"></i></h5>
                                                        <div class="card-text">
                                                            <p>Пока вы едите ананас - он ест вас!</p>

                                                            <p>Содержащиеся в ананасе биологически активные вещества наделяют его уникальными целебными свойствами. Во-первых, он стимулирует пищеварение, повышая ферментативную активность желудочного сока, поэтому при обильных приемах пищи рекомендуется выпивать стакан ананасового сока или съедать ломтик свежего ананаса. Во-вторых, ананас понижает артериальное давление, разжижает кровь и предотвращает развитие множества опасных заболеваний сердечно-сосудистой системы, таких, как, атеросклероз, тромбоз сосудов, инсульт и инфаркт миокарда. Кроме того, ананас эффективен при лечении артрита, бронхита, пневмонии, различных инфекционных заболеваний и болезней центральной нервной системы.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5>Всего предметов на вкладке: 2</h5>

                                <ul class="pagination justify-content-center mt-4">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Назад">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Назад</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Вперед">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Вперед</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
