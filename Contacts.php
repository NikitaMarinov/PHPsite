<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
    require_once("./modules/ui/fullheader.php")
        ?>
    <main>
        <div class="contacts">
            <div class="sectioncom">
                <h2>Наше местоположение!</h2>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d247.5537881200645!2d28.84269256231824!3d47.000607417093605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDfCsDAwJzAyLjIiTiAyOMKwNTAnMzMuMSJF!5e0!3m2!1sru!2s!4v1682131475576!5m2!1sru!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="sectioncom">
                <h2>Контакты!</h2>
            </div>
            <div class="text2">
                <div class=cont>
                    <table>
                        <tr>
                            <td>Адрес редакций:</td>
                            <td> 17/1, Chișinău, Молдавия</td>
                        </tr>
                        <tr>
                            <td>Наш емали:</td>
                            <td> newNs@gmail.com </td>
                        </tr>
                        <tr>
                            <td>FaceBook:</td>
                            <td>https://ru-ru.facebook.com/ </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </main>
    <?php
    require_once("./modules/ui/fullfooter.php")
        ?>
</body>
</html>