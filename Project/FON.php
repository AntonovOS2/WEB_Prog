
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="FON.css">
</head>

<body class = "FON">
    <header>
        <h1> Технический форум
        </h1>
        <div><img class="pic1" src = "img/FONHEADER.png" alt = ''></div>
        <nav>   Навигация:
            <ol class = navigation_spisok>
                <a href="#Start">   Описание форума</a>
            </ol>

            <ol class = navigation_spisok>
                <a href ="#Statii">
                Статьи</a>
            </ol>
            <a href = #Foot><ol class = navigation_spisok>
                Контакты
            </ol> </a>
            <ol  class ='register'>
                <a href = "http://webprog/Project/index1.php">
                    Регистрация/авторизация </a>
            </ol>

            <ol  class ='register'>
                    <?php
                    $get = $_GET['get'];
                    echo $get;
                    ?>
            </ol>

        </nav>
        <div>
        <p class = 'opisanie'><img class="pic2" src = 'img/FONPLATA.JPG' alt = ''></p>
        <article id="Start"> <p class = "SpaceText"> Описание форума:
            <br> Технический форум предназначенный для размещения статей.
            <br> На форуме вы встретите статьи связанные с автоматизацией технологических процессов.
            <br> Новинки в сфере автоматизации. Методики подключения интерфейсов.
            <br> Документацию для приборов нижнего/среднего/верхнего уровня.
            <br> Идеи для реализации умного дома.
            <br> Советы для реализации проектов. </p> </article>
        </div>
    </header>

    <main>
        <article id="Statii">
            <p class = 'paragraph'>
                <img class = 'pic3' src = 'img/Statia1.jpg' alt = ''>
                <a href="http://webprog/Project/ART1.html">
                <span>Стандарт промышленной сети EtherCAT</span> </a>
                <br>
                EtherCAT — это открытый международный стандарт: EtherCAT является официальной спецификацией IEC/PAS 62407, частью стандартов IEC 61800-7, IEC 61784-2 и IEC 61158.
            </p>
            <br>
            <p class = 'paragraph'>
                <img class = 'pic3' src = 'img/Statia2.jpg' alt = ''>
                <a href="http://webprog/Project/ART2.html">
                    <span>Противоаварийная защита: система ПАЗ(СПАЗ)</span> </a>
                <br>
                Противоаварийная автоматическая защита (ПАЗ) — это аппаратно-программный комплекс, который используется в критических приложениях для перевода системы в безопасное состояние.
            </p>
            <br>
            <p class = 'paragraph'>
                <img class = 'pic3' src = 'img/Statia3.jpg' alt = ''> <a href = 'http://webprog/Project/ART3.html'>
                <span>Однопроводный канал телеметрии по PLC</span> </a>
                <br>
                PLC (Power Line Communication) – коммуникационная сеть, транспортом которой является обычная электропроводка квартиры, офиса или предприятия.
            </p>

            <p class = 'peremeshenie'>

                Страницы: 1...  2...  3... 4... 5...
            </p>
        </article>
    </main>

    <footer>
        <article id="Foot">
        <p class = 'foot'>
            Контакты
            <br>
            Номер телефона: 899534536
            <br>
            Адрес почты: FDAFF@bk.ru

        </p>
        </article>
    </footer>

</body>
</html>