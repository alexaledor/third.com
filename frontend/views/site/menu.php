<style>
    /* Стили меню */
    #nav {
        display:inline-block;
        width:100%;
        margin:0px auto;
        padding:0;
        background:#335599 url(../images/bg.png) repeat-x 0 -110px;

        border-radius:10px; /*немного css3*/
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        box-shadow:0 2px 2px rgba(0,0,0, .5);
        -moz-box-shadow:0 2px 2px rgba(0,0,0, .5);
        -webkit-box-shadow:0 2px 2px rgba(0,0,0, .5);
    }
    #nav li {
        margin:10px;
        float:left;
        position:relative;
        list-style:none;
    }
    #nav a {
        font-weight:bold;
        color:#e7e5e5;
        text-decoration:none;
        display:block;
        padding:8px 20px;

        border-radius:10px; /*немного css3*/
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        text-shadow:0 2px 2px rgba(0,0,0, .7);
    }

    /* sВыбранный пункт меню */
    #nav .current a, #nav li:hover > a {
        background:#7788aa url(../images/bg.png) repeat-x 0 -20px;
        color:#000;
        border-top:1px solid #f8f8f8;

        box-shadow:0 2px 2px rgba(0,0,0, .7); /*немного css3*/
        -moz-box-shadow:0 2px 2px rgba(0,0,0, .7);
        -webkit-box-shadow:0 2px 2px rgba(0,0,0, .7);
        text-shadow:0 2px 2px rgba(255,255,255, 0.7);
    }

    /* Подуровень */
    #nav ul li:hover a, #nav li:hover li a {
        background:none;
        border:none;
        color:#000;
    }
    #nav ul li a:hover {
        background:#335599 url(../images/bg.png) repeat-x 0 -100px;
        color:#fff;

        border-radius:10px; /*немного css3*/
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        text-shadow:0 2px 2px rgba(0,0,0, 0.7);
    }

    #nav ul li:first-child > a {
        -moz-border-radius-topleft:10px; /*немного css3*/
        -moz-border-radius-topright:10px;
        -webkit-border-top-left-radius:10px;
        -webkit-border-top-right-radius:10px;
    }
    #nav ul li:last-child > a {
        -moz-border-radius-bottomleft:10px; /*немного css3*/
        -moz-border-radius-bottomright:10px;
        -webkit-border-bottom-left-radius:10px;
        -webkit-border-bottom-right-radius:10px;
    }

    /* выпадающий список */
    #nav li:hover > ul {
        opacity:1;
        visibility:visible;
    }
    #nav ul {
        opacity:0;
        visibility:hidden;
        padding:0;
        width:175px;
        position:absolute;
        background:#aabbcc url(../images/bg.png) repeat-x 0 0;
        border:1px solid #7788aa;

        border-radius:10px; /*немного css3*/
        -moz-border-radius:10px;
        -webkit-border-radius:10px;
        box-shadow:0 2px 2px rgba(0,0,0, .5);
        -moz-box-shadow:0 2px 2px rgba(0,0,0, .5);
        -webkit-box-shadow:0 2px 2px rgba(0,0,0, .5);

        -moz-transition:opacity .25s linear, visibility .1s linear .1s;
        -webkit-transition:opacity .25s linear, visibility .1s linear .1s;
        -o-transition:opacity .25s linear, visibility .1s linear .1s;
        transition:opacity .25s linear, visibility .1s linear .1s;
    }
    #nav ul li {
        float:none;
        margin:0;
    }
    #nav ul a {
        font-weight:normal;
        text-shadow:0 2px 2px rgba(255,255,255, 0.7);
    }
    #nav ul ul {
        left:160px;
        top:0px;
    }

</style>
<div class="example">
    <ul id="nav">
        <li class="current"><a href="http://ruseller.com/index.php">Главная</a></li>
        <li><a href="http://ruseller.com/lessons.php">Уроки</a>
            <ul>
                <li><a href="http://ruseller.com/lessons.php?rub=1">HTML</a></li>
                <li><a href="http://ruseller.com/lessons.php?rub=32">JS / jQuery</a>
                    <ul>
                        <li><a href="http://ruseller.com/lessons.php?rub=32">jQuery</a></li>
                        <li><a href="http://ruseller.com/lessons.php?rub=32">JS</a></li>
                    </ul>
                </li>
                <li><a href="http://ruseller.com/lessons.php?rub=37">PHP</a></li>
                <li><a href="http://ruseller.com/lessons.php?rub=2">СSS</a></li>
                <li><a href="http://ruseller.com/lessons.php?rub=29">Для сайта</a></li>
                <li><a href="http://ruseller.com/lessons.php?rub=40">WordPress</a></li>
            </ul>
        </li>
        <li><a href="http://ruseller.com/adds.php">Ресурсы</a>
            <ul>
                <li><a href="http://ruseller.com/adds.php?rub=10">Программы</a>
                    <ul>
                        <li><a href="http://ruseller.com/adds.php?rub=10">Подпункт 1</a></li>
                        <li><a href="http://ruseller.com/adds.php?rub=10">Подпункт 2</a></li>
                        <li><a href="http://ruseller.com/adds.php?rub=10">Подпункт 3</a></li>
                        <li><a href="http://ruseller.com/adds.php?rub=10">Подпункт 4</a></li>
                    </ul>
                </li>
                <li><a href="http://ruseller.com/service.php">Онлайн инструменты</a>
                    <ul>
                        <li><a href="http://ruseller.com/service.php?rub=19">CSS</a></li>
                        <li><a href="http://ruseller.com/service.php?rub=21">Изображения</a></li>
                        <li><a href="http://ruseller.com/service.php?rub=22">Разное</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="http://ruseller.com/page.php?doc=about">Об авторе</a></li>
    </ul>
</div>