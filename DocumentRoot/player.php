<?php
require_once('convert.php');


if(empty($_REQUEST['video']) || empty($_REQUEST['audio'])) {
    header("Location: index.php");
    die();
}


$c = new Convert();
$status = $c->convert_files($_REQUEST['video'], $_REQUEST['audio']);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if($status) { ?>
        <video width="640" height="480" controls>
            <source src="video_files/final/output.mp4" type="video/mp4">
        </video>
    <?php } else { ?>
        <p>Erro ao converter arquivos</p>
    <?php } ?>
</body>
</html>
