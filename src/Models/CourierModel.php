<?php

declare(strict_types=1);

namespace Models;

use Entities\Courier;

class CourierModel
{
  public static function getBySlug(string $courierSlug) :Courier
  {
    // Questa funzione interroga il db e preleva tutti i dati relativi al corriere.

    // Mock response.
    $courierData = [
      "courierSlug" => $courierSlug,
      "name" => "UPS",
      "authMethod" => "api_key",
      "apiUri" => "https://api.ups.com/v3/",
      "apiUriMethod" => "POST",
      "trakingDenomination" => "trackingNumber",
    ];

    return new Courier(
      courierSlug: $courierData["courierSlug"],
      name: $courierData["name"],
      authMethod: $courierData["authMethod"],
      apiUri: $courierData["apiUri"],
      apiUriMethod: $courierData["apiUriMethod"],
      trakingDenomination: $courierData["trakingDenomination"],
    );
  }
}
