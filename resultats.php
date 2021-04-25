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
</head>
<body>
    <h1>Disponibilités pour le <?php echo $date; ?></h1>
    <table>
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
</body>
</html>
