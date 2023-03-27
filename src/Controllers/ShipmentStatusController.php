<?php

declare(strict_types=1);

namespace Controllers;

use Entities\ShipmentStatus;

class ShipmentStatusController
{

    public static function makeCourierRequest(ShipmentStatus $shipmentStatus)
    {

      $trackingNumber = $shipmentStatus->getTrackingNumber();
      // nome del parametro da mandare all api
      $trackingDenomination = $shipmentStatus->getCourier()?->getTrakingDenomination();

      /*
        * Qui si esegue la richiesta all api e si aspetta la risposta.
        * Per una performance migliore e scalabilità si dovrebbe gestire in modo asincrono (userei symfony messanger).
        * Questa funzione si puo anche spezzare in due parti: creazione e invio
        * Qui si puo includere logica di business.
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
