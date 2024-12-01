<?php require_once './protected/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?=CHARSET?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITLE?></title>
    <?php if(!empty(CSS)){
        $css_item_count = count(CSS);
           
        for($i = 0; $i < $css_item_count; $i++){
         echo '<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSS[$i].'">';
        }    
    }?>
</head>
<body>
    <?php include VIEWS_DIR.'header.php';?>
    <?php require PROTECTED_DIR.'menu.php';?>
    <?php require PROTECTED_DIR.'content.php';?>
    <?php include VIEWS_DIR.'footer.php';?>
</body>
</html>