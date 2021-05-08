<?php

$date = $_POST['date'];

$wsdl = 'DisposWS.wsdl';
$client = new SoapClient($wsdl,[]);  // The trace param will show you errors

// web service input param
$request_param = array(
    'date' => $date
);

$res = $client->rechercheDisposParDate($request_param);
$dispos = $res->return;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="CSS/cvven-cli.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="row titre justify-content-center">Disponibilités pour le <?php echo $date; ?></h1>
    <table class="table table-striped">
        <thead>
            <th>Logement</th>
            <th>Disponible</th>
        </thead>
        <tbody>
        <?php foreach ($dispos as $dispo): ?>
        <tr>
            <td>
                <?php echo $dispo->typeLogement; ?>
            </td>
            <td>
                <?php echo $dispo->nbDisponibilites; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-primary">Retour</a>
</body>
</html>
