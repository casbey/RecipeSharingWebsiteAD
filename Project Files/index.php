<?php require_once './protected/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?=CHARSET?>">
    <title><?=TITLE?></title>
    <?php if(!empty(CSS)){
        $css_item_count = count(CSS);
           
        for($i = 0; $i < $css_item_count; $i++){
         echo '<link rel="stylesheet" type="text/css" href="'.CSS_DIR.CSS[$i].'">';
        }    
    }?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include VIEWS_DIR.'header.php';?>
    <?php require PROTECTED_DIR.'menu.php';?>
    <?php require PROTECTED_DIR.'content.php';?>
    <?php include VIEWS_DIR.'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>