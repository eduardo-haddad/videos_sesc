<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        td {
            width: 50%;
        }
    </style>
</head>
<body>

    <form action="player.php" method="get">
        <input type="radio" name="video" value="video1" required>Video1<br>
        <input type="radio" name="video" value="video2" required>Video2
        <br><br><br>
        <input type="radio" name="audio" value="audio1" required>Audio1<br>
        <input type="radio" name="audio" value="audio2" required>Audio2<br><br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>