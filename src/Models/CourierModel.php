<?php

declare(strict_types=1);

namespace Models;

use Entities\Courier;

class CourierModel
{
  /**
   * Retrieves courier data based on the provided slug.
   *
   * @param string $courierSlug The unique identifier for the courier.
   * @return Courier The Courier entity populated with data.
   */
  public static function getBySlug(string $courierSlug) :Courier
  {
    // This function should query the database and retrieve all data related to the courier.
    // For now, it returns mock data.

    // Mock response - replace with actual database query.
    $courierData = match ($courierSlug) {
        'ups' => [
            "name" => "UPS",
            "authMethod" => "api_key",
            "apiUri" => "https://api.ups.com/v3/",
            "apiUriMethod" => "POST",
            "trakingDenomination" => "trackingNumber",
        ],
        // Add other couriers here, e.g., 'fedex', 'dhl'
        default => [ // Default or fallback data if slug doesn't match
            "name" => "Unknown Courier",
            "authMethod" => "none",
            "apiUri" => "",
            "apiUriMethod" => "GET",
            "trakingDenomination" => "trackingId",
        ],
    };

    return new Courier(
      courierSlug: $courierSlug, // Use the passed slug
      name: $courierData["name"],
      authMethod: $courierData["authMethod"],
      apiUri: $courierData["apiUri"],
      apiUriMethod: $courierData["apiUriMethod"],
      trakingDenomination: $courierData["trakingDenomination"],
    );
  }
}