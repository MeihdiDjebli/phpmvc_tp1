<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Good Job !</title>
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/master.css">
    <!-- See https://fontawesome.com/v4.7.0/icons/ for more informations -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous"
    >
</head>

<body>
    <h1>
        <i class="fa fa-thumbs-up"></i>
    </h1>
    <h1>Well done !</h1>
    <?php
    $nombres = [1, 4, 5];

    for ($i=0; $i<count($nombres); $i++) {
        echo ($nombres[$i] % 2 === 0) ? "$nombres[$i] est pair" : "$nombres[$i] est impair";
        echo "<br>";
    }
    ?>

</body>

</html>