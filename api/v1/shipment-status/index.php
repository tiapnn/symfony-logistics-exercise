<?php
/*
  * This folder structure represents the route I would choose for this endpoint:
  * POST {base_uri}/api/v1/shipment-status
  * params: tracking_number, courier_slug
  * headers: authentication, content-type, etc
*/

use Controllers\ShipmentStatusController;
use Models\CourierModel;
use Entities\ShipmentStatus;

/*
  * Simulating data reception in the simplest way.
  * In a real example with API Platform, all necessary input checks would be performed.
  * Appropriate status codes would be returned.
*/

$trackingNumber = $_POST["tracking_number"] ?? die('Missing tracking_number');
$courierSlug = $_POST["courier_slug"] ?? die('Missing courier_slug');

/*
  * @TODO: Validate in the database that the courier exists as an entity.
  * @TODO: Validate that the alphanumeric string of the courier_slug is valid.
*/

// Having previously validated all parameters, load the courier entity.
$courier = CourierModel::getBySlug($courierSlug);
 
// Create a ShipmentStatus entity to persist in the database.
$shipmentStatus = new ShipmentStatus(
  tracking_number: $trackingNumber,
  courier: $courier
);

// Send the request and receive the courier's response.
$courierResponse = ShipmentStatusController::makeCourierRequest($shipmentStatus);

// Save the serialized response in the entity and persist it in the database.
$shipmentStatus->setResponse($courierResponse);

// Send the response as a JSON response.
header('Content-Type: application/json');
echo $courierResponse;
exit;
?>
