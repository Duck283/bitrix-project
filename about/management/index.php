<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>
<div class="container">

        <h1 class="mt-4 mb-3">Личный кабинет</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Главная</a>
            </li>
            <li class="breadcrumb-item active">Личный кабинет</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="my-3">Профиль</h3>

                Здравствуйте, Николай Николаич. С возвращением.
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="my-3">Мои заявки приюта</h3>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Динозаврик</th>
                            <th scope="col">Дата заявки</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Email</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Коммент</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">1</th>
                            <td>Маруся</td>
                            <td>21.01.2023</td>
                            <td><span class="text-danger">Отклонена</span></td>
                            <td>Николай Николаич</td>
                            <td>nikola@gluttonous.ru</td>
                            <td>+70001110011</td>
                            <td>Хочу динозаврика</td>
                        </tr>
                        <tr>
                            <th scope="col">2</th>
                            <td>Маруся</td>
                            <td>31.01.2023</td>
                            <td><span class="text-info">Отклонена</span></td>
                            <td>Николай Николаич</td>
                            <td>nikola@gluttonous.ru</td>
                            <td>+70001110011</td>
                            <td>Ну очень хочу динозаврика</td>
                        </tr>
                        <tr>
                            <th scope="col">3</th>
                            <td>Маруся</td>
                            <td>24.03.2024</td>
                            <td><span class="text-success">Принята</span></td>
                            <td>Николай Николаич</td>
                            <td>nikola@gluttonous.ru</td>
                            <td>+70001110011</td>
                            <td>Все справки отправил</td>
                        </tr>
                        <tr>
                            <th scope="col">4</th>
                            <td>Семен</td>
                            <td>24.08.2024</td>
                            <td><span class="text-info">В работе</span></td>
                            <td>Николай Николаич</td>
                            <td>nikola@gluttonous.ru</td>
                            <td>+70001110011</td>
                            <td>Марусе нужен братюня</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="pagination justify-content-center">
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
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
