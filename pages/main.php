<!DOCTYPE html>
<html lang="en">
<style>
    *{
        box-sizing: border-box;
    }

    .menu{
        display: inline-block;
        width: 150px;
        padding: 10px;
        margin: 0 5px;
        text-decoration: none;
        border: 2px solid lightblue;
        text-align: center;
    }

    .menu:hover{
        background-color: lightblue;
    }

    .menu__wrapper{
        max-width: 1000px;
        margin: 0 auto;
    }


</style>

<head>
    <meta charset="UTF-8">
<title>ЛЭКС СПБ</title>


</head>
<body>
<H1>ЛЭКС СПБ</H1>
<?php if(isset($MainPage)) :?>

    <div class="menu__wrapper">
        <a class="menu" href="index.php">Home</a>
        <?php foreach ($MainPage as $item): ?>
            <?php
                $link =$item['link']
            ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</body>
</html>