<?php

declare(strict_types=1);

namespace Controllers;

use Entities\ShipmentStatus;

class ShipmentStatusController
{

    public static function makeCourierRequest(ShipmentStatus $shipmentStatus): string
    {

      $trackingNumber = $shipmentStatus->getTrackingNumber();
      $trackingDenomination = $shipmentStatus->getCourier()?->getTrakingDenomination();

      /*
        * Here the request to the API is executed, and the response is awaited.
        * For better performance and scalability, this should be handled asynchronously (e.g., using Symfony Messenger).
        * This function could also be split into two parts: creation and sending.
        * Business logic can be included here.
      */

      // Mock response
      return json_encode([
        "order_status" => "pending",
        "latitude" => 41.88797847902665,
        "longitude" =>  12.484462997460644,
        "last_updated" =>  1679840345,
      ]);

    }

}