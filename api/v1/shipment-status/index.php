<?php
/*
  * Questo sistema di cartelle rappresenta la rotta che sceglierei per questo endpoint:
  * POST {base_uri}/api/v1/shipment-status
  * params: tracking_number, courier_slug
  * headers: authentication, content-type, etc
*/

use Controllers\ShipmentStatusController;
use Models\CourierModel;
use Entities\ShipmentStatus;

/*
  * Simulo nel modo più semplice la ricezione di dati.
  * In un esempio reale con api platform si farebbero tutti i controlli del caso sugli input.
  * Si risponderebbe con gli status codes opportuni.
*/

$trackingNumber = $_POST["tracking_number"] ?? die();
$courierSlug = $_POST["courier_slug"] ?? die();

/*
  * @TODO: Validare in db che il corriere esiste come entità.
  * @TODO: Validare che la stringa alfanumerica del corrier_slug sia valida.
*/

// Avendo previamente validato tutti i parametri, carico la entità del corriere.
$courier = CourierModel::getBySlug($courierSlug);
 
// Creo una entità ShipmentStatus da persistere in db.
$shipmentStatus = new ShipmentStatus(
  tracking_number: $trackingNumber,
  courier: $courier
);

// Mando la request e ricevo la response del corriere.
$courierResponse = ShipmentStatusController::makeCourierRequest($shipmentStatus);

// Salvo la risposta serializzata nella entità e persisto in db.
$shipmentStatus->setResponse($courierResponse);

// Si invia la risposta come jsonResponse.
die(json_encode($courierResponse));
?>