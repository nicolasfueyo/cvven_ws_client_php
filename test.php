<?php
$date = '25/04/2021';

$wsdl = 'DisposWS.wsdl';
$client = new SoapClient($wsdl,[]);  // The trace param will show you errors

// web service input param
$request_param = array(
    'date' => $date
);

$res = $client->rechercheDisposParDate($request_param);
$dispos = $res->return;
foreach ($dispos as $dispo){

    echo sprintf("%d %s %d\n", $dispo->idTypeLogement, $dispo->typeLogement, $dispo->nbDisponibilites);
}
