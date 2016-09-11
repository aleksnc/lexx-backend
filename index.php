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
<?php
    include "settigs/settings.php";
    include 'config.php';
    include "routes/routes.php";


    $app->run();






















?>