<?php
    echo 'aaa';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>css tutorial</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="panel-1"></div><br />
    <div id="panel-2"></div>
    <div id="modal" class="fixed-centered d-none">
        <div id="modal__header"><h1>Title</h1></div>
        <hr />
        <div id="modal__body">Contents</div>
        <hr />
        <div id="modal__footer">
            <button id="btn-close-modal">Close Modal</button>
        </div>
    </div>
    <button id="btn-open-modal" style="margin-top: 50px;">Open Modal</button>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="./index.js"></script>
</body>
</html>