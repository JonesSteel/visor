<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not found</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        .main {
            height: 100%;
            width: 100%;
            display: table;
        }

        .wrapper {
            display: table-cell;
            height: 100%;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="wrapper">
            <h4><span style="color: #9F2241;">No hay documentos para la concesión <?php echo $concesion[0]; ?></span></h4>
        </div>
    </div>
</body>

</html>