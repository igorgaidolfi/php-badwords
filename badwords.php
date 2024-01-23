<?php  
    $paragraph = $_GET["paragraph"];
    $badword = $_GET["badword"];
    $new_paragraph = str_ireplace($badword, '***',$paragraph);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
        <div>
            <p>Paragrafo inserito:</p>
            <?php echo $paragraph;?>
            <p>Lunghezza paragrafo: <?php echo strlen($paragraph);?> </p>
            <p>Paragrafo censurato:</p>
            <?php echo $new_paragraph;?>
            <p>Lunghezza paragrafo: <?php echo strlen($new_paragraph);?> </p>
        </div>
    </body>
</html>