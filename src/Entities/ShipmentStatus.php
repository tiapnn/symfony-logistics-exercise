<?php

declare(strict_types=1);

namespace Entities;

class ShipmentStatus
{
  public string $response;

  public function __construct(
    public string $tracking_number,
    public Courier $courier,

    // @TODO: add other properties like status, delivery_date, etc.
  ) {
  }

  /**
   * Get the value of tracking_number
   */
  public function getTrackingNumber()
  {
    return $this->tracking_number;
  }

  /**
   * Set the value of tracking_number
   */
  public function setTrackingNumber($tracking_number): self
  {
    $this->tracking_number = $tracking_number;

    return $this;
  }

  /**
   * Get the value of courier
   */
  public function getCourier()
  {
    return $this->courier;
  }

  /**
   * Set the value of courier
   */
  public function setCourier(Courier $courier): self
  {
    $this->courier = $courier;

    return $this;
  }


  /**
   * Get the value of response
   *
   * @return string
   */
  public function getResponse(): string
  {
    return $this->response;
  }

  /**
   * Set the value of response
   *
   * @param string $response
   *
   * @return self
   */
  public function setResponse(string $response): self
  {
    $this->response = $response;

    return $this;
  }
}
