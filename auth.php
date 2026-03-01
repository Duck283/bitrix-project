<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<div class="container">

        <h1 class="mt-4 mb-3">Авторизация</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Главная</a>
            </li>
            <li class="breadcrumb-item active">Авторизация</li>
        </ol>

        <div class="card my-4 mx-auto px-0 col-lg-6 col-sm-12">
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    Неверный логин или пароль.
                </div>

                <form>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-fingerprint"></i> </span>
                            </div>
                            <input name="" class="form-control" placeholder="Логин" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" placeholder="Пароль" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMeCheckbox">
                            <label class="form-check-label" for="rememberMeCheckbox">Запомнить меня на этом компьютере</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Войти</button>
                    </div>

                    <p class="text-center"><a href="#">Забыли пароль?</a></p>
                    <p class="text-center">Впервые на сайте? <a href="/auth.php?register=yes">Зарегистрируйтесь</a></p>
                </form>
            </div>
        </div>
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
