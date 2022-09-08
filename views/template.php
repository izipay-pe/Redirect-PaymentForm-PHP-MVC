<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Form Izipay</title>
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
</head>
<body>

    <div id="root">
        <div class="App">

            <?php
                session_start();
                Enlaces::enlacesController();
            ?>

        </div>
        
        <?php
            include "views/modules/footer.php";
        ?>

    </div>


</body>

</html>