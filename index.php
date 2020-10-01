<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="src/styles/bootstrap.css">
    <link rel="stylesheet" href="src/styles/styles.css">
    <link rel="stylesheet" href="src/styles/rangeslider.css">
    <title>WBP</title>
</head>

<body>

<!-- BODY START -->
<div class="wrapper">
    <nav>
        <div class="container-fluid p-0">
            <div class="navbar-logo">
                <div class="row">
                    <div class="col-logo">
                        <img src="src/media/World_Bank_logo.svg" class="logo" alt="">
                    </div>
                    <div class="col-4 post-logo">
                        <div class="row">
                            <div class="col-12 pl__f-line">WORLD BANK</div>
                            <div class="col-12 pl__s-line">Publications</div>
                        </div>
                    </div>
                    <div class="col text-right my-auto phone">
                        <div class="col-auto phone__f-line">8-800-100-5005</div>
                        <div class="col-auto phone__s-line">+7 (3452) 522-000</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-dark nav-bg-dark">
            <ul class="nav nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="#">Кредитные карты</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Вклады</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Дебетовая карта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Страхование</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Друзья</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Интернет-банк</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="conatiner main-content">
        <div class="row">
            <div class="col-auto" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Вклады</a></li>
                    <li class="breadcrumb-item active">Калькулятор</li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8">
                <div class="calculator">
                    <div class="caption">Калькулятор</div>

                    <div class="form">
                        <div class="row form-row">
                            <div class="col-4 align-vertical-center">
                                <label for="datepicker">Дата оформления вклада</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="datepicker" placeholder="дд.мм.гггг" name="date" required>
                            </div>
                            <div class="col-auto align-vertical-center is-invalid d-none" id="date_invalid">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                                <label>Неверный формат данных</label>
                            </div>
                        </div>

                        <div class="row form-row">
                            <div class="col-4 align-vertical-center">
                                <label for="deposit_summ">Сумма вклада</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="deposit_summ" name="summ_deposit" value="1000">
                            </div>
                            <div class="col-3 align-vertical-center">
                                <div class="w-100">
                                    <input class="range-control" id="range_deposit_summ" type="range" min="1000" max="3000000" value="0">
                                </div>
                                <div class="range-desc w-100">
                                    <div class="float-left">1 тыс. руб.</div>
                                    <div class="float-right">3 000 000</div>
                                </div>
                            </div>
                            <div class="col-auto align-vertical-center is-invalid d-none" id="summ_invalid">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                                <label>Неверный формат данных</label>
                            </div>

                        </div>

                        <div class="row form-row">
                            <div class="col-4 align-vertical-center">
                                <label for="deposit_term">Срок вклада</label>
                            </div>
                            <div class="col-auto">
                                <select type="text" id="deposit_term" name="deposit_term">
                                    <option value="1">1 год</option>
                                    <option value="2">2 года</option>
                                    <option value="3">3 года</option>
                                    <option value="4">4 года</option>
                                    <option value="5">5 лет</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-row">
                            <div class="col-4 align-vertical-center">
                                <label for="deposit_refill">Пополнение вклада</label>
                            </div>
                            <div class="col-auto">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="deposit_refill"
                                           id="deposit_refill_radio1" value="0" checked>
                                    <label class="form-check-label" for="deposit_refill_radio1">Нет</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" name="deposit_refill"
                                           id="deposit_refill_radio2" value="1">
                                    <label class="form-check-label" for="deposit_refill_radio2">Да</label>
                                </div>
                            </div>
                        </div>

                        <div class="row form-row">
                            <div class="col-4 align-vertical-center">
                                <label for="deposit_refill_summ">Сумма пополнения вклада</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="deposit_refill_summ" name="deposit_refill_summ">
                            </div>
                            <div class="col-3 align-vertical-center">
                                <div class="w-100">
                                    <input class="range-control" id="range_refill_summ" type="range" min="1000" max="3000000" value="0">
                                </div>
                                <div class="range-desc w-100">
                                    <div class="float-left">1 тыс. руб.</div>
                                    <div class="float-right">3 000 000</div>
                                </div>
                            </div>
                            <div class="col-auto align-vertical-center is-invalid d-none" id="refill_summ_invalid">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                                <label>Неверный формат данных</label>
                            </div>
                        </div>
                        <div class="row form-row form-button-row">
                            <div class="col-auto">
                                <button class="btn btn-success" onclick="Calculate()">Рассчитать</button>
                            </div>
                            <div class="col-auto my-auto">
                                <span class="result-label">Результат:</span>&nbsp;<span class="result-summ">0</span>&nbsp;руб.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<footer class="footer">
    <div class="container">
        <div class="row footer__links">
            <div class="col-auto">
                <a href="#">Кредитные карты</a>
            </div>
            <div class="col-auto">
                <a href="#">Вклады</a>
            </div>
            <div class="col-auto">
                <a href="#">Дебетовая карта</a>
            </div>
            <div class="col-auto">
                <a href="#">Страхование</a>
            </div>
            <div class="col-auto">
                <a href="#">Друзья</a>
            </div>
            <div class="col-auto">
                <a href="#">Интернет-банк</a>
            </div>
        </div>
    </div>
</footer>

<script src="src/js/jquery-3.5.1.js"></script>
<script src="src/js/script.js"></script>
<script src="src/js/rangeslider.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="src/js/jqueru-ui.js"></script>
<script src="src/js/datepicker-ru.js"></script>

<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "dd.mm.yy"
        });
    });

    $(".range-control").rangeslider({
        polyfill: false
    });
</script>
<!-- BODY END -->
</body>
</html>