<!DOCTYPE html>
<html lang="en">
    <?php if(isset($MainPage)) :?>
        <?php foreach ($MainPage as $item): ?>
            <?php
                if($item['link']==$link) {
                    $title = $item['title'];
                    $content = $item['content'];
                }
            ?>
        <?php endforeach; ?>
                <head>
                    <meta charset="UTF-8">
                    <title>ЛЭКС СПБ:<?php echo $title; ?></title>
                </head>
                <body>
                
                <div class="menu__wrapper">
                    <a class="menu" href="index.php">Home</a>
                    <?php foreach ($MainPage as $item): ?>
                        <?php if($item['header_menu']=='1') :?>
                            <a class="menu" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <H1><?php echo $title; ?></H1>
                        <div><?php echo $content; ?></div>
                </body>
    <?php endif; ?>
</html>