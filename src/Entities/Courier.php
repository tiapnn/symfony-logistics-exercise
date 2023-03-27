<?php

declare(strict_types=1);

namespace Entities;

class Courier
{
    // relazione one to many (collection)
    public ShipmentStatus $shipmentStatus;

    public function __construct(
        public string $courierSlug,
        public string $name,
        public string $authMethod,
        public string $apiUri,
        public string $apiUriMethod,
        public string $trakingDenomination,
    ) {
    }


    /**
     * Get the value of courierSlug
     */
    public function getCourierSlug()
    {
        return $this->courierSlug;
    }

    /**
     * Set the value of courierSlug
     */
    public function setCourierSlug($courierSlug): self
    {
        $this->courierSlug = $courierSlug;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of authMethod
     */
    public function getAuthMethod()
    {
        return $this->authMethod;
    }

    /**
     * Set the value of authMethod
     */
    public function setAuthMethod($authMethod): self
    {
        $this->authMethod = $authMethod;

        return $this;
    }

    /**
     * Get the value of apiUri
     */
    public function getApiUri()
    {
        return $this->apiUri;
    }

    /**
     * Set the value of apiUri
     */
    public function setApiUri($apiUri): self
    {
        $this->apiUri = $apiUri;

        return $this;
    }

    /**
     * Get the value of apiUriMethod
     */
    public function getApiUriMethod()
    {
        return $this->apiUriMethod;
    }

    /**
     * Set the value of apiUriMethod
     */
    public function setApiUriMethod($apiUriMethod): self
    {
        $this->apiUriMethod = $apiUriMethod;

        return $this;
    }

    /**
     * Get the value of trakingDenomination
     */
    public function getTrakingDenomination()
    {
        return $this->trakingDenomination;
    }

    /**
     * Set the value of trakingDenomination
     */
    public function setTrakingDenomination($trakingDenomination): self
    {
        $this->trakingDenomination = $trakingDenomination;

        return $this;
    }
}
