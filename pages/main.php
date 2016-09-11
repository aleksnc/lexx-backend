<!DOCTYPE html>
<html lang="en">
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
            <?php if($item['header_menu']=='1') :?>
                <a class="menu" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</body>
</html>