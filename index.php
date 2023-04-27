<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php require_once('./modules/ui/main-header.php') ?>
    <div class="search">
        <div class="sr1">
            <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="post">
                <table>
                    <tr>
                        <td>
                            <input type="text" name="search" placeholder="Search...">

                        </td>
                        <td>
                            <button type="subsearch">Go</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        if (!empty($_POST["search"])) {
            $search = $_POST["search"];
        }
        ?>
    </div>
    </header>
    <main>
        <div class="daynews" id="main">
            <div class="img">
                <?php
                require('connection.php');

                $extragere = "SELECT * FROM glavnoe";
                $result = @mysqli_query($conn, $extragere);
                $rows = @mysqli_fetch_array($result) ?>

                <a href="fullnews/fullglavnoe.php" name="newsglavnoe">
                    <img src="images/<?php echo $rows['imgName']; ?>" width="100%" height="100% "
                        data-glavnoenews-id="<?= $rows['IDNews'] ?>">
                </a>
            </div>
            <div class="text">
                <? echo $rows['Text']; ?>
            </div>
        </div>
        <div class="newnews">
            <?php
            $rows = @mysqli_fetch_array($result) ?>
            <a href="fullnews/fullglavnoe.php" name="newsglavnoe">
                <img src="images/<?php echo $rows['imgName']; ?>" width="100%" height="100% "
                    data-glavnoenews-id="<?= $rows['IDNews'] ?>">
            </a>
            <div class="text1">
                <? echo $rows['Text']; ?>
            </div>
        </div>
        <div class="newnews">
            <?php
            $rows = @mysqli_fetch_array($result) ?>
            <a href="fullnews/fullglavnoe.php" name="newsglavnoe">
                <img src="images/<?php echo $rows['imgName']; ?>" width="100%" height="100% "
                    data-glavnoenews-id="<?= $rows['IDNews'] ?>">
            </a>
            <div class="text1">
                <? echo $rows['Text']; ?>
            </div>
        </div>
        <div class="newnews">
            <?php
            $rows = @mysqli_fetch_array($result) ?>
            <a href="fullnews/fullglavnoe.php" name="newsglavnoe">
                <img src="images/<?php echo $rows['imgName']; ?>" width="100%" height="100% "
                    data-glavnoenews-id="<?= $rows['IDNews'] ?>">
            </a>
            <div class="text1">
                <? echo $rows['Text']; ?>
            </div>
        </div>
        <div class="newnews">
            <?php
            $rows = @mysqli_fetch_array($result) ?>
            <a href="fullnews/fullglavnoe.php" name="newsglavnoe">
                <img src="images/<?php echo $rows['imgName']; ?>" width="100%" height="100% "
                    data-glavnoenews-id="<?= $rows['IDNews'] ?>">
            </a>
            <div class="text1">
                <? echo $rows['Text']; ?>
            </div>
        </div>
        </div>
        <?php
        @mysqli_close($conn);
        ?>
        <div class="section" id="sport">
            <H2>Sport</H2>
        </div>
        <?php
        require_once('./modules/sport.php');
        ?>
        <div class="section" id="polit">
            <h2>Politics</h2>
        </div>
        <?php
        require_once('./modules/politic.php');
        ?>
        <div class="section" id="techno">
            <h2>Technology</h2>
        </div>
        <?php
        require_once('./modules/tehno.php');
        ?>

    </main>
    <?php
    require_once("./modules/ui/fullfooter.php")
        ?>
    <script>
        $(document).ready(function () {
            $('a[name=newssport]').click(function (event) {
                event.preventDefault();
                window.location.assign("./fullnews/fullsport.php?sid=" + event.target.getAttribute('data-sportnews-id'));
            })
        });
        $(document).ready(function () {
            $('a[name=newspolit]').click(function (event) {
                event.preventDefault();
                window.location.assign("./fullnews/fullpolit.php?sid=" + event.target.getAttribute('data-politnews-id'));
            })
        });
        $(document).ready(function () {
            $('a[name=newstehno]').click(function (event) {
                event.preventDefault();
                window.location.assign("./fullnews/fulltehno.php?sid=" + event.target.getAttribute('data-tehnonews-id'));
            })
        });
        $(document).ready(function () {
            $('a[name=newsglavnoe]').click(function (event) {
                event.preventDefault();
                window.location.assign("./fullnews/fullglavnoe.php?sid=" + event.target.getAttribute('data-glavnoenews-id'));
            })
        });
    </script>

</body>

</html>