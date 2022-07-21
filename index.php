<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $myString='Ciao sono Davide e queste sono le parole censurate ';
        $badWord= $_GET['badword'];
        
    ?>
    <div> <?php echo $myString; ?></div>
    <div>La lunghezza della stringa è di <?php echo strlen($myString); ?> caratteri</div>
    <div> Stringa censurata: <?php echo str_replace($badWord, '***',$myString ); ?></div>
</body>
</html>